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

//route group
Route::middleware(['first', 'second'])->group(function () {
 Route::get('/', function () {
 // Uses first & second middleware...
 });
Route::get('/user/profile', function () {
 // Uses first & second middleware...
 });
});
Route::domain('{account}.example.com')->group(function () {
 Route::get('user/{id}', function ($account, $id) {
 //
 });
});
Route::middleware('auth')->group(function () {
Route::get('/user', [UserController::class, 'index']);
Route::get('/post', [PostController::class, 'index']);
Route::get('/event', [EventController::class, 'index']);
});
