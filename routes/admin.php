<?php


use Illuminate\Support\Facades\Route;

Route::get('/',function (){
    return view('admin.layout.dashboard');
})->name('welcome');
