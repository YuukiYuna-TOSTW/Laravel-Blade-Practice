<?php


use Illuminate\Support\Facades\Route;

Route::get('/livewiredemo', function () {
    return view('livewire'); // resources/views/livewire.blade.php
});


Route::get('/bladeechostatement', function () {
    $name = 'YuukiYuna';
    $isActive = true;
    return view('bladeechostatement', compact('name', 'isActive'));
});


Route::get('/encoding', function () {
    $html = '<h1>Hai YuukiYuna 💕</h1><script>alert("Halo!")</script>';
    return view('encoding', compact('html'));
});


Route::get('/alpine', function () {
    $name = 'YuukiYuna 🌸';
    return view('bladeandjavascriptframeforks', compact('name'));
});



Route::get('/json', function () {
    $json = [
        'name' => 'YuukiYuna 🌷',
        'age' => 18,
        'skills' => ['Laravel', 'Blade', 'Alpine.js']
    ];

    return view('jsonexample', compact('json'));
});


Route::get('/verbatim', function () {
    $verbatim = [
        'name' => 'YuukiYuna 🌸',
        'age' => 18,
        'skills' => ['Laravel', 'Blade', 'Alpine.js']
    ];

    return view('verbatimexample', compact('verbatim'));
});


Route::get('/conditional', function () {
    $conditional = [
        'name' => 'YuukiYuna',
        'age' => 18,
        'role' => 'admin'
    ];

    $records = [
        ['id' => 1, 'title' => 'Record 1'],
        ['id' => 2, 'title' => 'Record 2']
    ];

    return view('conditionaldirectives', compact('conditional', 'records'));
});


Route::get('/authentication', function () {
    $authentication = [
        'name' => 'YuukiYuna',
        'role' => 'admin'
    ];

    return view('authenticationdirectives', compact('authentication'));
});
