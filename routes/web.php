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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
