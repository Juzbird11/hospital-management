<?php

namespace App\Models;

use App\Traits\HasProductAttribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InventoryProduct extends Model
{
    use HasFactory, HasProductAttribute;

    protected $fillable = ['product_id', 'qty'];

    protected $with = ['product'];

    public function product() {
        return $this->belongsTo(Product::class);
    }
}
