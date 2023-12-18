<?php

namespace App\Interfaces\Service;

use App\Models\PatientAddress;

interface PatientAddressService
{
    public function createPatientAddress(array $input, string $patient_id): PatientAddress;
    public function updatePatientAddress(array $input, string $patient_id): bool;
}
