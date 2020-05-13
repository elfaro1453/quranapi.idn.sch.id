<?php

use App\Surah;
use App\Ayah;
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
    return view('welcome');
});

Route::get('surah', function () {
    return Surah::all();
});

Route::get('surah/{id}', function ($id) {
    $surah = Surah::where('number', $id)->firstOrFail();
    $surah->ayahs = Ayah::where('surahId', $id)->get();
    return $surah;
});