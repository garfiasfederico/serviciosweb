<?php

use App\Http\Controllers\ServiciosController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/comenzamos', function () {
    return view('comenzamos');
});

Route::get('/soap/wsdl', [ServiciosController::class,"wsdlAction"])->name('soap-wsdl');
Route::any('/soap/server', [ServiciosController::class,"serverAction"])->name('soap-server');

