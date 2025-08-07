<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminAuthController;

// Main Website Routes
Route::get('/', [HomeController::class, 'index'])->name('home');

// Admin Authentication Routes
Route::get('/admin/login', [AdminAuthController::class, 'showLogin'])->name('admin.login');
Route::post('/admin/login', [AdminAuthController::class, 'login']);
Route::post('/admin/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');

// Admin Panel Routes
Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
Route::get('/admin/users', [AdminController::class, 'users'])->name('admin.users');
Route::get('/admin/projects', [AdminController::class, 'projects'])->name('admin.projects');
Route::get('/admin/integrations', [AdminController::class, 'integrations'])->name('admin.integrations');
Route::get('/admin/billing', [AdminController::class, 'billing'])->name('admin.billing');
Route::get('/admin/analytics', [AdminController::class, 'analytics'])->name('admin.analytics');
Route::get('/admin/support', [AdminController::class, 'support'])->name('admin.support');
Route::get('/admin/settings', [AdminController::class, 'settings'])->name('admin.settings');