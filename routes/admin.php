<?php


use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\PlanController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::middleware( [ 'check-admin', 'auth' ] )->group( function () {
    Route::get( '/', [ HomeController::class, 'index' ] )->name( 'welcome' );
    Route::get( '/users', [ UserController::class, 'index' ] )->name( 'users.index' );
    Route::get( '/plans', [ PlanController::class, 'index' ] )->name( 'plans.index' );

} );
