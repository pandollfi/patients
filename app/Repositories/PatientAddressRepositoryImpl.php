<?php

namespace App\Repositories;

use App\Helpers\Utils;

use App\Interfaces\Repository\PatientAddressRepository;

use App\Models\PatientAddress;

class PatientAddressRepositoryImpl implements PatientAddressRepository
{
    /**
     *
     * @param array $input
     * @param string $patient_id
     * @return PatientAddress
     */
    public function createPatientAddress(array $input, string $patient_id): PatientAddress
    {
        return PatientAddress::create([
            'patient_id' => $patient_id,
            'zip_code' => Utils::sanitizeValue($input['zip_code']),
            'street' => $input['street'],
            'number' => $input['number'],
            'complement' => $input['complement'],
            'district' => $input['district'],
            'city' => $input['city'],
            'state' => $input['state'],
        ]);
    }

    /**
     *
     * @param array $input
     * @param string $patient_id
     * @return boolean
     */
    public function updatePatientAddress(array $input, string $patient_id): bool
    {
        $address = PatientAddress::where('patient_id', $patient_id)->first();
        $address->zip_code = Utils::sanitizeValue($input['zip_code']);
        $address->street = $input['street'];
        $address->number = $input['number'];
        $address->complement = $input['complement'];
        $address->district = $input['district'];
        $address->city = $input['city'];
        $address->state = $input['state'];
        return $address->save();
    }
}
