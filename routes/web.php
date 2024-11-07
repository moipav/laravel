<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\TestController;

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
//test commit
Route::get('/', [TestController::class, 'testCollection'])->name('home');

Route::get('/users', [TestController::class, 'users']);
Route::get('/about', function (Request $request) {
    return view('about');
});

Route::post('/test', [TestController::class, 'testValidate']);

