<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OutPatientBooking extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'name', 'ph', 'out_patient_booking_token_id'];
}
