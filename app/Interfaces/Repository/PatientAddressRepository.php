<?php

namespace App\Interfaces\Repository;

use App\Models\PatientAddress;

interface PatientAddressRepository
{
    public function createPatientAddress(array $input, string $patient_id): PatientAddress;
    public function updatePatientAddress(array $input, string $patient_id): bool;
}
