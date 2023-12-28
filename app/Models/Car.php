<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = ['brand', 'model', 'plate_number', 'rental_rate'];

    // Add any additional methods or properties here
}