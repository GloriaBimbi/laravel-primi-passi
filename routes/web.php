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
    $user_name = 'Gloria';
    $user_surname = 'Bimbi';
    $hobbies = [
        'volleyball', 'clarinet', 'photography', 'cinema'
    ];
    return view('home', compact('user_name', 'user_surname', 'hobbies'));
});
