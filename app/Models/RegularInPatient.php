<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegularInPatient extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'in_patient_id', 'admession_fee', 'mo_fee', 'staff_fee', 'service_charge', 'exam_glave'];

}
