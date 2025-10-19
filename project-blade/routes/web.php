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
