<!DOCTYPE html>
<html>
<head>
    <title>Daftar Mobil</title>
</head>
<body>

<h2>Daftar Mobil</h2>

<a href="{{ url('/cars/create') }}">Tambah Mobil</a>

<ul>
@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Daftar Mobil</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Merek</th>
                    <th>Model</th>
                    <th>Nomor Plat</th>
                    <th>Tarif Sewa per Hari</th>
                    <!-- Tambahkan kolom lain sesuai kebutuhan -->
                </tr>
            </thead>
            <tbody>
                @foreach ($cars as $car)
                    <tr>
                        <td>{{ $car->brand }}</td>
                        <td>{{ $car->model }}</td>
                        <td>{{ $car->plate_number }}</td>
                        <td>{{ $car->rental_rate }}</td>
                        <!-- Tambahkan kolom lain sesuai kebutuhan -->
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

</ul>

</body>
</html>
