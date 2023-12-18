<?php

namespace App\Interfaces\Service;

use App\Models\Patient;

use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Http\Request;

interface PatientService
{
    public function getPatients(array $input): LengthAwarePaginator;
    public function createPatient(array $input): Patient;
    public function updatePatient(array $input, string $patient_id): bool;
    public function validateInput(Request $request): array;
    public function deletePatient(string $patient_id): bool;
    public function restorePatient(string $patient_id): bool;
}
