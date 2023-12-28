@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Keluar Aplikasi</h2>
        <p>Anda telah berhasil keluar dari aplikasi.</p>
        <p><a href="{{ route('login') }}">Login kembali</a></p>
    </div>
@endsection
