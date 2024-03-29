<?php

use App\Http\Controllers\CarsController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\TranslatorController;
use App\Http\Controllers\PostsController;


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

/*
Connect to mysql databases
sudo mysql -u root
*/

// Main page
Route::get('/', function () {
    return view('welcome');
}) -> name('welcome');


// ProductsController.php
Route::get('/products', [ProductsController::class, 'index']) -> name('products');
Route::get('/products/vegetables', [ProductsController::class, 'vegetables']);
Route::get('products/pattern/{letters}/{numbers}',
    [ProductsController::class, 'pattern']) -> where([
        'letters' => '[a-zA-Z]+',
        'numbers' => '(-[0-9]+)|([0-9]+)'
    ]); // http://domingo.bingo/products/pattern/enyWord/22


// TranslatorController.php
// Below line of code works like, type in url domingo.bingo/translator and then you are redirect to index() function in TranslatorController.php
Route::get('/translator', [TranslatorController::class, 'index']);
Route::get('/translator/{languages}', [TranslatorController::class, 'translate']);


// PageController.php
Route::get('/page', [PageController::class, 'index']) -> name('page');
Route::get('/about', [PageController::class, 'index']) -> name('about');
Route::get('/contact', [PageController::class, 'index']) -> name('contact');
Route::get('/portfolio', [PageController::class, 'index']) -> name('portfolio');



// It gives every route in app
Route::get('routes', function () {
    $routeCollection = Route::getRoutes();

    echo "<table style='width:100%; margin: 400px auto;'>";
    echo "<tr>";
    echo "<td ><h4>HTTP Method</h4></td>";
    echo "<td ><h4>Route</h4></td>";
    echo "<td ><h4>Name</h4></td>";
    echo "<td ><h4>Corresponding Action</h4></td>";
    echo "</tr>";
    foreach ($routeCollection as $value) {
        echo "<tr>";
        echo "<td>" . $value->methods()[0] . "</td>";
        echo "<td>" . $value->uri() . "</td>";
        echo "<td>" . $value->getName() . "</td>";
        echo "<td>" . $value->getActionName() . "</td>";
        echo "</tr>";
    }
    echo "</table>";
});

// PostsController.php
Route::get('/posts', [PostsController::class, 'index']);

// CarsController.php
Route::get('/cars', [CarsController::class, 'index']);

Route::get('/cars/create', [CarsController::class, 'create']);
Route::post('/cars/store', [CarsController::class, 'store']);
Route::get('/cars/{id}/edit', [CarsController::class, 'edit']);
Route::post('/cars/{id}', [CarsController::class, 'update']);
Route::get('/cars/{id}/destroy', [CarsController::class, 'destroy']);


// Note: php artisan route:list
