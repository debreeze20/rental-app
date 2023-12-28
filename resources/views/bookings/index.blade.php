<!DOCTYPE html>
<html>
<head>
    <title>Daftar Peminjaman</title>
</head>
<body>

<h2>Daftar Peminjaman</h2>

<a href="{{ url('/bookings/create') }}">Tambah Peminjaman</a>

<ul>
    @foreach ($bookings as $booking)
        <li>{{ $booking->car->brand }} - {{ $booking->car->model }} ({{ $booking->start_date }} - {{ $booking->end_date }})</li>
    @endforeach
</ul>

</body>
</html>
