<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class CarController extends Controller
{
    public function index()
    {
        $cars = Car::all();
        return view('cars.index', compact('cars'));
    }

    public function create()
    {
        return view('cars.create');
    }

    public function store(Request $request)
    {
        // Validasi input
        $validatedData = $request->validate([
            'brand' => 'required|string|max:255',
            'model' => 'required|string|max:255',
            'plate_number' => 'required|string|max:15|unique:cars',
            'rental_rate' => 'required|numeric',
        ]);

        // Simpan mobil ke dalam database
        $car = Car::create($validatedData);

        // Redirect atau lakukan tindakan lain
        return redirect('/cars')->with('success', 'Mobil berhasil ditambahkan!');
    }
}
