<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\customerController;
use App\Http\Controllers\loginController;
use Illuminate\Foundation\Configuration\Middleware;

Route::get('/', function () {
    return view('home');
});
Route::view('/about','nav-views.about');
Route::view('/records','nav-views.records');

Route::middleware('checklogin')->group(function () {
    Route::get('add',[customerController::class,'create'])->name('add');
    Route::post('store',[customerController::class,'store'])
        ->name('form.store');
    Route::get('show',[customerController::class,'show'])->name('show');

    Route::get('edit/{id}',[customerController::class,'edit'])->name('edit');
    Route::post('update/{id}',[customerController::class,'update'])->name('update');
    Route::post('delete/{id}',
        [customerController::class,'delete']
    )->name('customer.delete');
});


Route::get('login',[loginController::class,'show_login'])->name('login.page');

Route::post('logedin',[loginController::class,'login'])->name('login.submit');

Route::get('logout', function () {
    session()->forget('user');
    return redirect()->route('login.page');
})->name('logout');