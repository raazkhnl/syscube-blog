<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    AdminController,   
    UserController,
    BlogController,
    CommentController,
    ReactorController
};

// Home route
Route::get('/', function () {
    return view('welcome');
});

// Dashboard route
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified', 'role:user'])->name('dashboard');
Route::get('/admin/dashboard',[AdminController::class, 'index'])->name('admin.dashboard')->middleware(['auth', 'role:admin']);

// Blog routes
Route::prefix('blog')->middleware('auth')->group(function () {
    Route::get('create', function () {
        return view('blog.create');
    })->name('blog.create');
    
    Route::post('save', [BlogController::class, 'store'])->name('blog.save');
    Route::get('{blog}/edit', [BlogController::class, 'edit'])->name('blog.edit');
    Route::put('{blog}/update', [BlogController::class, 'update'])->name('blog.update');
    Route::delete('{blog}', [BlogController::class, 'delete'])->name('blog.delete');
    Route::get('{id}/comment', [BlogController::class, 'comment'])->name('blog.comment');
    Route::get('service', function () {
        return view('blog.service');
    })->name('blog.service');
});

// Comment route
Route::post('comment/save', [CommentController::class, 'store'])->name('comment.save')->middleware('auth');

// User profile route
Route::get('user/{id}/profile', [UserController::class, 'profile'])->middleware(['auth'])->name('user.profile');

// Participant related route
Route::post('respond/{blog}', [ReactorController::class, 'respond'])->name('blog.respond');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



require __DIR__.'/auth.php';
