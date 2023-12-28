<!DOCTYPE html>
<html>
<head>
    <title>Tambah Pengembalian Mobil</title>
</head>
<body>

<h2>Tambah Pengembalian Mobil</h2>

<form method="POST" action="{{ url('/returns') }}">
    @csrf

    <label for="booking_id">Pilih Peminjaman:</label>
    <select name="booking_id" required>
        @foreach ($bookings as $booking)
            <option value="{{ $booking->id }}">{{ $booking->car->brand }} - {{ $booking->car->model }} ({{ $booking->start_date }} - {{ $booking->end_date }})</option>
        @endforeach
    </select>

    <label for="return_date">Tanggal Pengembalian:</label>
    <input type="date" name="return_date" required>

    <button type="submit">Tambah Pengembalian</button>
</form>

</body>
</html>
