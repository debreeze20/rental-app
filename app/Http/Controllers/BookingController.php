<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Booking;

class BookingController extends Controller
{
    public function index()
    {
        $bookings = Booking::all();
        return view('bookings.index', compact('bookings'));
    }

    public function create()
    {
        $cars = Car::all();
        return view('bookings.create', compact('cars'));
    }

    public function store(Request $request)
    {
        // Validasi input
        $validatedData = $request->validate([
            'car_id' => 'required|exists:cars,id',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after:start_date',
        ]);

        // Simpan peminjaman ke dalam database
        $booking = Booking::create($validatedData);

        // Redirect atau lakukan tindakan lain
        return redirect('/bookings')->with('success', 'Peminjaman berhasil dibuat!');
    }
}
