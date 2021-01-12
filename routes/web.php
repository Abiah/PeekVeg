<?php


use App\Models\Product;
use TCG\Voyager\Facades\Voyager;
use App\Http\Controllers\FarmerTask;
use App\Http\Livewire\ProductDetails;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovementController;

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

Route::get('/product_details/{id}',function(Product $id){
    return view('livewire.farmer-prodcut-details',["id"=>$id]);
})->name('farmer_check')->middleware('auth','farmerrole');


Route::get('/dashboard',[MovementController::class,'index'])->middleware(['auth:sanctum', 'verified'])->name('dashboard');
Route::get('/peekfarm',[MovementController::class,'newFarm'])->middleware(['auth','farmerrole'])->name('newfarm');

Route::get('/peekproduct',[MovementController::class,'newproduct'])->middleware(['auth','farmerrole'])->name('newproduct');

Route::get('/orders/{id}',[MovementController::class,'showorder'])->name('orderdet');

Route::post('/newfarm',[FarmerTask::class,'add_farm'])->middleware(['auth','farmerrole'])->name('post_add_farm');
Route::post('/peekproduct',[FarmerTask::class,'add_product'])->middleware(['auth','farmerrole'])->name('add_product');



Route::middleware(['farmerrole','auth'])->get('/users/dashboard', function () {
    return view('farmers.dashboard');
})->name('farmersdashboard');




Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
