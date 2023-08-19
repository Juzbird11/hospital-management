<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PackageInPatient extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'in_patient_id', 'extra_room_charge', 'extra_drug_charges'];
}
