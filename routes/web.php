<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\AdminPanelUi;
use App\Http\Controllers\Admin\EmployeeController;
use App\Http\Controllers\Admin\AdminPanelController;
use App\Http\Controllers\Admin\ModelController;
use App\Http\Controllers\userUi\userPagesController;
use App\Http\Controllers\Admin\RequestFunctionController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\CityController;
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
        Route::get("allAllRequest", [RequestFunctionController::class, 'allAllRequest'])->name('admin.request.allAllRequest');
        Route::get("refuse", [RequestFunctionController::class, 'refuse'])->name('admin.request.refuse');
        Route::get("allRequest", [RequestFunctionController::class, 'all'])->name('admin.request.all');
        Route::get("revasionRequest", [RequestFunctionController::class, 'revasion'])->name('admin.request.revasion');
        Route::get("approveRequest", [RequestFunctionController::class, 'approve'])->name('admin.request.approve');
        Route::get("doneRequest", [RequestFunctionController::class, 'done'])->name('admin.request.done');
        Route::get("viewRequest/{id}", [RequestFunctionController::class, 'view'])->name('admin.request.view');
        //  Change Request Status
        Route::post("changeStatus/{id}", [RequestFunctionController::class, 'changeStatus'])->name('admin.request.changeStatus');

        Route::get('export',[AdminPanelController::class,'export'])->name('data.export');
        // Manager And viewer
        Route::middleware('viewer')->group(function () {
            Route::prefix("models")->group(function () {
                Route::get('/', [ModelController::class, 'index'])->name("models.index");
                Route::get('/create', [ModelController::class, 'create'])->name("model.create");
                Route::post('/store', [ModelController::class, 'store'])->name("model.store");
                Route::post('/update/{id}', [ModelController::class, 'update'])->name("models.update");
                Route::get('/lockAuto', [ModelController::class, 'lockAuto'])->name("model.lockAuto");
            });
        });

        // Manager Onlye
        Route::middleware('manager')->group(function () {
            Route::prefix("employee")->group(function () {
                Route::get('/', [EmployeeController::class, 'index'])->name("employee.index");
                Route::get('/create', [EmployeeController::class, 'create'])->name("employee.create");
                Route::get('/edit/{id}', [EmployeeController::class, 'edit'])->name("employee.edit");
                Route::post('/edit/{id}', [EmployeeController::class, 'update'])->name("employee.update");
                Route::get('/delete/{id}', [EmployeeController::class, 'delete'])->name("employee.delete");
            });
            Route::prefix("city")->group(function () {
                Route::get('/', [CityController::class, 'index'])->name("city.index");
                Route::get('/create', [CityController::class, 'create'])->name("city.create");
                Route::post('/store', [CityController::class, 'store'])->name("city.store");

                Route::get('/edit/{id}', [CityController::class, 'edit'])->name("city.edit");
                Route::post('/edit/{id}', [CityController::class, 'update'])->name("city.update");
                Route::get('/delete/{id}', [CityController::class, 'destroy'])->name("city.destroy");
            });
            Route::prefix("users")->group(function () {
                Route::get('/', [UserController::class, 'index'])->name("users.listAll");
                Route::get('/managers', [UserController::class, 'managers'])->name("managers.index");
                Route::get('/viewers', [UserController::class, 'viewers'])->name("viewers.index");
                Route::get('/edit/{id}', [UserController::class, 'edit'])->name("users.edit");
                Route::post('/edit/{id}', [UserController::class, 'update'])->name("users.update");
            });

            Route::prefix("area")->group(function () {
                Route::get('/', [AreaController::class, 'index'])->name("area.index");
                Route::get('/create', [AreaController::class, 'create'])->name("area.create");
                Route::post('/store', [AreaController::class, 'store'])->name("area.store");
                Route::get('/edit/{id}', [AreaController::class, 'edit'])->name("area.edit");
                Route::post('/edit/{id}', [AreaController::class, 'update'])->name("area.update");
                Route::get('/delete/{id}', [AreaController::class, 'destroy'])->name("area.destroy");
            });
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
