<?php

use App\Http\Controllers\ClientController;
use Illuminate\Support\Facades\Route;

Route::get('/Clients',[ClientController::class,'ClientPage'])->name('clients.clients');

Route::get('/Add',[ClientController::class,'ClientAdd'])->name('clients.add');
