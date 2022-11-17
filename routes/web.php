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
    return view('welcome');
});

// DATABASE ANIME
Route::get('/get-data-anime', function () {
    $data_anime = DB::table("anime_data")->get();
      
    dd($data_anime);
});

// DATABASE USERS
Route::get('/get-data-user', function () {
    $data_user = DB::connection('mysql2')->table("user_data")->get();
      
    dd($data_user);
});
