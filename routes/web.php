<?php

use Illuminate\Support\Facades\Route;

    Route::resource('vehiculos', 'VehiculoController');

    Route::get('/', function () {
        return view('home');
    });

    
