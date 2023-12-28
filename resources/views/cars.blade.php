<!-- File: resources/views/cars.blade.php -->

@extends('layouts.app')

@section('content')
    <div>
        <h2>Manajemen Mobil</h2>

        <!-- Formulir Tambah Mobil -->
        <form method="POST" action="{{ route('cars.store') }}">
            @csrf

            <label for="brand">Merek:</label>
            <input type="text" name="brand" required>

            <label for="model">Model:</label>
            <input type="text" name="model" required>

            <label for="license_plate">Nomor Plat:</label>
            <input type="text" name="license_plate" required>

            <label for="rental_rate">Tarif Sewa per Hari:</label>
            <input type="number" name="rental_rate" required>

            <button type="submit">Tambah Mobil</button>
        </form>

        <!-- Daftar Mobil -->
        <h3>Daftar Mobil</h3>
        <ul>
            @foreach($cars as $car)
                <li>{{ $car->brand }} - {{ $car->model }} ({{ $car->license_plate }}) - Tarif: {{ $car->rental_rate }}/hari</li>
            @endforeach
        </ul>
    </div>
@endsection
