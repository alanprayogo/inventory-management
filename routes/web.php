<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', [LandingpageController::class, 'showLandingpage'])->name('/');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/register', function () {
    return view('auth.register');
});

Route::get('/purchase-detail', function () {
    return view('member.purchase-detail');
});

// ADMIN
Route::get('/dashboard-admin', function () {
    return view('admin.index');
});

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

// Member
Route::get('/dashboard-member', function () {
    return view('member.index');
});

Route::get('/order', function () {
    return view('member.order');
});

