<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CentralController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FilterController;





Route::get('/',[CentralController::class,'index'])->name('central.index');
Route::prefix('/Authentication')->group(function () {
    Route::get('/',[LoginController::class,'index'])->name('register.index');
    Route::post('/',[LoginController::class,'store'])->name('register.store');
    Route::get('/login',[LoginController::class,'login'])->name('register.login');
    Route::post('/login',[LoginController::class,'loginUser'])->name('register.authenticate');
});
Route::prefix('users')->group(function () {
 Route::get('/',[UserController::class,'listUsers'])->name('users.index');
 Route::get('/create',[UserController::class,'create'])->name('users.create');
 Route::delete('user/{id}',[UserController::class,'destroy'])->name('users.destroy');
 Route::get('/trashedUsers',[UserController::class,'trashedUsers'])->name('users.trashedUsers');
 Route::delete('userTrashed/{id}',[UserController::class,'clearAll'])->name('users.clearAll');
 Route::get('restore/{id}',[UserController::class,'restore'])->name('users.restore');
 Route::get('edit/{id}', [UserController::class, 'edit'])->name('users.edit');
});
Route::prefix('products')->group(function () {
Route::get('/',[ProductController::class,'index'])->name('products.index');
Route::get('/drink',[ProductController::class,'showDrinks'])->name('products.drink');
Route::get('view',[ProductController::class,'viewProducts'])->name('products.view');
Route::get('/create',[ProductController::class,'create'])->name('products.create');
Route::post('/store',[ProductController::class,'store'])->name('products.store');
});
Route::prefix('dashboard')->group(function () {
    Route::prefix('filter')->group(function () {
          Route::get('filterFoods',[FilterController::class,'filterFoods'])->name('filter.foods');
          Route::get('filterDrinks',[FilterController::class,'filterDrinks'])->name('filter.drinks');
          Route::get('filterCanned',[FilterController::class,'filterCanned'])->name('filter.canned');
          Route::get('filterDetergents',[FilterController::class,'filterDetergent'])->name('filter.detergents');
    });
});
