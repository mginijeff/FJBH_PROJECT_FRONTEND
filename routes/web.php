<?php

use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/aboutus', 'App\Http\Controllers\UserController@index');
// Route::get('/aboutus', 'AboutController@index')->name('aboutus');
 //homepage route 
 
Route::get('/homepage', function () {
    return view('homepage');
});
Route::get('/mission', function () {
    return view('mission');
});
Route::get('/vision', function () {
    return view('vision');
});
Route::get('/outsourcing', function () {
    return view('outsourcing');
});
Route::get('/recruitment', function () {
    return view('recruitment');
});
Route::get('/training', function () {
    return view('training');
});
Route::get('/management', function () {
    return view('management');
});
Route::get('/contact', function () {
    return view('contact');
});
 Route::get('/aboutus', function () {
    return view('aboutus');
 });
 Route::get('/login', function () {
    return view('login');
 });
 Route::get('/register', function () {
    return view('register');
 });