<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IdController;

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
Route::get('/demo',[IdController::class,'index'])->name('index');

Route::get('/',[IdController::class,'index'])->name('index');
Route::get('/create',[IdController::class,'create'])->name('create');
Route::post('/store',[IdController::class,'store'])->name('store');
Route::get('/show/{id}',[IdController::class,'show'])->name('show');
Route::get('/edit/{id}',[IdController::class,'edit'])->name('edit');
Route::post('/update',[IdController::class,'update'])->name('update');
Route::get('/delete/{id}',[IdController::class,'destroy'])->name('delete');

