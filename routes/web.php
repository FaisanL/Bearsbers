<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/citas', function(){
    return view('citas');
});
Route::get('/nosotros', function(){
    return view('nosotros');
});
Route::get('/contacto', function(){
    return view('contacto');
});