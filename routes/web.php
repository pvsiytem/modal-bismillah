<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Middleware\AdminMiddleware;
use App\Models\User;

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

Route::middleware(['auth', 'admin'])->group(function () {
  Route::get('/admin/article/create', [ArticleController::class, 'create'])->name('admin.articles.create');
});

Route::middleware(['auth', 'admin']) // Ensure the user is authenticated and is an admin
    ->prefix('admin') // Optional: use prefix if you're organizing admin routes
    ->group(function () {
        Route::resource('articles', ArticleController::class); // This will create all necessary routes for the resource
    });

Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

Route::get('admin/login', [LoginController::class, 'showLoginForm'])->name('admin.login');
Route::post('admin/login', [LoginController::class, 'login']);
Route::middleware([AdminMiddleware::class])->group(function () {
    Route::resource('admin/articles', ArticleController::class);
    // Add more admin routes here as needed
});

Route::get('/test-admin', function () {
    $admin = User::where('email', 'admin@example.com')->first();
    return $admin->is_admin ? 'This user is an admin.' : 'This user is not an admin.';
});
