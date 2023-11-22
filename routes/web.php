<?php

use App\Models\Flower;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\FlowerController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardFlowerController;

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

// Home
Route::get('/', function () {
    return view('home', [
        "title" => "Home",
        "active" => 'home',
        "flowers" => Flower::paginate(3)
    ]);
});

// Product
Route::get('/product', function () {
    return view('product', [
        "title" => "Product",
        "active" => 'product',
        "flowers" => Flower::latest()->get()
    ]);
});

// Route::get('/product', [FlowerController::class,'index']);

// Order
Route::get('/order', function () {
    return view('order', [
        "title" => "Order",
        "active" => 'order'
    ]);
});

// Register
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

// Login
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

// Dashboard
Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware('auth');

Route::resource('/dashboard/flowers', DashboardFlowerController::class)->middleware('auth');