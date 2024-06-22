<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\AdminProfileController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/classes', function() {
    return view('classes');
});

Route::get('/teachers', function() {
    return view('teachers');
});

Route::get('/gallery', function() {
    return view('gallery');
});

Route::get('/blog', function() {
    return view('blog');
});

Route::get('/single', function() {
    return view('single');
});

Route::get('/contact', function() {
    return view('contact');
});

Route::get('/auth', function () {
    return view('auth.auth');
});

Route::get('login', [AuthenticatedSessionController::class, 'create'])->name('login');
Route::post('login', [AuthenticatedSessionController::class, 'store']);
Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::post('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
});


// Admin routes
Route::middleware('auth')->group(function () {
    Route::get('/admin', function () {
        return view('admin.dashboard');
    })->middleware(['auth', 'verified'])->name('admin');
    Route::get('/admin/users', [App\Http\Controllers\Admin\AdminUsersController::class, 'index'])->name('admin.users.index');
    Route::get('/admin/users/create', [App\Http\Controllers\Admin\AdminUsersController::class, 'create'])->name('admin.users.create');
    Route::post('/admin/users', [App\Http\Controllers\Admin\AdminUsersController::class, 'store'])->name('admin.users.store');
    Route::get('/admin/users/{user}', [App\Http\Controllers\Admin\AdminUsersController::class, 'show'])->name('admin.users.show');
    Route::get('/admin/users/{user}/edit', [App\Http\Controllers\Admin\AdminUsersController::class, 'edit'])->name('admin.users.edit');
    Route::put('/admin/users/{user}', [App\Http\Controllers\Admin\AdminUsersController::class, 'update'])->name('admin.users.update');
    Route::delete('/admin/users/{user}', [App\Http\Controllers\Admin\AdminUsersController::class, 'destroy'])->name('admin.users.destroy');

});

require __DIR__.'/auth.php';
