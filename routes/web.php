<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UserController as User;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/user', [User::class, 'index'])->name('user');
Route::get('/create-user', [User::class, 'create'])->name('create.user');
Route::post('/store-user', [User::class, 'store'])->name('store.user');
Route::get('/edit-user/{id}', [User::class, 'edit'])->name('edit.user');
Route::post('/update-user/{id}', [User::class, 'update'])->name('update.user');
Route::get('/delete-user/{id}', [User::class, 'delete'])->name('delete.user');
