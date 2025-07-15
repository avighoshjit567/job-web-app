<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\JobPostController;
use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth','verified'])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth','verified'])->group(function () {
    Route::get('/job-post/list', [JobPostController::class, 'jobPostList'])->name('job.post.list');
    Route::get('/job-post/list-data', [JobPostController::class, 'jobPostListData'])->name('job.post.list.data');
    Route::get('/job-post/add', [JobPostController::class, 'jobPostAdd'])->name('job.post.add');
    Route::post('/job-post/store', [JobPostController::class, 'jobPostStore'])->name('job.post.store');
    
    Route::get('/job-category/add', [JobPostController::class, 'jobCategoryAdd'])->name('job.category.add');
    Route::post('/job-category/store', [JobPostController::class, 'jobCategoryStore'])->name('job.category.store');
    Route::get('/job-category/list', [JobPostController::class, 'jobCategoryList'])->name('job.category.list');
    Route::get('/job-category/list-data', [JobPostController::class, 'jobCategoryListData'])->name('job.category.list.data');
});

// Website routes
Route::get('/', [FrontendController::class, 'home'])->name('home');
Route::get('/contact', [FrontendController::class, 'contact'])->name('contact');
Route::get('/about', [FrontendController::class, 'about'])->name('about');

require __DIR__.'/auth.php';