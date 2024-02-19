<?php

use App\Http\Controllers\OrdersControler;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/orders', [OrdersControler::class, 'index']);
Route::get('/orders/create', [OrdersControler::class, 'create']);
Route::post('/orders', [OrdersControler::class, 'store']);
Route::get('/orders/{id}', [OrdersControler::class, 'show']);

Route::get('/', function () {
    return redirect('/orders');
});