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


