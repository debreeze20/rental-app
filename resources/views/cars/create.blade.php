<!DOCTYPE html>
<html>
<head>
    <title>Tambah Mobil Baru</title>
</head>
<body>

<h2>Tambah Mobil Baru</h2>

<form method="POST" action="{{ url('/cars') }}">
    @csrf

    <label for="brand">Merek:</label>
    <input type="text" name="brand" required>

    <label for="model">Model:</label>
    <input type="text" name="model" required>

    <label for="plate_number">Nomor Plat:</label>
    <input type="text" name="plate_number" required>

    <label for="rental_rate">Tarif Sewa per Hari:</label>
    <input type="number" name="rental_rate" required>

    <button type="submit">Tambah Mobil</button>
</form>

</body>
</html>
