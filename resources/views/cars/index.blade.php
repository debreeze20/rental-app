<!DOCTYPE html>
<html>
<head>
    <title>Daftar Mobil</title>
</head>
<body>

<h2>Daftar Mobil</h2>

<a href="{{ url('/cars/create') }}">Tambah Mobil</a>

<ul>
    @foreach ($cars as $car)
        <li>{{ $car->brand }} - {{ $car->model }} ({{ $car->plate_number }})</li>
    @endforeach
</ul>

</body>
</html>
