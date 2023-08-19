<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InPatientRoom extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'room_no', 'status'];
}
