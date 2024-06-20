<?php

use App\Http\Controllers\clientecontroller;
use Illuminate\Support\Facades\Route;

Route::get("/",[clientecontroller::class,"index"])->name ("cliente.index");
Route::get("/cliente",[clientecontroller::class,"cliente"])->name ("cliente1.vista");