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
    Route::get('job-post/edit/{id}', [JobPostController::class, 'jobPostEdit'])->name('job.post.edit');
    Route::post('job-post/update/{id}', [JobPostController::class, 'jobPostUpdate'])->name('job.post.update');
    Route::delete('job-post/delete/{id}', [JobPostController::class, 'jobPostDelete'])->name('job.post.delete');
    
    Route::get('/job-category/add', [JobPostController::class, 'jobCategoryAdd'])->name('job.category.add');
    Route::post('/job-category/store', [JobPostController::class, 'jobCategoryStore'])->name('job.category.store');
    Route::get('/job-category/list', [JobPostController::class, 'jobCategoryList'])->name('job.category.list');
    Route::get('/job-category/list-data', [JobPostController::class, 'jobCategoryListData'])->name('job.category.list.data');
    Route::get('job-category/edit/{id}', [JobPostController::class, 'jobCategoryEdit'])->name('job.category.edit');
    Route::post('job-category/update/{id}', [JobPostController::class, 'jobCategoryUpdate'])->name('job.category.update');
    Route::delete('job-category/delete/{id}', [JobPostController::class, 'jobCategoryDelete'])->name('job.category.delete');

    Route::get('/job-applied/list', [JobPostController::class, 'jobAppliedList'])->name('job.applied.list');
    Route::get('/job-applied/list-data', [JobPostController::class, 'jobAppliedListData'])->name('job.applied.list.data');
    // For User
    Route::get('user/profile', [FrontendController::class, 'userProfile'])->name('user.profile');
    Route::post('user/profile', [FrontendController::class, 'userProfileUpdate'])->name('user.profile.update');

});

// Website routes
Route::get('/', [FrontendController::class, 'home'])->name('home');
Route::get('/contact', [FrontendController::class, 'contact'])->name('contact');
Route::get('/about', [FrontendController::class, 'about'])->name('about');
Route::get('/category', [FrontendController::class, 'category'])->name('category');
Route::get('/category/{slug?}', [FrontendController::class, 'categoryDetails'])->name('job.category');
Route::get('/job-post', [FrontendController::class, 'jobPost'])->name('job.post');
Route::get('/job-post/{slug?}', [FrontendController::class, 'jobPostDetails'])->name('job.post.details');

Route::get('/job-apply/{slug?}', [FrontendController::class, 'jobApply'])->name('job.apply');
Route::post('/job-apply-store', [FrontendController::class, 'jobApplyStore'])->name('job.apply.store');
Route::get('/job-apply/thankyou/{slug?}', [FrontendController::class, 'thankYou'])->name('thankyou');

Route::get('/user/login', [FrontendController::class, 'login'])->name('user.login');
Route::post('/user/login-process', [FrontendController::class, 'loginProcess'])->name('user.login.process');
Route::get('/user/logout', [FrontendController::class, 'logout'])->name('user.logout');
Route::get('/user/register', [FrontendController::class, 'register'])->name('user.register');
Route::post('/user/store', [FrontendController::class, 'storeUser'])->name('user.store');

require __DIR__.'/auth.php';