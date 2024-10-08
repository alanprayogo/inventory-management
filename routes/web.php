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

    Route::middleware('guest')->group(function () {
        Route::get('/', [LandingController::class, 'showLanding']); // Menggunakan LandingController
        Route::get('/purchase-detail', [LandingController::class, 'purchaseDetail']); // Menggunakan LandingController
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
        Route::get('/manage-product', [AdminController::class, 'showManageProduct'])->name('manage-product');
        Route::get('/manage-vendor', [AdminController::class, 'showManageVendor'])->name('manage-vendor');
        Route::get('/manage-member', [AdminController::class, 'showManageMember'])->name('manage-member');
        Route::get('/discount-member', [AdminController::class, 'showDiscountMember'])->name('discount-member');
        Route::get('/stock-product', [AdminController::class, 'showStockProduct'])->name('stock-product');
        Route::get('/procurement', [AdminController::class, 'showProcurement'])->name('procurement');
        Route::get('/receiving', [AdminController::class, 'showReceiving'])->name('receiving');
        Route::get('/sales', [AdminController::class, 'showSales'])->name('sales');
    });

    Route::middleware(['auth', 'member'])->group(function () {
        Route::get('/dashboard-member', [MemberController::class, 'showDashboard'])->name('dashboard-member');
        Route::get('/order', [MemberController::class, 'showOrder'])->name('order');
    });

});

