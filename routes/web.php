<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\userUi\userPagesController;
use App\Http\Controllers\userUi\usersFunctionsController;
use Illuminate\Support\Facades\Route;

//   Routes
Route::get('/', function () {
    return view("userPages.index");
});


// Breeze Routes
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// User Routes

Route::prefix("user")->group(function () {

    // Pages
    Route::get('index', [userPagesController::class, 'index'])->name('user.index');
    Route::get('find', [userPagesController::class, 'find'])->name('user.find');
    Route::get('applyPage', [userPagesController::class, 'applyPage'])->name('user.applyPage');
    Route::get('ifFindRequest', [userPagesController::class, 'ifFindRequest'])->name('user.ifFindRequest');
    // Requests
    Route::post('soreRequest', [usersFunctionsController::class, 'store'])->name('user.store');
    Route::post("ifFindOldRequest", [usersFunctionsController::class, 'ifFindOldRequest'])->name('user.ifFindOldRequest');
    Route::post("findMyRequest", [usersFunctionsController::class, 'findMyRequest'])->name('user.findMyRequest');

});











require __DIR__ . '/auth.php';
