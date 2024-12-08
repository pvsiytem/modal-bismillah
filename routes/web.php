<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin\ArticleController;
use App\Models\Article;
use App\Models\User;

Auth::routes();

// Default Routes
Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/article', function () {
    $articles = Article::all(); // Fetch all articles from the database
    return view('article', compact('articles')); // Pass the articles to the view
})->name('article'); // Add a name to this route

Route::get('/merchandise', function () {
    return view('merchandise');
})->name('merchandise');

Route::get('/contribute', function () {
    return view('contribute');
})->name('contribute');

Route::get('/account', function () {
    return view('account');
})->name('account');

Route::get('/profile', function () {
    return view('profile');
})->name('profile');

Route::get('/contact', [ContactController::class, 'showForm'])->name('contact.form');
Route::post('/contact', [ContactController::class, 'submitForm'])->name('contact.submit');

// Protected Routes for Admin (Using Middleware)
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::resource('articles', ArticleController::class); // Admin can manage articles
});

Route::namespace('App\Http\Controllers\Admin')->group(function () {
    Route::resource('products', ProductController::class);
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

$user = \App\Models\User::where('email', 'admin@gmail.com')->first();