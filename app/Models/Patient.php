<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Patient extends Model
{
    use HasFactory, SoftDeletes;

    const CNS_DEFINITIVE = 1;
    const CNS_PROVISIONAL = 2;
    
    protected $fillable = [
        'name',
        'mothers_name',
        'birth_date',
        'cpf',
        'cns'
    ];

    protected $table = 'patients';

    protected $primaryKey = 'id';
    
    protected $keyType = 'string';

    public function address()
    {
        return $this->hasOne('App\Models\PatientAddress', 'patient_id');
    }
}
