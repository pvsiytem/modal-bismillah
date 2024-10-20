<?php

use Illuminate\Support\Facades\Route;

// Route for the home page
Route::get('/home', function () {
    return view('home');
});
