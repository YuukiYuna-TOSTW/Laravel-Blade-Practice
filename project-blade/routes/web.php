<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    $name = 'YuukiYuna';
    $isActive = true;
    return view('home', compact('name', 'isActive'));
});


