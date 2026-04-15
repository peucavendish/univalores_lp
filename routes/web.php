<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/indica', function () {
    return view('indica');
});

Route::get('/indica/cadastro', function () {
    return view('indicado');
});

Route::get('/indicado', function () {
    return redirect('/indica/cadastro');
});
