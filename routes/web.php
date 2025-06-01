<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CentralController;
use App\Http\Controllers\UserController;




Route::get('/',[CentralController::class,'index'])->name('central.index');
Route::prefix('/Authentication')->group(function () {
    Route::get('/',[LoginController::class,'index'])->name('register.index');
    Route::post('/',[LoginController::class,'store'])->name('register.store');
    Route::get('/login',[LoginController::class,'login'])->name('register.login');
    Route::post('/login',[LoginController::class,'loginUser'])->name('register.authenticate');
});
Route::prefix('users')->group(function () {
 Route::get('/',[UserController::class,'listUsers'])->name('users.index');
 Route::delete('user/{id}',[UserController::class,'destroy'])->name('users.destroy');
 Route::get('/trashedUsers',[UserController::class,'trashedUsers'])->name('users.trashedUsers');
 Route::delete('userTrashed/{id}',[UserController::class,'clearAll'])->name('users.clearAll');
});
