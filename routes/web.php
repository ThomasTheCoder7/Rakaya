<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('etqan');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home', 'login', 'register');

Route::get('/profile', function () {
    return view('userProfile');
})->middleware('auth');

Route::delete('/profile/delete', [App\Http\Controllers\HomeController::class,'delete'])->name('profile.delete');

Route::post('/save', [App\Http\Controllers\HomeController::class, 'save']);