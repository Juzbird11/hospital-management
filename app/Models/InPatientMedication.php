<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InPatientMedication extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'in_patient_id', 'total'];

    public function products() {
        return $this->hasMany(Product::class);
    }
}
