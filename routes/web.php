<?php

use App\Http\Controllers\CartController;
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

Route::get('/', [CartController::class, 'Index']);

Route::get('/card', function () {
    return view('list-info');
});

Route::get('/add-cart/{id}', [CartController::class, 'addCart']);
Route::get('/delete-item-cart/{id}', [CartController::class, 'deleteItemCart']);