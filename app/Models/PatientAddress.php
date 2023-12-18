<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PatientAddress extends Model
{
    use HasFactory;

    protected $fillable = [
        'patient_id',
        'zip_code',
        'street',
        'number',
        'complement',
        'district',
        'city',
        'state',
        'country'
    ];

    protected $table = 'patient_address';

    protected $primaryKey = 'id';
    
    protected $keyType = 'string';

}
