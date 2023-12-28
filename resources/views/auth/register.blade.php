?php<!-- File: resources/views/auth/register.blade.php -->


@extends('layouts.app')

@section('content')
    <div>
        <h2>Registrasi Pengguna</h2>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <label for="name">Nama:</label>
            <input type="text" name="name" required>

            <label for="email">Email:</label>
            <input type="email" name="email" required>

            <label for="password">Password:</label>
            <input type="password" name="password" required>

            <label for="password_confirmation">Konfirmasi Password:</label>
            <input type="password" name="password_confirmation" required>

            <button type="submit">Registrasi</button>
        </form>
    </div>
@endsection
