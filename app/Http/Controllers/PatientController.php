<?php

namespace App\Http\Controllers;

use App\Interfaces\Service\PatientAddressService;
use App\Interfaces\Service\PatientService;

use App\Models\Patient;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class PatientController extends Controller
{
    protected $patientService;
    protected $patientAddressService;
    public function __construct(
        PatientService $patientService,
        PatientAddressService $patientAddressService
    ) {
        $this->patientService = $patientService;
        $this->patientAddressService = $patientAddressService;
    }

    /**
     *
     * @param Request $request
     * @return void
     */
    public function index(Request $request): View
    {
        $input = $request->all();
        $patients = $this->patientService->getPatients($input);
        return view('patients.index', ['patients' => $patients]);
    }

    /**
     *
     * @return View
     */
    public function create(): View
    {
        return view('patients.form');
    }

    /**
     *
     * @param Request $request
     * @return void
     */
    public function store(Request $request): RedirectResponse
    {
        try {
            $this->patientService->validateInput($request);
            $input = $request->all();
            $patient = $this->patientService->createPatient($input);
            $this->patientAddressService->createPatientAddress($input, $patient->id);

            DB::commit();

            return redirect()->route('patient.index')->with('success', 'Paciente adicionado com sucesso!');;
        } catch (\Exception $e) {
            DB::rollBack();
            session()->flash('error', $e->getMessage());
            return redirect()->back()->withErrors(['error' => 'Ocorreu um erro ao salvar os dados: ' . $e->getMessage()])->withInput();
        }
    }

    /**
     * Undocumented function
     *
     * @param string $id_patient
     * @return void
     */
    public function edit(string $id_patient): View
    {
        $patient = Patient::with('address')->find($id_patient);
        return view('patients.form', ['patient' => $patient]);
    }


    /**
     *
     * @param Request $request
     * @param string $patient_id
     * @return RedirectResponse
     */
    public function update(Request $request, string  $patient_id): RedirectResponse
    {
        try {
            $this->patientService->validateInput($request);

            $input = $request->all();

            $this->patientService->updatePatient($input, $patient_id);
            $this->patientAddressService->updatePatientAddress($input, $patient_id);

            DB::commit();

            return redirect()->route('patient.index')->with('success', 'Paciente alterado com sucesso!');
        } catch (\Exception $e) {
            DB::rollback();
            session()->flash('error', $e->getMessage());
            return redirect()->back()->withErrors(['error' => 'Ocorreu um erro ao atualizar os dados do paciente: ' . $e->getMessage()])->withInput();
        }
    }

    /**
     *
     * @param string $patient_id
     * @return RedirectResponse
     */
    public function destroy(string $patient_id): RedirectResponse
    {
        try {
            $this->patientService->deletePatient($patient_id);
            DB::commit();
            return redirect()->route('patient.index')->with('success', 'Paciente removido com sucesso!');
        } catch (\Exception $e) {
            DB::rollback();
            session()->flash('error', $e->getMessage());
            return redirect()->back()->withErrors(['error' => 'Ocorreu um erro ao remover o paciente: ' . $e->getMessage()])->withInput();
        }
    }

    /**
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function restore(Request $request): RedirectResponse
    {
        try {
            $input = $request->all();
            $this->patientService->restorePatient($input['patient']);
            DB::commit();
            return redirect()->route('patient.index')->with('success', 'Paciente restaurado com sucesso!');
        } catch (\Exception $e) {
            DB::rollback();
            session()->flash('error', $e->getMessage());
            return redirect()->back()->withErrors(['error' => 'Ocorreu um erro ao restaurar o paciente: ' . $e->getMessage()])->withInput();
        }
    }
}
