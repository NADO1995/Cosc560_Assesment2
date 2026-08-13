<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;

Route::get('/', function () {
    return redirect('/admin');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])
    ->name('home')
    ->middleware('auth');

Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {

    Route::get('/', function () {
        return redirect()->route('posts.index');
    });

    Route::get('/posts/all', [PostController::class, 'index'])->name('posts.index');
    Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
    Route::post('/posts/save', [PostController::class, 'store'])->name('posts.store');
    Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');
    Route::get('/posts/edit/{post}', [PostController::class, 'edit'])->name('posts.edit');
    Route::put('/posts/update/{post}', [PostController::class, 'update'])->name('posts.update');
    Route::get('/posts/delete/{post}', [PostController::class, 'destroy'])->name('posts.destroy');

    Route::get('/categories/all', [CategoryController::class, 'index'])->name('categories.index');
    Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create');
    Route::post('/categories/save', [CategoryController::class, 'store'])->name('categories.store');
    Route::get('/categories/{category}', [CategoryController::class, 'show'])->name('categories.show');
    Route::get('/categories/edit/{category}', [CategoryController::class, 'edit'])->name('categories.edit');
    Route::put('/categories/update/{category}', [CategoryController::class, 'update'])->name('categories.update');
    Route::get('/categories/delete/{category}', [CategoryController::class, 'destroy'])->name('categories.destroy');

});

Route::fallback(function () {
    return response()->view('404', [], 404);
});