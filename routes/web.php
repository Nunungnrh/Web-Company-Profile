<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\KontakController;
use App\Models\Product;

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
    return view('index', [
        'products' => Product::all()
    ]);
});

Route::get('/admin_login', function () {
    return view('user.index');
})->name('login');

Route::resource('/user', UserController::class);
Route::post('/login', [UserController::class, 'auth']);
Route::post('/logout', [UserController::class, 'logout']);

Route::resource('/dashboard/product', ProdukController::class)->middleware('auth');
Route::resource('/dashboard/contact', KontakController::class);

Route::get('/dashboard', function() {
    return view('dashboard.index');
})->middleware('auth');
