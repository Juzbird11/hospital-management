<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OutPatient extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'register_no', 'name', 'age', 'address', 'ph', 'sex', 'out_doctor_id'];
}
