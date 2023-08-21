<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OTPatient extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'name', 'address', 'procedure_id', 'surgeon_id'];

    public function otServiceCharge() {
        return $this->belongsToMany(OTServiceCharge::class);
    }
}
