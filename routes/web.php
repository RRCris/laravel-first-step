<?php

use App\Http\Controllers\PrimerControlador;
use App\Http\Controllers\SegundoControlador;
use Illuminate\Support\Facades\Route;

Route::get("/", function () {
    return redirect()->route("contact1");
})->name("home");
Route::get("/contact1", [PrimerControlador::class, "index"])->name("contact1");
Route::get("/contact2", [SegundoControlador::class, "index"])->name("contact2");

Route::resource("snakes", PrimerControlador::class);
