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
    return view('front.app');
});

Route::get('/dashboard', function () {
    return view('back.admin.beranda.index');
});

Route::get('/pelanggan', function () {
    return view('back.admin.master.pelanggan.index');
});

Route::get('/pelanggan-edit', function () {
    return view('back.admin.master.pelanggan.edit');
});

Route::get('/hotel', function () {
    return view('back.admin.master.hotel.index');
});

Route::get('/wilayah', function () {
    return view('back.admin.master.wilayah.index');
});

Route::get('/back', function () {
    return view('back.app');
});
