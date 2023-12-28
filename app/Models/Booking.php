<?php

// File: app/Models/Booking.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = ['car_id', 'start_date', 'end_date'];

    // Add any additional methods or properties here
}
