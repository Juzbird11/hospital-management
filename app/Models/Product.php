<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'barcode', 'min_qty', 'base_price', 'price'];

    public function inventoryProduct() {
        return $this->hasOne(InventoryProduct::class);
    }

    public function pharmacyProduct() {
        return $this->hasOne(PharmacyProduct::class);
    }
}
