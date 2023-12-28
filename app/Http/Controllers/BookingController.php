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
        // Cek ketersediaan mobil
        $car = Car::where('id', $request->car_id)
            ->whereDoesntHave('bookings', function ($query) use ($request) {
                $query->where('start_date', '<=', $request->return_date)
                    ->where('end_date', '>=', $request->start_date);
            })
            ->first();

        if (!$car) {
            return redirect('/bookings')->with('error', 'Mobil tidak tersedia pada tanggal tersebut.');
        }
        
        // Validasi input
        try {
            // Logika peminjaman dan penyimpanan data
            // ...
            $validatedData = $request->validate([
                'car_id' => 'required|exists:cars,id',
                'start_date' => 'required|date',
                'end_date' => 'required|date|after:start_date',
            ]);
    
            // Simpan peminjaman ke dalam database
            $booking = Booking::create($validatedData);
    
            return redirect('/bookings')->with('success', 'Peminjaman berhasil.');
        } catch (\Exception $e) {
            return redirect('/bookings')->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }
}
