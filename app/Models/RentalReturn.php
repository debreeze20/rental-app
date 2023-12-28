<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RentalReturn extends Model
{
    protected $fillable = ['booking_id', 'return_date'];

    // Relationship dengan model Booking
    public function booking()
    {
        return $this->belongsTo(Booking::class);
    }
}