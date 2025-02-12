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

Route::get('/', function () {
    return view('layout/main');
});

Route::get('login', function () {
    return view('login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

route::get('/user', function () {
    return view('user',);
});

route::get('/adduser', function () {
    return view('adduser',);
});

route::get('/lahan', function () {
    return view('lahan');
});

route::get('/addlahan', function () {
    return view('addlahan');
});


route::get('/manual', function () {
    return view('manual');
});

route::get('/admin', function () {
    return view('admin',);
});

route::get('/lokasi', function () {
    return view('lokasi',);
});

route::get('/editlahan', function () {
    return view('editlahan',);
});
