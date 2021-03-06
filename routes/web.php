<?php

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
    return view('welcome');
});

Route::get('tentang', function () {
    return view('tentang');
});

Route::get('percakapan', function () {
    return view('percakapan');
});

Route::post('percakapan/kirim', function () {
    return view('percakapan_kirim');
});

