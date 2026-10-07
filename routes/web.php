<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::get('/pengajar-putra', function () {
    return view('pengajar-putra');
});
Route::get('/sejarah', function () {
    return view('sejarah');
});
Route::get('/profil-santri', function () {
    return view('profil-santri');
});
Route::get('/tadabbur-alam', function () {
    return view('tadabbur-alam');
});
Route::get('/tadarus', function () {
    return view('tadarus');
});
Route::get('/pendidikan-agama-islam', function () {
    return view('pendidikan-agama-islam');
});
Route::get('/foto-kegiatan-santri', function () {
    return view('foto-kegiatan-santri');
});
Route::get('/pembelajaran', function () {
    return view('pembelajaran');
});