<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\LanguageController;
use App\Http\Controllers\Admin\ManfaatDzikirController;
use App\Http\Controllers\AdminProfileController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Admin\MateriDzikirController;
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

Route::get('/classes', function () {
    return view('classes');
});

Route::get('/teachers', function () {
    return view('teachers');
});

Route::get('/gallery', function () {
    return view('gallery');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/single', function () {
    return view('single');
});

Route::get('/contact', function () {
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
    Route::get('/admin/languages', [LanguageController::class, 'index'])->name('admin.languages.index');
    Route::get('/admin/languages/create', [LanguageController::class, 'create'])->name('admin.languages.create');
    Route::post('/admin/languages', [LanguageController::class, 'store'])->name('admin.languages.store');
    Route::get('/admin/languages/{language}', [LanguageController::class, 'show'])->name('admin.languages.show');
    Route::get('/admin/languages/{language}/edit', [LanguageController::class, 'edit'])->name('admin.languages.edit');
    Route::put('/admin/languages/{language}', [LanguageController::class, 'update'])->name('admin.languages.update');
    Route::delete('/admin/languages/{language}', [LanguageController::class, 'destroy'])->name('admin.languages.destroy');
    Route::get('/admin/materi-dzikir', [MateriDzikirController::class, 'index'])->name('admin.materi-dzikir.index');
    Route::get('/admin/materi-dzikir/create', [MateriDzikirController::class, 'create'])->name('admin.materi-dzikir.create');
    Route::post('/admin/materi-dzikir', [MateriDzikirController::class, 'store'])->name('admin.materi-dzikir.store');
    Route::get('/admin/materi-dzikir/{materiDzikir}', [MateriDzikirController::class, 'show'])->name('admin.materi-dzikir.show');
    Route::get('/admin/materi-dzikir/{materiDzikir}/edit', [MateriDzikirController::class, 'edit'])->name('admin.materi-dzikir.edit');
    Route::put('/admin/materi-dzikir/{materiDzikir}', [MateriDzikirController::class, 'update'])->name('admin.materi-dzikir.update');
    Route::delete('/admin/materi-dzikir/{materiDzikir}', [MateriDzikirController::class, 'destroy'])->name('admin.materi-dzikir.destroy');
    Route::get('/admin/manfaat-dzikir', [ManfaatDzikirController::class, 'index'])->name('admin.manfaat-dzikir.index');
    Route::get('/admin/manfaat-dzikir/create', [ManfaatDzikirController::class, 'create'])->name('admin.manfaat-dzikir.create');
    Route::post('/admin/manfaat-dzikir', [ManfaatDzikirController::class, 'store'])->name('admin.manfaat-dzikir.store');
    Route::get('/admin/manfaat-dzikir/{manfaatDzikir}', [ManfaatDzikirController::class, 'show'])->name('admin.manfaat-dzikir.show');
    Route::get('/admin/manfaat-dzikir/{manfaatDzikir}/edit', [ManfaatDzikirController::class, 'edit'])->name('admin.manfaat-dzikir.edit');
    Route::put('/admin/manfaat-dzikir/{manfaatDzikir}', [ManfaatDzikirController::class, 'update'])->name('admin.manfaat-dzikir.update');
    Route::delete('/admin/manfaat-dzikir/{manfaatDzikir}', [ManfaatDzikirController::class, 'destroy'])->name('admin.manfaat-dzikir.destroy');

});



require __DIR__ . '/auth.php';
