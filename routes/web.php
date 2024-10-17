<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;


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
//test comit
Route::get('/', function () {
    return view('welcome');
})->name('home'); 

Route::get('/about', function () {   
    return view('about');
});

/**
 * я не понимаю почему 
 * это гитхаб не работает так, как я хочу
 */
