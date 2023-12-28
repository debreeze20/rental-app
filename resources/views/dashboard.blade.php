<!-- File: resources/views/dashboard.blade.php -->

@extends('layouts.app')

@section('content')
    <h2>Selamat Datang, {{ Auth::user()->name }}!</h2>

    <!-- Informasi lainnya -->

    <a href="{{ route('logout') }}"
       onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();">
        Logout
    </a>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
@endsection
