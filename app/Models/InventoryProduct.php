<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InventoryProduct extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'product_id', 'qty'];

    public function product() {
        return $this->belongsTo(Product::class);
    }
}
