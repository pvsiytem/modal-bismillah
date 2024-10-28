<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ArticleController;

Route::get('/home', function () {
  return view('home');
})->name('home');


Route::get('/article', function () {
  return view('article');
})->name('article');

Route::get('/merchandise', function () {
  return view('merchandise');
})->name('merchandise');

Route::get('/contribute', function () {
  return view('contribute');
})->name('contribute');;

Route::get('/account', function () {
  return view('account');
})->name('account');

Route::resource('admin/articles', ArticleController::class);

Route::prefix('admin')->name('admin.')->group(function () {
  Route::resource('articles', ArticleController::class);
});