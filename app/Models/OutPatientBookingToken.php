<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OutPatientBookingToken extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'no', 'date', 'time', 'out_patient_id'];
}
