<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\AdminPanelUi;
use App\Http\Controllers\Admin\EmployeeController;
use App\Http\Controllers\Admin\AdminPanelController;
use App\Http\Controllers\Admin\ModelController;
use App\Http\Controllers\userUi\userPagesController;
use App\Http\Controllers\Admin\RequestFunctionController;
use App\Http\Controllers\userUi\usersFunctionsController;

//   Routes
Route::get('/',  [userPagesController::class, 'index']);


// Breeze Routes
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    // Admin Routes
    Route::prefix("admin")->group(function () {
        Route::get('/', [AdminPanelController::class, 'index'])->name("admin.index");
        // List requests
        Route::get("allRequest", [RequestFunctionController::class, 'all'])->name('admin.request.all');
        Route::get("revasionRequest", [RequestFunctionController::class, 'revasion'])->name('admin.request.revasion');
        Route::get("approveRequest", [RequestFunctionController::class, 'approve'])->name('admin.request.approve');
        Route::get("doneRequest", [RequestFunctionController::class, 'done'])->name('admin.request.done');
        Route::get("viewRequest/{id}", [RequestFunctionController::class, 'view'])->name('admin.request.view');
        //  Change Request Status
        Route::post("changeStatus/{id}", [RequestFunctionController::class, 'changeStatus'])->name('admin.request.changeStatus');


        Route::prefix("employee")->group(function () {
            Route::get('/', [EmployeeController::class, 'index'])->name("employee.index");
            Route::get('/create', [EmployeeController::class, 'create'])->name("employee.create");
        });
        Route::prefix("models")->group(function () {
            Route::get('/', [ModelController::class, 'index'])->name("models.index");
            Route::post('/update/{id}', [ModelController::class, 'update'])->name("models.update");
        });
    });
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
