<?php

use App\Http\Controllers\Admin\DashboardController;
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



Route::middleware('auth')->group(function () {
    Route::get('/profile', function () {
        return view('profile.edit');
    })->name('profile.edit');

    Route::post('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
});

// Admin routes
Route::middleware(['auth', 'verified', 'role:admin'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
 
});

require __DIR__.'/auth.php';
