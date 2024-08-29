<?php

use Illuminate\Support\Facades\Route;

//front
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\JobController;
use App\Http\Controllers\Front\ResumeController;
use App\Http\Controllers\Front\CompanyController;
use App\Http\Controllers\Front\BlogController;
//Auth
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
//admin
use App\Http\Controllers\Admin\DashboardController;

Route::name('front.')->group(function (){
    Route::get('/', [HomeController::class, 'index'])->name('index');

    Route::get('/job-search', [JobController::class, 'index'])->name('job-search');
    Route::get('/job-details', [JobController::class, 'details'])->name('job-details'); //slug əlavə olunacaq

    Route::get('/resume-search', [ResumeController::class, 'index'])->name('resume-search');
    Route::get('/resume-details', [ResumeController::class, 'details'])->name('resume-details'); //slug əlavə olunacaq

    Route::get('/companies', [CompanyController::class, 'index'])->name('companies');
    Route::get('/company/details', [CompanyController::class, 'details'])->name('company.details'); //slug əlavə olunacaq

    Route::get('/blogs', [BlogController::class, 'index'])->name('blogs');
    Route::get('/blog/details', [BlogController::class, 'details'])->name('blog.details');
});

Route::prefix('user')->name('user.')->middleware('auth')->group(function (){
    Route::get('/', [DashboardController::class, 'index'])->name('index');
});

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

Route::get('/user/verify/{token}', [RegisterController::class, 'verify'])->name('user.verify');

Route::get('/user/forgot-password', [RegisterController::class, 'showForgotPassword'])->name('forgot-password');
Route::post('/user/forgot-password', [RegisterController::class, 'forgotPassword']);
Route::get('/user/verify/forgot-password/{token}', [RegisterController::class, 'forgotPasswordVerify'])->name('forgot-password-verify');
Route::post('/user/change-password', [RegisterController::class, 'changePassword'])->name('change-password');
