<!-- File: resources/views/bookings.blade.php -->

@extends('layouts.app')

@section('content')
    <div>
        <h2>Peminjaman Mobil</h2>

        <!-- Formulir Peminjaman Mobil -->
        <form method="POST" action="{{ route('bookings.store') }}">
            @csrf

            <label for="start_date">Tanggal Mulai:</label>
            <input type="date" name="start_date" required>

            <label for="end_date">Tanggal Selesai:</label>
            <input type="date" name="end_date" required>

            <!-- Pilihan Mobil yang Tersedia -->
            <label for="car_id">Pilih Mobil:</label>
            <select name="car_id" required>
                @foreach($availableCars as $car)
                    <option value="{{ $car->id }}">{{ $car->brand }} - {{ $car->model }} ({{ $car->license_plate }})</option>
                @endforeach
            </select>

            <button type="submit">Pesan Mobil</button>
        </form>

        <!-- Daftar Peminjaman -->
        <h3>Daftar Peminjaman</h3>
        <ul>
            @foreach($bookings as $booking)
                <li>Mobil: {{ $booking->car->brand }} - {{ $booking->car->model }} ({{ $booking->car->license_plate }}) - Tanggal: {{ $booking->start_date }} sampai {{ $booking->end_date }}</li>
            @endforeach
        </ul>
    </div>
@endsection
