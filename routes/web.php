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

Route::get('/pengingat', function () {
    return view('pengingat');
});

Route::get('/komunitas', function () {
    return view('komunitas');
});

Route::get('/teachers', function () {
    return view('teachers');
});


Route::get('/dzikir', [App\Http\Controllers\User\MateriDzikirController::class, 'index'])->name('dzikir.index');
Route::get('/dzikir/{slug}', [App\Http\Controllers\User\ShowMateriDzikirController::class, 'show'])->name('dzikir.show');

Route::get('/sharing', [App\Http\Controllers\User\SharedExperienceController::class, 'index'])->middleware(['auth', 'verified'])->name('sharing.create');
Route::get('/sharing/create', [App\Http\Controllers\User\SharingExperienceController::class, 'create'])->middleware(['auth', 'verified'])->name('sharing.create');
Route::post('/sharing', [App\Http\Controllers\User\SharingExperienceController::class, 'store'])->middleware(['auth', 'verified'])->name('sharing.store');

Route::get('/manfaat', [App\Http\Controllers\User\ManfaatDzikirController::class, 'index'])->name('manfaat.index');

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/auth', function () {
    return view('auth.auth');
});

Route::middleware('auth')->group(function () {
    Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login');
    Route::post('/login', [AuthenticatedSessionController::class, 'store']);
    Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
});


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
    Route::get('/admin/content-dzikir', [App\Http\Controllers\Admin\ContentDzikirController::class, 'index'])->name('admin.content.index');
    Route::get('/admin/content-dzikir/create', [App\Http\Controllers\Admin\ContentDzikirController::class, 'create'])->name('admin.content.create');
    Route::post('/admin/content-dzikir', [App\Http\Controllers\Admin\ContentDzikirController::class, 'store'])->name('admin.content.store');
    Route::get('/admin/content-dzikir/{contentDzikir}', [App\Http\Controllers\Admin\ContentDzikirController::class, 'show'])->name('admin.content.show');
    Route::get('/admin/content-dzikir/{contentDzikir}/edit', [App\Http\Controllers\Admin\ContentDzikirController::class, 'edit'])->name('admin.content.edit');
    Route::put('/admin/content-dzikir/{contentDzikir}', [App\Http\Controllers\Admin\ContentDzikirController::class, 'update'])->name('admin.content.update');
    Route::delete('/admin/content-dzikir/{contentDzikir}', [App\Http\Controllers\Admin\ContentDzikirController::class, 'destroy'])->name('admin.content.destroy');
    Route::get('/admin/manfaat-dzikir', [ManfaatDzikirController::class, 'index'])->name('admin.manfaat-dzikir.index');
    Route::get('/admin/manfaat-dzikir/create', [ManfaatDzikirController::class, 'create'])->name('admin.manfaat-dzikir.create');
    Route::post('/admin/manfaat-dzikir', [ManfaatDzikirController::class, 'store'])->name('admin.manfaat-dzikir.store');
    Route::get('/admin/manfaat-dzikir/{manfaatDzikir}', [ManfaatDzikirController::class, 'show'])->name('admin.manfaat-dzikir.show');
    Route::get('/admin/manfaat-dzikir/{manfaatDzikir}/edit', [ManfaatDzikirController::class, 'edit'])->name('admin.manfaat-dzikir.edit');
    Route::put('/admin/manfaat-dzikir/{manfaatDzikir}', [ManfaatDzikirController::class, 'update'])->name('admin.manfaat-dzikir.update');
    Route::delete('/admin/manfaat-dzikir/{manfaatDzikir}', [ManfaatDzikirController::class, 'destroy'])->name('admin.manfaat-dzikir.destroy');
    Route::get('/admin/sharing-dzikir', [App\Http\Controllers\Admin\SharingDzikirController::class, 'index'])->name('admin.sharing-dzikir.index');
    Route::get('/admin/sharing-dzikir/create', [App\Http\Controllers\Admin\SharingDzikirController::class, 'create'])->name('admin.sharing-dzikir.create');
    Route::post('/admin/sharing-dzikir', [App\Http\Controllers\Admin\SharingDzikirController::class, 'store'])->name('admin.sharing-dzikir.store');
    Route::get('/admin/sharing-dzikir/{sharing}', [App\Http\Controllers\Admin\SharingDzikirController::class, 'show'])->name('admin.sharing-dzikir.show');
    Route::get('/admin/sharing-dzikir/{sharing}/edit', [App\Http\Controllers\Admin\SharingDzikirController::class, 'edit'])->name('admin.sharing-dzikir.edit');
    Route::put('/admin/sharing-dzikir/{sharing}', [App\Http\Controllers\Admin\SharingDzikirController::class, 'update'])->name('admin.sharing-dzikir.update');
    Route::delete('/admin/sharing-dzikir/{sharing}', [App\Http\Controllers\Admin\SharingDzikirController::class, 'destroy'])->name('admin.sharing-dzikir.destroy');
    Route::get('/admin/dzikir-record', [App\Http\Controllers\Admin\DzikirRecordController::class, 'index'])->name('admin.dzikir-records.index');
    Route::get('/admin/dzikir-record/create', [App\Http\Controllers\Admin\DzikirRecordController::class, 'create'])->name('admin.dzikir-records.create');
    Route::post('/admin/dzikir-record', [App\Http\Controllers\Admin\DzikirRecordController::class, 'store'])->name('admin.dzikir-records.store');
    Route::get('/admin/dzikir-record/{dzikirRecord}', [App\Http\Controllers\Admin\DzikirRecordController::class, 'show'])->name('admin.dzikir-records.show');
    Route::get('/admin/dzikir-record/{dzikirRecord}/edit', [App\Http\Controllers\Admin\DzikirRecordController::class, 'edit'])->name('admin.dzikir-records.edit');
    Route::put('/admin/dzikir-record/{dzikirRecord}', [App\Http\Controllers\Admin\DzikirRecordController::class, 'update'])->name('admin.dzikir-records.update');
    Route::delete('/admin/dzikir-record/{dzikirRecord}', [App\Http\Controllers\Admin\DzikirRecordController::class, 'destroy'])->name('admin.dzikir-records.destroy');

});



require __DIR__ . '/auth.php';
