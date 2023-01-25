<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdressController;
use App\Http\Controllers\ClientController;

Route::get('/', function () {
    return redirect('clients');
});

Route::resource("/adress", AdressController::class);
Route::resource("/clients", ClientController::class);
