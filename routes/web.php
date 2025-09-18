<?php

use Illuminate\Support\Facades\Route;

Route::get("/", function (){
    return view("pages.home");
});

require __DIR__ . "/rotues/auth.php";