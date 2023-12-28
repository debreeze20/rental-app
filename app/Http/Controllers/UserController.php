<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function showRegistrationForm()
    {
        return view('register');
    }

    public function register(Request $request)
    {
        // Validasi input
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
            'license_number' => 'required|string|max:20',
        ]);

        // Simpan pengguna ke dalam database
        $user = User::create($validatedData);

        // Redirect atau lakukan tindakan lain
        return redirect('/')->with('success', 'Registrasi berhasil!');
    }
}
