<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Shopcontroller;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;


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

Route::get('/',[HomeController::class,'index']);
// Route::get('/',function(){
//     return \App\Models\Product::find(1)->brand;
// });
Route::get('/shop/product/{id}',[Shopcontroller::Class,'show']);
//Route::get('/login',[LoginController::class,'login']);


Route::get('/shop',[Shopcontroller::class,'shop']);

Route::get('/login',[LoginController::class,'showLogin'])->name('layout.showlogin');
Route::post('/login',[LoginController::class,'login'])->name('front.layout.login');

Route::get('/register',[RegisterController::class,'showRegister'])->name('layout.showlegister');
Route::post('/register',[RegisterController::class,'register'])->name('front.layout.register');