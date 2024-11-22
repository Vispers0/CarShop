<?php

use App\Http\Controllers\DealersController;

use App\Http\Controllers\TestController;

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('main');
});

Route::get('/dealers', [DealersController::class, 'index'])->name('dealers');

Route::get('/dealers/load', [DealersController::class, 'loadDealers']);

Route::get('/dealers/add', [DealersController::class, 'dealerIndex']);

Route::get('/dealers/delete', [DealersController::class, 'deleteDealer']);

Route::post('/execute', [DealersController::class, 'addDealer'])->name('exec');
