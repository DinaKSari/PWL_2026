<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'Selamat Datang';
});
Route::get('/hello', function () {
 return 'Hello World';
});
Route::get('/world', function () {
 return 'World';
});
Route::get('/about', function () {
 return 'NIM 244107020072, Nama Dina Kumala Sari';
});