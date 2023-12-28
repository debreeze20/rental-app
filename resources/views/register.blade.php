<!DOCTYPE html>
<html>
<head>
    <title>Registrasi Pengguna</title>
</head>
<body>

<h2>Registrasi Pengguna</h2>

<form method="POST" action="{{ url('/register') }}">
    @csrf

    <label for="name">Nama:</label>
    <input type="text" name="name" required>

    <label for="address">Alamat:</label>
    <input type="text" name="address" required>

    <label for="phone">Nomor Telepon:</label>
    <input type="text" name="phone" required>

    <label for="license_number">Nomor SIM:</label>
    <input type="text" name="license_number" required>

    <button type="submit">Daftar</button>
</form>

</body>
</html>
