<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\customerController;
use App\Http\Controllers\loginController;

Route::get('/', function () {
    return view('home');
});
Route::view('/about','nav-views.about');
Route::view('/records','nav-views.records');
Route::get('add',[customerController::class,'create'])->name('add');
Route::post('store',[customerController::class,'store'])
    ->name('form.store');
Route::get('show',[customerController::class,'show'])->name('show');

Route::get('edit/{id}',[customerController::class,'edit'])->name('edit');
Route::post('update/{id}',[customerController::class,'update'])->name('update');
Route::post('delete/{id}',
    [customerController::class,'delete']
)->name('customer.delete');


Route::get('login',[loginController::class,'login'])->name('login');

