<?php

use App\Http\Controllers\HospitalProductController;
use App\Http\Controllers\InPatientController;
use App\Http\Controllers\InPatientMedicationController;
use App\Http\Controllers\InStockController;
use App\Http\Controllers\InventoryProductController;
use App\Http\Controllers\OutStockController;
use App\Http\Controllers\PackageInPatientController;
use App\Http\Controllers\PharmacyProductController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegularInPatientController;
use App\Http\Controllers\StockTransactionController;
use App\Http\Controllers\UtilityItemController;
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

Route::apiResource('products', ProductController::class)->only(['index', 'show', 'update']);
Route::apiResource('inventory-products', InventoryProductController::class);
Route::apiResource('pharmacy-products', PharmacyProductController::class)->only(['index', 'show']);
Route::apiResource('hospital-products', HospitalProductController::class)->only(['index', 'show']);
Route::apiResource('stock-transactions', StockTransactionController::class)->except(['update']);
Route::apiResource('utility-items', UtilityItemController::class)->only(['index', 'store']);

Route::apiResource('in-patient', InPatientController::class);
Route::apiResource('regular-in-patients', RegularInPatientController::class)->only(['index', 'store', 'update', 'show']);
Route::apiResource('package-in-patients', PackageInPatientController::class);
Route::apiResource('in-patient-medications', InPatientMedicationController::class)->only(['index', 'show']);

Route::apiResources([
    'in-stocks' => InStockController::class,
    'out-stocks' => OutStockController::class,
], ['only' => ['show'], 'parameters' => ['in-stocks' => 'stock', 'out-stocks' => 'stock']]);
