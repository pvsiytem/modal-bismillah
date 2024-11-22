<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ArticleController;
use App\Models\Article;
use App\Models\User;

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

// Voyager Admin Routes
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes(); // Automatically adds routes for Voyager's admin panel
});

// Protected Routes for Admin (Using Middleware)
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::resource('articles', ArticleController::class); // Admin can manage articles
});
