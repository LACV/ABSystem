<?php

use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;


Route::view('/', 'Home')->name('home');
Route::get('/Customers',[CustomerController::class,  'index'])->name('customer.index');
Route::get('/Customers/{customer}',[CustomerController::class,  'show'])->name('customer.show');

?>