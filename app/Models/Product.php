<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // protected $fillable = ['id', 'barcode', 'min_qty', 'baseprice', 'price'];
    protected $fillable = ['name', 'barcode', 'min_qty'];

    protected $visible = ['barcode', 'name', 'min_qty', 'inventory_qty'];

    protected $appends = ['inventory_qty'];

    public function inventoryProduct() {
        return $this->hasOne(InventoryProduct::class);
    }

    public function pharmacyProduct() {
        return $this->hasOne(PharmacyProduct::class);
    }

    protected function inventoryQty() : Attribute
    {
        return Attribute::make(
            get: fn() => $this->inventoryProduct->qty,
        );
    }
}
