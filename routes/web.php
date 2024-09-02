<?php

use App\Http\Controllers\PermissionController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Permissions Route

Route::get('/permission/index',[PermissionController::class,'index'])->name('permissions.index');

Route::get('/permission/create',[PermissionController::class,'create'])->name('permissions.create');

Route::post('/permission/store',[PermissionController::class,'store'])->name('permissions.store');

Route::get('/permission/show/{id}',[PermissionController::class,'show'])->name('permissions.show');

Route::get('/permission/edit/{id}',[PermissionController::class,'edit'])->name('permissions.edit');

Route::put('/permission/update/{id}',[PermissionController::class,'update'])->name('permissions.update');

Route::delete('/permission/destroy/{id}',[PermissionController::class,'destroy'])->name('permissions.destroy');

// Role Route

Route::get('/role/index',[RoleController::class,'index'])->name('roles.index');

Route::get('/role/create',[RoleController::class,'create'])->name('roles.create');

Route::post('/role/store',[RoleController::class,'store'])->name('roles.store');

Route::get('/role/show/{id}',[RoleController::class,'show'])->name('roles.show');

Route::get('/role/edit/{id}',[RoleController::class,'edit'])->name('roles.edit');

Route::put('/role/update/{role}',[RoleController::class,'update'])->name('roles.update');

Route::delete('/role/destroy/{id}',[RoleController::class,'destroy'])->name('roles.destroy');

// User Route

Route::get('/user/index',[UserController::class,'index'])->name('users.index');

Route::get('/user/create',[UserController::class,'create'])->name('users.create');

Route::get('/user/display',[UserController::class,'display'])->name('users.display');

Route::post('/user/display',[UserController::class,'display_store'])->name('users.display_store');

Route::post('/user/store',[UserController::class,'store'])->name('users.store');

Route::get('/user/show/{id}',[UserController::class,'show'])->name('users.show');

Route::get('/user/edit/{id}',[UserController::class,'edit'])->name('users.edit');

Route::put('/user/update/{id}',[UserController::class,'update'])->name('users.update');

Route::delete('/user/destroy/{id}',[UserController::class,'destroy'])->name('users.destroy');
