<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\Cashier\CashierController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::middleware(['middleware'=>'PreventBackHistory'])->group(function(){
    Auth::routes();
});

Route::group(['prefix'=>'admin', 'middleware'=>['isAdmin','auth','PreventBackHistory']], function(){
    Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::view('/register','auth.register')->name('register');

    Route::get('/admin tab', [UserController::class,'index'])->name('user-tab');
    Route::post('/create account',[UserController::class,'create'])->name('user-create');
    Route::get('/update user account/{id}',[UserController::class,'edit'])->name('user-edit');
    Route::put('/update user account/{id}',[UserController::class,'update'])->name('user-update');
    Route::delete('/delete acocunt/{id}',[UserController::class,'destroy'])->name('user-destroy');
});

Route::group(['prefix'=>'cashier', 'middleware'=>['isCashier','auth','PreventBackHistory']], function(){
    Route::get('/dashboard', [CashierController::class, 'index'])->name('cashier.dashboard');
});
