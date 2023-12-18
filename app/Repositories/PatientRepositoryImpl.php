<?php

namespace App\Repositories;

use App\Helpers\Utils;

use App\Models\Patient;

use App\Interfaces\Repository\PatientRepository;

use Illuminate\Pagination\LengthAwarePaginator;

class PatientRepositoryImpl implements PatientRepository
{
    /**
     *
     * @param array $input
     * @return LengthAwarePaginator
     */
    public function getPatients(array $input): LengthAwarePaginator
    {
        $patients = Patient::orderBy('id', 'asc');
        if (isset($input['name']))
            $patients->whereRaw('LOWER(name) LIKE ?', ['%' . strtolower($input['name']) . '%']);

        if (isset($input['cpf']))
            $patients->where('cpf', 'LIKE', "%" . Utils::sanitizeValue($input['cpf']) . "%");

        if (isset($input['cns']))
            $patients->where('cns', 'LIKE', "%" . Utils::sanitizeValue($input['cns']) . "%");

        if (isset($input['status']) && intval($input['status']) == 3) {
            $patients->withTrashed();
        } elseif (isset($input['status']) && intval($input['status']) == 2) {
            $patients->onlyTrashed();
        }


        return $patients->paginate(10);
    }

    /**
     *
     * @param array $input
     * @return Patient
     */
    public function createPatient(array $input): Patient
    {
        return Patient::create([
            'name' => $input['name'],
            'mothers_name' => $input['mothers_name'],
            'birth_date' => $input['birth_date'],
            'cpf' => Utils::sanitizeValue($input['cpf']),
            'cns' => Utils::sanitizeValue($input['cns']),
        ]);
    }

    /**
     *
     * @param array $input
     * @param string $patient_id
     * @return boolean
     */
    public function updatePatient(array $input, string $patient_id): bool
    {
        $patient = Patient::find($patient_id);
        $patient->name = $input['name'];
        $patient->mothers_name = $input['mothers_name'];
        $patient->birth_date = $input['birth_date'];
        $patient->cpf = Utils::sanitizeValue($input['cpf']);
        $patient->cns = Utils::sanitizeValue($input['cns']);
        return $patient->save();
    }

    /**
     *
     * @param string $patient_id
     * @return boolean
     */
    public function deletePatient(string $patient_id): bool
    {
        return Patient::where('id', $patient_id)->delete();
    }

    /**
     *
     * @param string $patient_id
     * @return boolean
     */
    public function restorePatient(string $patient_id): bool
    {
        return Patient::where('id', $patient_id)->withTrashed()->restore();
    }
}
