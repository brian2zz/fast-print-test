<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\produkController;

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

Route::get('/', function(){
    return redirect('/produk');
});

Route::get('/produk', [produkController::class,'index']);
Route::post('/produk', [produkController::class,'store']);
Route::post('/produk-api', [produkController::class,'store_form_api']);
Route::put('/produk/{id}', [produkController::class,'update']);
Route::delete('/produk/{id}', [produkController::class,'destroy']);

Route::get('/kategori', function () {
    return view('pages.kategori.index');
});
