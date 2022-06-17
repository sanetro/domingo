<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
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

// Main page 
Route::get('/', function () {
    return view('welcome');
});

// ProductsController.php 
Route::get('/products', [ProductsController::class, 'index']);
Route::get('/products/vegetables', [ProductsController::class, 'vegetables']);
