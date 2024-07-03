<?php

use App\Http\Controllers\Admin\AdminUsersController;
use App\Http\Controllers\Admin\LanguageController;
use App\Http\Controllers\Admin\ManfaatDzikirController;
use App\Http\Controllers\Admin\RecommendedDzikirController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Admin\MateriDzikirController;
use App\Http\Controllers\Admin\CommunitiesController;
use App\Http\Controllers\Admin\ContentDzikirController;
use App\Http\Controllers\Admin\DzikirRecordController;
use App\Http\Controllers\Admin\ShalawatController;
use App\Http\Controllers\Admin\SharingDzikirController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\User\CommunityController;
use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\User\MessageController;
use App\Http\Controllers\User\SharedExperienceController;
use App\Http\Controllers\User\SharingExperienceController;
use App\Http\Controllers\User\ShowMateriDzikirController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/monitoring', function () {
    return view('monitoring');
});

Route::get('/shalawat', function () {
    return view('shalawat');
});

Route::get('/doa-pagi-sore', [App\Http\Controllers\User\DoaPagiSoreController::class, 'index'])->name('dzikir.index');

Route::get('/qiyamul-lail', function () {
    return view('qiyamul-lail');
});

Route::group(['middleware' => ['auth']], function () {
    Route::resource('communities', CommunityController::class);
    Route::post('communities/{id}/invite', [CommunityController::class, 'invite'])->name('communities.invite');
    Route::get('notifications', [CommunityController::class, 'notifications'])->name('notifications.index');
    Route::get('/communities/{community}', [MessageController::class, 'index'])->name('communities.show');
    Route::post('/communities/{community}/messages', [MessageController::class, 'store'])->name('communities.messages.store');
    Route::post('/messages', [MessageController::class, 'store'])->name('messages.store');
    Route::delete('/messages/{id}', [MessageController::class, 'destroy'])->name('messages.destroy');
});

Route::get('/teachers', function () {
    return view('teachers');
});

Route::get('/dzikir', [RecommendedDzikirController::class, 'index'])->name('recommended-dzikir.index');
Route::get('/dzikir', [App\Http\Controllers\User\MateriDzikirController::class, 'index'])->name('dzikir.index');
Route::get('/dzikir/{slug}', [ShowMateriDzikirController::class, 'show'])->name('dzikir.show');

Route::get('/sharing', [SharedExperienceController::class, 'index'])->middleware(['auth', 'verified'])->name('sharing.create');
Route::get('/sharing/create', [SharingExperienceController::class, 'create'])->middleware(['auth', 'verified'])->name('sharing.create');
Route::post('/sharing', [SharingExperienceController::class, 'store'])->middleware(['auth', 'verified'])->name('sharing.store');

Route::get('/manfaat', [ManfaatDzikirController::class, 'index'])->name('manfaat.index');

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
    })->middleware(['auth', 'verified', 'role:admin'])->name('admin');
    Route::get('/admin/users', [AdminUsersController::class, 'index'])->name('admin.users.index');
    Route::get('/admin/users/create', [AdminUsersController::class, 'create'])->name('admin.users.create');
    Route::post('/admin/users', [AdminUsersController::class, 'store'])->name('admin.users.store');
    Route::get('/admin/users/{user}', [AdminUsersController::class, 'show'])->name('admin.users.show');
    Route::get('/admin/users/{user}/edit', [AdminUsersController::class, 'edit'])->name('admin.users.edit');
    Route::put('/admin/users/{user}', [AdminUsersController::class, 'update'])->name('admin.users.update');
    Route::delete('/admin/users/{user}', [AdminUsersController::class, 'destroy'])->name('admin.users.destroy');
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
    Route::get('/admin/content-dzikir', [ContentDzikirController::class, 'index'])->name('admin.content.index');
    Route::get('/admin/content-dzikir/create', [ContentDzikirController::class, 'create'])->name('admin.content.create');
    Route::post('/admin/content-dzikir', [ContentDzikirController::class, 'store'])->name('admin.content.store');
    Route::get('/admin/content-dzikir/{contentDzikir}', [ContentDzikirController::class, 'show'])->name('admin.content.show');
    Route::get('/admin/content-dzikir/{contentDzikir}/edit', [ContentDzikirController::class, 'edit'])->name('admin.content.edit');
    Route::put('/admin/content-dzikir/{contentDzikir}', [ContentDzikirController::class, 'update'])->name('admin.content.update');
    Route::delete('/admin/content-dzikir/{contentDzikir}', [ContentDzikirController::class, 'destroy'])->name('admin.content.destroy');
    Route::get('/admin/manfaat-dzikir', [ManfaatDzikirController::class, 'index'])->name('admin.manfaat-dzikir.index');
    Route::get('/admin/manfaat-dzikir/create', [ManfaatDzikirController::class, 'create'])->name('admin.manfaat-dzikir.create');
    Route::post('/admin/manfaat-dzikir', [ManfaatDzikirController::class, 'store'])->name('admin.manfaat-dzikir.store');
    Route::get('/admin/manfaat-dzikir/{manfaatDzikir}', [ManfaatDzikirController::class, 'show'])->name('admin.manfaat-dzikir.show');
    Route::get('/admin/manfaat-dzikir/{manfaatDzikir}/edit', [ManfaatDzikirController::class, 'edit'])->name('admin.manfaat-dzikir.edit');
    Route::put('/admin/manfaat-dzikir/{manfaatDzikir}', [ManfaatDzikirController::class, 'update'])->name('admin.manfaat-dzikir.update');
    Route::delete('/admin/manfaat-dzikir/{manfaatDzikir}', [ManfaatDzikirController::class, 'destroy'])->name('admin.manfaat-dzikir.destroy');
    Route::get('/admin/sharing-dzikir', [SharingDzikirController::class, 'index'])->name('admin.sharing-dzikir.index');
    Route::get('/admin/sharing-dzikir/create', [SharingDzikirController::class, 'create'])->name('admin.sharing-dzikir.create');
    Route::post('/admin/sharing-dzikir', [SharingDzikirController::class, 'store'])->name('admin.sharing-dzikir.store');
    Route::get('/admin/sharing-dzikir/{sharing}', [SharingDzikirController::class, 'show'])->name('admin.sharing-dzikir.show');
    Route::get('/admin/sharing-dzikir/{sharing}/edit', [SharingDzikirController::class, 'edit'])->name('admin.sharing-dzikir.edit');
    Route::put('/admin/sharing-dzikir/{sharing}', [SharingDzikirController::class, 'update'])->name('admin.sharing-dzikir.update');
    Route::delete('/admin/sharing-dzikir/{sharing}', [SharingDzikirController::class, 'destroy'])->name('admin.sharing-dzikir.destroy');
    Route::get('/admin/dzikir-record', [DzikirRecordController::class, 'index'])->name('admin.dzikir-records.index');
    Route::get('/admin/dzikir-record/create', [DzikirRecordController::class, 'create'])->name('admin.dzikir-records.create');
    Route::post('/admin/dzikir-record', [DzikirRecordController::class, 'store'])->name('admin.dzikir-records.store');
    Route::get('/admin/dzikir-record/{dzikirRecord}', [DzikirRecordController::class, 'show'])->name('admin.dzikir-records.show');
    Route::get('/admin/dzikir-record/{dzikirRecord}/edit', [DzikirRecordController::class, 'edit'])->name('admin.dzikir-records.edit');
    Route::put('/admin/dzikir-record/{dzikirRecord}', [DzikirRecordController::class, 'update'])->name('admin.dzikir-records.update');
    Route::delete('/admin/dzikir-record/{dzikirRecord}', [DzikirRecordController::class, 'destroy'])->name('admin.dzikir-records.destroy');
    Route::get('/admin/recommended-dzikir', [RecommendedDzikirController::class, 'index'])->name('admin.recommended-dzikir.index');
    Route::get('/admin/recommended-dzikir/create', [RecommendedDzikirController::class, 'create'])->name('admin.recommended-dzikir.create');
    Route::post('/admin/recommended-dzikir', [RecommendedDzikirController::class, 'store'])->name('admin.recommended-dzikir.store');
    Route::get('/admin/recommended-dzikir/{recommendedDzikir}', [RecommendedDzikirController::class, 'show'])->name('admin.recommended-dzikir.show');
    Route::get('/admin/recommended-dzikir/{recommendedDzikir}/edit', [RecommendedDzikirController::class, 'edit'])->name('admin.recommended-dzikir.edit');
    Route::put('/admin/recommended-dzikir/{recommendedDzikir}', [RecommendedDzikirController::class, 'update'])->name('admin.recommended-dzikir.update');
    Route::delete('/admin/recommended-dzikir/{recommendedDzikir}', [RecommendedDzikirController::class, 'destroy'])->name('admin.recommended-dzikir.destroy');
    Route::get('/admin/community', [CommunitiesController::class, 'index'])->name('admin.community.index');
    Route::get('/admin/community/create', [CommunitiesController::class, 'create'])->name('admin.community.create');
    Route::post('/admin/community', [CommunitiesController::class, 'store'])->name('admin.community.store');
    Route::get('/admin/community/{community}', [CommunitiesController::class, 'show'])->name('admin.community.show');
    Route::get('/admin/community/{community}/edit', [CommunitiesController::class, 'edit'])->name('admin.community.edit');
    Route::put('/admin/community/{community}', [CommunitiesController::class, 'update'])->name('admin.community.update');
    Route::delete('/admin/community/{community}', [CommunitiesController::class, 'destroy'])->name('admin.community.destroy');
    Route::get('/admin/shalawat', [ShalawatController::class, 'index'])->name('admin.shalawat.index');
    Route::get('/admin/shalawat/create', [ShalawatController::class, 'create'])->name('admin.shalawat.create');
    Route::post('/admin/shalawat', [ShalawatController::class, 'store'])->name('admin.shalawat.store');
    Route::get('/admin/shalawat/{shalawat}', [ShalawatController::class, 'show'])->name('admin.shalawat.show');
    Route::get('/admin/shalawat/{shalawat}/edit', [ShalawatController::class, 'edit'])->name('admin.shalawat.edit');
    Route::put('/admin/shalawat/{shalawat}', [ShalawatController::class, 'update'])->name('admin.shalawat.update');
    Route::delete('/admin/shalawat/{shalawat}', [ShalawatController::class, 'destroy'])->name('admin.shalawat.destroy');
});



require __DIR__ . '/auth.php';
