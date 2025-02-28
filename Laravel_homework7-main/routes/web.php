<?php

use App\Http\Controllers\MyUserController;
use App\Http\Controllers\PdfGeneratorController;
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
    return view('welcome');
});

Route::get('/user', [MyUserController::class, 'index']);

Route::get('/user/{id}', [MyUserController::class, 'get']);

Route::get('/add-user', function () {
    return view('form');
});

Route::post('/store-user', [MyUserController::class, 'store'])->name('storeUser');

Route::get('/resume/{id}', [PdfGeneratorController::class, 'index']);
