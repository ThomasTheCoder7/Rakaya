<?php

use App\Models\User;
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

// Routes Naming https://laravel.com/docs/5.1/controllers 


Route::get('/', function () {
    return view('etqan');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home', 'login', 'register');

Route::get('/profile', function () {
    $user = Auth::user();
    return view('userProfile', compact('user'));
})->middleware('auth');

Route::delete('/profile/delete', [App\Http\Controllers\HomeController::class, 'destroy'])->name('profile.destroy');

Route::post('/save', [App\Http\Controllers\HomeController::class, 'save'])->name('save');