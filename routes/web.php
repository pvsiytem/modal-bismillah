<?php

use Illuminate\Support\Facades\Route;

// Route for the home page
Route::get('/home', function () {
    return view('home');
});

Route::get('/article', function () {
  return view('article');
});

Route::get('/article', function () {
  return view('article');
});

Route::get('/merchandise', function () {
  return view('merchandise');
});

Route::get('/contribute', function () {
  return view('contribute');
});

Route::get('/account', function () {
  return view('account');
});