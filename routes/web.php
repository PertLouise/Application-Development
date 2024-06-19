<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [AdminController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

// Other authenticated routes for profile management
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Admin routes handled by AdminController
Route::controller(AdminController::class)->group(function () {
    Route::get('/admin/logout', 'destroy')->name('admin.logout');
    Route::get('/admin/profile', 'Profile')->name('admin.profile');
    Route::get('/edit/profile', 'EditProfile')->name('edit.profile');
    Route::get('/calendar', 'Calendar')->name('admin.calendar');
    Route::get('/inbox', 'inbox')->name('admin.inbox');
    Route::get('/read', 'read')->name('admin.read');
    Route::get('/allproduct', 'productAll')->name('admin.allproduct');
    Route::post('/store/profile', 'StoreProfile')->name('store.profile');
    Route::get('/allpurchases', 'purchaseAll')->name('admin.allpurchases');
    Route::get('/changepassword', 'change')->name('change.password');
    Route::post('/update/password', 'update')->name('update.password');
    Route::get('/allstocks', 'stock')->name('admin.allstock');
});

require __DIR__.'/auth.php';