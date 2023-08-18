<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UtilityItem extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'hospital_product_id', 'qty', 'price'];

    public function hospitalProduct() {
        return $this->belongsTo(HospitalProduct::class);
    }
}
