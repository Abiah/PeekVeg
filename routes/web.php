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

Route::get('/products',function(){
    return view('organisations.check-products');
})->name('show_peek_product')->middleware('auth');

Route::get('/checkout',function(){
    return view('organisations.checkout');
})->name('org.checking_out')->middleware('auth');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('organisations.dashboard');
})->name('dashboard');

Route::middleware(['farmerrole','auth'])->get('/users/dashboard', function () {
    return view('farmers.dashboard');
})->name('farmersdashboard');