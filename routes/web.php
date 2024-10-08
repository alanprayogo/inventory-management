<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\RegisterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::middleware(['preventBack'])->group(function () {

    Route::middleware('userorguest')->group(function () {
        Route::get('/', [LandingController::class, 'showLanding']); // Menggunakan LandingController
        Route::get('/purchase-detail', [LandingController::class, 'purchaseDetail']); // Menggunakan LandingController
    });

    Route::middleware('guest')->group(function () {
        Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
        Route::post('/register', [RegisterController::class, 'register']);
        Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
        Route::post('/login', [LoginController::class, 'login']);
    });
    
    Route::middleware('auth')->group(function () {
        Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
    });

    Route::middleware(['auth', 'admin'])->group(function () {
        Route::get('/dashboard-admin', [AdminController::class, 'showDashboard'])->name('dashboard-admin');
    });

    Route::middleware(['auth', 'member'])->group(function () {
        Route::get('/dashboard-member', [MemberController::class, 'showDashboard'])->name('dashboard-member');
    });

    // ADMIN

    Route::get('/manage-product', function () {
        return view('admin.manage-product');
    });

    Route::get('/manage-vendor', function () {
        return view('admin.manage-vendor');
    });

    Route::get('/manage-member', function () {
        return view('admin.manage-member');
    });

    Route::get('/discount-member', function () {
        return view('admin.discount-member');
    });

    Route::get('/stock-product', function () {
        return view('admin.stock-product');
    });

    Route::get('/procurement', function () {
        return view('admin.procurement');
    });

    Route::get('/receiving', function () {
        return view('admin.receiving');
    });

    Route::get('/sales', function () {
        return view('admin.sales');
    });

    Route::get('/order', function () {
        return view('member.order');
    });

});

