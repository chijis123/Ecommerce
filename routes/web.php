<?php

use App\Http\Controllers\productcontroller;
use App\Http\Controllers\usercontroller;
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

Route::match(['get', 'post'], '/', function () {
    return view('login');
});
Route::get('/logout',[usercontroller::class,'logout']);
Route::view('/register','register');
Route::post('/login',[usercontroller::class,'login']);
Route::post('/register', [usercontroller::class, 'register'])->name('register');
Route::get('/product',[productcontroller::class,'index'])->name('product');
Route::get('/detail/{id}',[productcontroller::class,'details']);
Route::post('/add_to_cart',[productcontroller::class,'addtocart']);
Route::get('/cartlist',[productcontroller::class,'cartlist']);
Route::get('/removecart/{id}',[productcontroller::class,'removecart']);
Route::get('/ordernow',[productcontroller::class,'ordernow']);
Route::post('/orderplace',[productcontroller::class,'orderplace']);
Route::get('/myorders',[productcontroller::class,'myorders']);
Route::get('/search',[productcontroller::class,'search']);
