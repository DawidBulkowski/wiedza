<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', [App\Http\Controllers\UserController::class, 'register'])->name('register');
Route::post('/', [App\Http\Controllers\UserController::class, 'doRegister'])->name('register.do');
Route::get('/form/fields/{type}', [App\Http\Controllers\UserController::class, 'fields'])->name('register.fields');


Route::prefix('admin')->group(function() {
    Route::get('/', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.index');
    Route::get('/{user}/edit', [App\Http\Controllers\AdminController::class, 'edit'])->name('admin.edit');
    Route::post('/{user}/edit', [App\Http\Controllers\AdminController::class, 'doEdit'])->name('admin.edit.do');
    Route::get('/{user}/delete', [App\Http\Controllers\AdminController::class, 'delete'])->name('admin.delete');
});
