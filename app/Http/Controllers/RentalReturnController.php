<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\RentalReturn;

class RentalReturnController extends Controller
{
    public function index()
    {
        $returns = RentalReturn::all();
        return view('returns.index', compact('returns'));
    }

    public function create()
    {
        $bookings = Booking::where('returned_at', null)->get();
        return view('returns.create', compact('bookings'));
    }

    public function store(Request $request)
    {
        // Validasi input
        $validatedData = $request->validate([
            'booking_id' => 'required|exists:bookings,id',
            'return_date' => 'required|date',
        ]);

        // Simpan pengembalian ke dalam database
        $return = RentalReturn::create($validatedData);

        // Update tanggal pengembalian pada peminjaman terkait
        Booking::find($request->booking_id)->update(['returned_at' => now()]);

        // Redirect atau lakukan tindakan lain
        return redirect('/returns')->with('success', 'Pengembalian mobil berhasil!');
    }
}