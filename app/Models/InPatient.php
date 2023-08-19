<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InPatient extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'register_no', 'name', 'address', 'total', 'room_id'];

    public function inPatientMedication() {
        return $this->hasOne(InPatientMedication::class);
    }

    public function regularInPatient() {
        return $this->hasOne(RegularInPatient::class);
    }
}
