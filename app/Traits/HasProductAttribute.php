<?php 

namespace App\Traits;

trait HasProductAttribute 
{
    public function initializeProductAttribute()
    {
        $this->append(['name', 'barcode', 'base_price', 'price']);
    }

    public function getNameAttribute()
    {
        return $this->product->name;
    }

    public function getBarcodeAttribute()
    {
        return $this->product->barcode;
    }

    public function getBasePriceAttribute()
    {
        return $this->product->base_price;
    }

    public function getPriceAttribute()
    {
        return $this->product->price;
    }
}