<?php

namespace App\Services;

use App\Interfaces\Repository\PatientAddressRepository;
use App\Interfaces\Service\PatientAddressService;

use App\Models\PatientAddress;

class PatientAddressServiceImpl implements PatientAddressService
{
    protected $patientAddressRepository;

    public function __construct(PatientAddressRepository $patientAddressRepository)
    {
        $this->patientAddressRepository = $patientAddressRepository;
    }

    /**
     *
     * @param array $input
     * @param string $patient_id
     * @return PatientAddress
     */
    public function createPatientAddress(array $input, string $patient_id): PatientAddress
    {
        return $this->patientAddressRepository->createPatientAddress($input, $patient_id);
    }

    /**
     *
     * @param array $input
     * @param string $patient_id
     * @return boolean
     */
    public function updatePatientAddress(array $input, string $patient_id): bool
    {
        return $this->patientAddressRepository->updatePatientAddress($input, $patient_id);
    }

   
}
