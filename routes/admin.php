<?php


use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::middleware(['check-admin' ,'auth'])->group( function () {
    Route::get('/', function () {
        return view('admin.layout.dashboard');
    })->name('welcome');
    Route::get('/users', [UserController::class, 'index'])->name('users.index');

});
