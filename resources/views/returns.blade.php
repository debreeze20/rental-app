<!-- File: resources/views/returns.blade.php -->

@extends('layouts.app')

@section('content')
    <h2>Pengembalian Mobil</h2>

    <!-- Tabel untuk menampilkan daftar pengembalian -->

    <h3>Kembalikan Mobil</h3>

    <form method="POST" action="{{ route('returns.store') }}">
        @csrf

        <!-- Pilihan mobil yang sedang disewa -->
        <!-- Formulir untuk tanggal pengembalian -->

        <button type="submit">Kembalikan Mobil</button>
    </form>
@endsection