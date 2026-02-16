<?php

use Illuminate\Support\Facades\Route;

//route basic
Route::get('/hello', function () {
 return 'Hello World';
});
Route::get('/world', function () {
 return 'World';
});
Route::get('/about', function () {
 return 'NIM 244107020072, Nama Dina Kumala Sari';
});
Route::get('/', function () {
    return 'Selamat Datang';
});

//route berparameter
/*Route::get('/user/{name}', function ($name) {
return 'Nama saya '.$name;
});*/
//dua parameter
Route::get('/posts/{post}/comments/{comment}', function
($postId, $commentId) {
return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
});
Route::get('/article/{id}', function($id) {
return 'Halaman Artikel dengan ID '. $id;
});
//opsional parameter
Route::get('/user/{name?}', function ($name='John') {
return 'Nama saya '.$name;
});

//route nama
Route::get('/user/profile', function () {
 //
})->name('profile');
Route::get(
 '/user/profile',
 [UserProfileController::class, 'show']
)->name('profile');
// Generating URLs...
$url = route('profile');
// Generating Redirects...
return redirect()->route('profile');