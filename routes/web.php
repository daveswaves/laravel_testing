<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\ExchangeRateController;


// Route::redirect('/', 'products');
// Route::resource('products', ExchangeRateController::class);
/*
http://127.0.0.1:8000/100/usd/eur
http://127.0.0.1:8000/100/gbp/usd
*/
Route::get('/{amount}/{from}/{to}', [ExchangeRateController::class, 'index']);