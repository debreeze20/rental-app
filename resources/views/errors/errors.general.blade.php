<!-- resources/views/errors/general.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Kesalahan Umum') }}</div>

                    <div class="card-body">
                        <p>Terjadi kesalahan yang tidak dapat diproses.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
