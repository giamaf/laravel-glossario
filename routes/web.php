<?php

use App\Http\Controllers\Admin\HomeController as AdminHomeController;
use App\Http\Controllers\Guest\HomeController as GuestHomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\WordController;
use App\Http\Controllers\LinkController;
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

//# ROTTE GUEST

Route::get('/', GuestHomeController::class)->name('guest.home');


//# ROTTE ADMIN

Route::prefix('/admin')->middleware('auth')->name('admin.')->group(function () {

    Route::get('', AdminHomeController::class)->name('home');
    // Route::get('/words', [WordController::class, 'index'])->name('index');
    // Route::get('/words/create', [WordController::class, 'create'])->name('create');
    // Route::get('/words/{word}', [WordController::class, 'show'])->name('show');
    // Route::get('/words/{word}/edit', [WordController::class, 'edit'])->name('edit');
    // Route::post('/words', [WordController::class, 'store'])->name('store');
    // Route::put('/words/{word}', [WordController::class, 'update'])->name('update');
    // Route::delete('/words/{word}', [WordController::class, 'destroy'])->name('destroy');

    //* Rotte Admin per ripristino ed eliminazione massive
    Route::delete('/words/massive-drop', [WordController::class, 'massiveDrop'])->name('words.massive-drop');
    Route::patch('/words/massive-restore', [WordController::class, 'massiveRestore'])->name('words.massive-restore');

    //* Rotte Admin soft delete
    Route::get('/words/trash', [WordController::class, 'trash'])->name('words.trash');
    Route::patch('/words/{word}/restore', [WordController::class, 'restore'])->name('words.restore')->withTrashed();
    Route::delete('/words/{word}/drop', [WordController::class, 'drop'])->name('words.drop')->withTrashed();


    //* Rotte Admin Word CRUD
    Route::resource('words', WordController::class)->withTrashed(['show', 'edit', 'update']);

    // Rotte Admin Link CRUD
    Route::resource('links', LinkController::class);
});



//# ROTTE PROFILE

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';