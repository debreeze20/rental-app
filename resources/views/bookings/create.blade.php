<!DOCTYPE html>
<html>
<head>
    <title>Tambah Peminjaman Mobil</title>
</head>
<body>

<h2>Tambah Peminjaman Mobil</h2>

<form method="POST" action="{{ url('/bookings') }}">
    @csrf

    <label for="car_id">Pilih Mobil:</label>
    <select name="car_id" required>
        @foreach ($cars as $car)
            <option value="{{ $car->id }}">{{ $car->brand }} - {{ $car->model }} ({{ $car->plate_number }})</option>
        @endforeach
    </select>

    <label for="start_date">Tanggal Mulai:</label>
    <input type="date" name="start_date" required>

    <label for="end_date">Tanggal Selesai:</label>
    <input type="date" name="end_date" required>

    <button type="submit">Tambah Peminjaman</button>
</form>

</body>
</html>
