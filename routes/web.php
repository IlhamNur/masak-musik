<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FestController;

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
    return view('index', [
        'title' => 'index'
    ]);
});

Route::get('/contact', function () {
    return view('contact', [
        'title' => 'contact'
    ]);
});

Route::get('/courses', function () {
    return view('courses', [
        'title' => 'courses'
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'title' => 'about'
    ]);
});

Route::get('/register-fest', function () {
    return view('register-fest', [
        'title' => 'register-fest'
    ]);
});

Route::get('/dashboard', function () {
    return view('admin.index', [
        'title' => 'dashboard'
    ]);
});

Route::post('/register-fest', [FestController::class, 'store']);

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
