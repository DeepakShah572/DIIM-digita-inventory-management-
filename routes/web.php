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

Auth::routes(['verify'=>true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('create_barcodes',[App\Http\Controllers\create_barcodesController::class,'create_barcodes'])->name('create_barcodes');
Route::get('recent_inventory',[App\Http\Controllers\recent_inventoryController::class,'recent_inventory'])->name('recent_inventory');
Route::get('scan_barcodes',[App\Http\Controllers\scanController::class,'index'])->name('index');

Route::post('create_barcodes',[App\Http\Controllers\create_barcodesController::class,'generate_barcodes'])->name('generate_barcodes');

Route::get('barcodes_generated',[App\Http\Controllers\barcodes_generated::class,'index'])->name('index');
Route::get("/barcodes_generated/pdf","App\Http\Controllers\barcodes_generated@download_pdf");
Route::post("barcode_scanner",[App\Http\Controllers\barcode_scannerController::class,'index'])->name("index");
Route::view('barcode_scanner', 'barcode_scanner');
Route::post("search",[App\Http\Controllers\searchController::class,'index'])->name("index");
Route::view('search', 'search');