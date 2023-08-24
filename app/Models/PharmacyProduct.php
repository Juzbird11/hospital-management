<?php

namespace App\Models;

use App\Traits\HasProductAttribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PharmacyProduct extends Model
{
    use HasFactory, HasProductAttribute;

    protected $fillable = ['id', 'product_id', 'qty'];
    
    public function product() {
        return $this->belongsTo(Product::class);
    }
}
