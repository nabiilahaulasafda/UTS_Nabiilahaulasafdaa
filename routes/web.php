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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/login', function () {
    return view('login');
});

Route::get('/beranda', function () {
    return view('beranda');
});

Route::get('/pengajuan', function () {
    return view('pengajuan');
});

Route::get('/jadwal', function () {
    return view('jadwal');
});

Route::get('/sertifikat', function () {
    return view('sertifikat');
});

Route::get('/profil', function () {
    return view('profil');
});

Route::get('/master', function () {
    return view('master');
});


?>
