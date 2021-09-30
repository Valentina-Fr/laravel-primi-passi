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
    $data = [
        "name"  => "World"
    ];
    return view('home', $data);
});


Route::get('/pag_1', function () {
    return view('/pag_1');
})->name('pag_1');

Route::get('/pag_2', function () {
    return view('/pag_2');
})->name('pag_2');

Route::get('/pag_3', function () {
    return view('/pag_3');
})->name('pag_3');


