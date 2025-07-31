<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\ProfileController;

use App\Http\Controllers\RoleController;

use App\Http\Controllers\UserController;

use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Route;

// FRONTEND-ROUTES::::::::;
// Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/',[HomeController::class, 'index'])->name('index');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('clas_1',[HomeController::class, 'class_1'])->name('class_1');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/euro_igko',[HomeController::class, 'euro_igko'])->name('euro_igko');
Route::get('/iao_exam', [HomeController::class, 'iao_exam'])->name('iao_exam');
Route::get('/iso_exam', [HomeController::class, 'iso_exam'])->name('iso_exam');
Route::get('/imo_exam', [HomeController::class, 'imo_exam'])->name('imo_exam');
// iso classes :::::
Route::get('/iso_1', [HomeController::class, 'iso_1'])->name('iso_1');
Route::get('/iso_2', [HomeController::class, 'iso_2'])->name('iso_2');
Route::get('/iso_3', [HomeController::class, 'iso_3'])->name('iso_3');
Route::get('/iso_4', [HomeController::class, 'iso_4'])->name('iso_4');
Route::get('/iso_5', [HomeController::class, 'iso_5'])->name('iso_5');
Route::get('/iso_6', [HomeController::class, 'iso_6'])->name('iso_6');
Route::get('/iso_7', [HomeController::class, 'iso_7'])->name('iso_7');
Route::get('/iso_8', [HomeController::class, 'iso_8'])->name('iso_8');

// imo classes::::::::::
Route::get('/imo_1',[HomeController::class, 'imo_1'])->name('imo_1');

// Route::get('/', function () {
//     return view('frontend.index');
// });
// Route::get('/contact', function () {
//     return view('front.contact');
// });


Route::get('/dashboard', [DashboardController::class, 'dashboard'])->middleware(['auth','verified'])->name('dashboard');




// Routes that require authentication
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Permission Routes
    Route::get('permission/index',[PermissionController::class,'index'])->name('permission.index');
    Route::get('permission/create',[PermissionController::class,'create'])->name('permission.create');
    Route::post('permission/store',[PermissionController::class,'store'])->name('permission.store');
    Route::get('permission/edit/{permission}',[PermissionController::class,'edit'])->name('permission.edit');
    Route::post('permission/update/{permission}',[PermissionController::class,'update'])->name('permission.update');
    Route::get('permission/delete/{permission}',[PermissionController::class,'delete'])->name('permission.delete');

    // Role Routes
    Route::get('role/index',[RoleController::class,'index'])->name('role.index');
    Route::get('role/create',[RoleController::class,'create'])->name('role.create');
    Route::post('role/store',[RoleController::class,'store'])->name('role.store');
    Route::get('role/edit/{role}',[RoleController::class,'edit'])->name('role.edit');
    Route::post('role/update/{role}',[RoleController::class,'update'])->name('role.update');
    Route::get('role/delete/{role}',[RoleController::class,'delete'])->name('role.delete');

    // User Routes
    Route::get('user/index',[UserController::class,'index'])->name('user.index');
    Route::get('user/create',[UserController::class,'create'])->name('user.create');
    Route::post('user/store',[UserController::class,'store'])->name('user.store');
    Route::get('user/edit/{user}',[UserController::class,'edit'])->name('user.edit');
    Route::post('user/update/{user}',[UserController::class,'update'])->name('user.update');
    Route::get('user/delete/{user}',[UserController::class,'delete'])->name('user.delete');
    Route::get('/user/permissions/{user}', [UserController::class, 'assignPermissionForm'])->name('user.permission.form');
    Route::post('/user/permissions/{user}', [UserController::class, 'assignPermissionToUser'])->name('user.assign-permission');






});

require __DIR__.'/auth.php';
