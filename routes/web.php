<?php

use App\Http\Controllers\ClientController;
use Illuminate\Support\Facades\Route;

Route::get('/Clients',[ClientController::class,'showAllClients'])->name('clients.clients');

Route::get('/Add',[ClientController::class,'ClientAdd'])->name('clients.add');

Route::put('/store',[ClientController::class,'store'])->name('store.store');
