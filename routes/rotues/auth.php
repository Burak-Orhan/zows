<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get("/register", [AuthController::class, "register"])->name("register");
Route::get("/login", [AuthController::class, "login"])->name("login");

Route::post("/register", [AuthController::class, "registerPost"])->name("register.post");
Route::post("/login", [AuthController::class, "loginPost"])->name("login.post");