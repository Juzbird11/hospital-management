<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OTPackage extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'name', 'birth', 'max_day', 'max_drug_use', 'fee'];
}
