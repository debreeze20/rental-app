<!DOCTYPE html>
<html>
<head>
    <title>Daftar Pengembalian</title>
</head>
<body>

<h2>Daftar Pengembalian</h2>

<a href="{{ url('/returns/create') }}">Tambah Pengembalian</a>

<ul>
    @foreach ($returns as $return)
        <li>{{ $return->booking->car->brand }} - {{ $return->booking->car->model }} ({{ $return->return_date }})</li>
    @endforeach
</ul>

</body>
</html>
