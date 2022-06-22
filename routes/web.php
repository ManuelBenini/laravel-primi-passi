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

    return view('index');
})->name('index');

Route::get('/home', function () {

    $data = [
        'user' => 'John Snow',
        'azioni' => ['Mangiare', 'Bere', 'Urlare', 'Giocare'],
    ];
    return view('home', $data);
})->name('home');

Route::get('/about', function () {

    return view('about');
})->name('about');

Route::get('/socials', function () {

    return view('socials');
})->name('socials');
