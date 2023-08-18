<?php

use App\Http\Controllers\InStockController;
use App\Http\Controllers\OutStockController;
use App\Http\Controllers\ProductController;
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

Route::apiResource('products', ProductController::class)->except(['store', 'show']);

Route::apiResources([
    'in-stocks' => InStockController::class,
    'out-stocks' => OutStockController::class,
], ['only' => ['show'], 'parameters' => ['in-stocks' => 'stock', 'out-stocks' => 'stock']]);
