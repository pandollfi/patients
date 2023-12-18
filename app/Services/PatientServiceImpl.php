<?php

namespace App\Services;

use App\Helpers\Utils;
use App\Models\Patient;

use App\Interfaces\Repository\PatientRepository;
use App\Interfaces\Service\PatientService;

use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

class PatientServiceImpl implements PatientService
{
    protected $patientRepository;

    public function __construct(PatientRepository $patientRepository)
    {
        $this->patientRepository = $patientRepository;
    }

    /**
     *
     * @param array $input
     * @return LengthAwarePaginator
     */
    public function getPatients(array $input): LengthAwarePaginator
    {
        return $this->patientRepository->getPatients($input);
    }

    /**
     *
     * @param array $input
     * @return Patient
     */
    public function createPatient(array $input): Patient
    {
        $valid_cns = $this->validateCNSPatient($input['cns']);
        if (!$valid_cns)
            throw new \Exception('Erro: CNS inválido');

        $valid_cpf = Utils::validateCPF($input['cpf']);
        if (!$valid_cpf)
            throw new \Exception('Erro: CPF inválido');
        
        return $this->patientRepository->createPatient($input);
    }

    /**
     *
     * @param array $input
     * @param string $patient_id
     * @return boolean
     */
    public function updatePatient(array $input, string $patient_id): bool
    {
        $valid_cns = $this->validateCNSPatient($input['cns']);
        if (!$valid_cns)
            throw new \Exception('Erro: CNS inválido');

        $valid_cpf = Utils::validateCPF($input['cpf']);
        if (!$valid_cpf)
            throw new \Exception('Erro: CPF inválido');

        return $this->patientRepository->updatePatient($input, $patient_id);
    }

    /**
     *
     * @param string $patient_id
     * @return boolean
     */
    public function deletePatient(string $patient_id): bool
    {
        return $this->patientRepository->deletePatient($patient_id);
    }

    /**
     *
     * @param string $patient_id
     * @return boolean
     */
    public function restorePatient(string $patient_id): bool
    {
        return $this->patientRepository->restorePatient($patient_id);
    }

    /**
     *
     * @param Request $request
     * @return array
     */
    public function validateInput(Request $request): array
    {
        return $request->validate([
            'name' => 'required|min:5|max:200',
            'mothers_name' => 'required|min:5|max:200',
            'birth_date' => 'required',
            'cpf' => 'required|min:14|max:14',
            'cns' => 'required|min:18|max:18',
            'street' => 'required|min:5|max:200',
            'number' => 'required|max:5',
            'zip_code' => 'min:9',
            'complement' => 'min:1|max:200',
            'district' => 'required|max:50',
            'city' => 'required|max:50',
            'state' => 'required|max:2',
        ], [
            'name.required' => 'O campo nome é obrigatório.',
            'name.min' => 'O campo nome deve ter pelo menos 5 caracteres.',
            'name.max' => 'O campo nome deve ter no máximo 200 caracteres.',

            'mothers_name.required' => 'O campo nome da mãe é obrigatório.',
            'mothers_name.min' => 'O campo nome da mãe deve ter pelo menos 5 caracteres.',
            'mothers_name.max' => 'O campo nome da mãe deve ter no máximo 200 caracteres.',

            'birth_date.required' => 'O campo data de nascimento é obrigatório.',

            'cpf.required' => 'O campo CPF é obrigatório.',
            'cpf.min' => 'O campo CPF deve ter 14 caracteres.',
            'cpf.max' => 'O campo CPF deve ter 14 caracteres.',

            'cns.required' => 'O campo CNS é obrigatório.',
            'cns.min' => 'O campo CNS deve ter 18 caracteres.',
            'cns.max' => 'O campo CNS deve ter 18 caracteres.',

            'street.required' => 'O campo rua é obrigatório.',
            'street.min' => 'O campo rua deve ter pelo menos 5 caracteres.',
            'street.max' => 'O campo rua deve ter no máximo 200 caracteres.',

            'number.required' => 'O campo número é obrigatório.',
            'number.max' => 'O campo número deve ter no máximo 5 caracteres.',

            'zip_code.min' => 'O campo CEP deve ter pelo menos 9 caracteres.',

            'complement.min' => 'O campo complemento deve ter pelo menos 1 caracter.',
            'complement.max' => 'O campo complemento deve ter no máximo 200 caracteres.',

            'district.required' => 'O campo bairro é obrigatório.',
            'district.max' => 'O campo bairro deve ter no máximo 50 caracteres.',

            'city.required' => 'O campo cidade é obrigatório.',
            'city.max' => 'O campo cidade deve ter no máximo 50 caracteres.',

            'state.required' => 'O campo estado é obrigatório.',
            'state.max' => 'O campo estado deve ter no máximo 2 caracteres.',
        ]);
    }

    private function validateCNSPatient($cns): bool
    {
        $type_cns = Utils::validateTypeCNSProvDef($cns);
        
        $valid_cns = ($type_cns == Patient::CNS_DEFINITIVE)
            ? Utils::validateCNSDef($cns)
            : Utils::validateCNSProv($cns);
        return $valid_cns;
    }
}
