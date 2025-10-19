@extends('layouts.app')

@section('title', 'Halaman Home')

@section('content')
    <h1>Selamat Datang, {{ $name }}!</h1>
    <!-- {{ $name }} merupakan Blade Echo Statement -->

    @if ($isActive)
        <p>Kamu sedang aktif 💪</p>
    @else
        <p>Kamu sedang offline 😴</p>
    @endif
@endsection
