<?php

namespace App\Interfaces\Repository;

use App\Models\Patient;

use Illuminate\Pagination\LengthAwarePaginator;

interface PatientRepository
{
    public function getPatients(array $input): LengthAwarePaginator;
    public function createPatient(array $input): Patient;
    public function updatePatient(array $input, string $patient_id): bool;
    public function deletePatient(string $patient_id): bool;
    public function restorePatient(string $patient_id): bool;    
}
