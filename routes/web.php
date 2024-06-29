<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\frontend\ContactFormController;
use App\Http\Controllers\frontend\HomeController as FrontendHomeController;
use App\Http\Controllers\frontend\ProductController as FrontendProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routc:\xampp\htdocs\Group-320\laravel\evara\routes\api.phpes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


// Frond-end
Route::controller(FrontendHomeController::class)->group(function(){
    Route::get('/', 'index')->name('home');
    Route::get('about', 'about')->name('about');
    Route::get('blog', 'blog')->name('blog');
    Route::get('contact', 'contact')->name('contact');
});

Route::resource('shop', FrontendProductController::class)->only('index','show');

// Email
Route::post('send-email', [ContactFormController::class,'submit'])->name('send-email');

// Dashboard
Route::prefix('dashboard')->group(function(){
    Route::middleware('admin')->group(function(){
        Route::get('/', [HomeController::class, 'index'])->name('admin.index');
        Route::resource('products', ProductController::class);
        Route::post('logout', [AuthController::class,'logout'])->name('admin.logout');
    });

    Route::get('login', [AuthController::class,'loginPage'])->name('admin.loginPage');
    Route::post('login-user', [AuthController::class,'login'])->name('admin.login_user');
    
    Route::get('register', [AuthController::class,'registerPage'])->name('admin.registerPage');
    Route::post('register-user', [AuthController::class,'register'])->name('admin.register_user');

});