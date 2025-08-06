<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BannerController;
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
Route::get('/igko_exam', [HomeController::class, 'igko_exam'])->name('igko_exam');
Route::get('/privacy', [HomeController::class, 'privacy'])->name('privacy');
Route::get('/term',[HomeController::class, 'term'])->name('term');

// iso classes :::::
Route::get('/iso_1', [HomeController::class, 'iso_1'])->name('iso_1');
Route::get('/iso_2', [HomeController::class, 'iso_2'])->name('iso_2');
Route::get('/iso_3', [HomeController::class, 'iso_3'])->name('iso_3');
Route::get('/iso_4', [HomeController::class, 'iso_4'])->name('iso_4');
Route::get('/iso_5', [HomeController::class, 'iso_5'])->name('iso_5');
Route::get('/iso_6', [HomeController::class, 'iso_6'])->name('iso_6');
Route::get('/iso_7', [HomeController::class, 'iso_7'])->name('iso_7');
Route::get('/iso_8', [HomeController::class, 'iso_8'])->name('iso_8');
Route::get('/iso_9', [HomeController::class, 'iso_9'])->name('iso_9');
Route::get('/iso_10', [HomeController::class, 'iso_10'])->name('iso_10');

// imo classes::::::::::
Route::get('/imo_1',[HomeController::class, 'imo_1'])->name('imo_1');
Route::get('/imo_2',[HomeController::class, 'imo_2'])->name('imo_2');
Route::get('/imo_3',[HomeController::class, 'imo_3'])->name('imo_3');
Route::get('/imo_4',[HomeController::class, 'imo_4'])->name('imo_4');
Route::get('/imo_5',[HomeController::class, 'imo_5'])->name('imo_5');
Route::get('/imo_6',[HomeController::class, 'imo_6'])->name('imo_6');
Route::get('/imo_7',[HomeController::class, 'imo_7'])->name('imo_7');
Route::get('/imo_8',[HomeController::class, 'imo_8'])->name('imo_8');
Route::get('/imo_9',[HomeController::class, 'imo_9'])->name('imo_9');
Route::get('/imo_10',[HomeController::class, 'imo_10'])->name('imo_10');

// igko classes::::::::::
Route::get('/igko_1',[HomeController::class, 'igko_1'])->name('igko_1');
Route::get('/igko_2',[HomeController::class, 'igko_2'])->name('igko_2');
Route::get('/igko_3',[HomeController::class, 'igko_3'])->name('igko_3');
Route::get('/igko_4',[HomeController::class, 'igko_4'])->name('igko_4');
Route::get('/igko_5',[HomeController::class, 'igko_5'])->name('igko_5');
Route::get('/igko_6',[HomeController::class, 'igko_6'])->name('igko_6');
Route::get('/igko_7',[HomeController::class, 'igko_7'])->name('igko_7');
Route::get('/igko_8',[HomeController::class, 'igko_8'])->name('igko_8');
Route::get('/igko_9',[HomeController::class, 'igko_9'])->name('igko_9');
Route::get('/igko_10',[HomeController::class, 'igko_10'])->name('igko_10');

// iao classes::::::::::
Route::get('/iao_1',[HomeController::class, 'iao_1'])->name('iao_1');
Route::get('/iao_2',[HomeController::class, 'iao_2'])->name('iao_2');
Route::get('/iao_3',[HomeController::class, 'iao_3'])->name('iao_3');
Route::get('/iao_4',[HomeController::class, 'iao_4'])->name('iao_4');
Route::get('/iao_5',[HomeController::class, 'iao_5'])->name('iao_5');
Route::get('/iao_6',[HomeController::class, 'iao_6'])->name('iao_6');
Route::get('/iao_7',[HomeController::class, 'iao_7'])->name('iao_7');
Route::get('/iao_8',[HomeController::class, 'iao_8'])->name('iao_8');
Route::get('/iao_9',[HomeController::class, 'iao_9'])->name('iao_9');
Route::get('/iao_10',[HomeController::class, 'iao_10'])->name('iao_10');

//
// Route::get('/', function () {
//     return view('frontend.index');
// });
// Route::get('/contact', function () {
//     return view('front.contact');
// });


Route::get('/dashboard', [DashboardController::class, 'dashboard'])->middleware(['auth','verified'])->name('dashboard');

// BACKEND-ROUTES::::::::;
Route::get('/banner/index', [BannerController::class, 'index'])->name('banner.index');
Route::get('/banner/create', [BannerController::class, 'create'])->name('banner.create');
Route::post('/banner/store', [BannerController::class, 'store'])->name('banner.store');
Route::get('/banner/edit', [BannerController::class, 'edit'])->name('banner.edit');
Route::get('/banner/delete', [BannerController::class, 'delete'])->name('banner.delete');


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

    // Note Routes
    Route::get('notes/index',[NoteController::class,'index'])->name('notes.index');
    Route::get('notes/create',[NoteController::class,'create'])->name('notes.create');
    Route::post('notes/store',[NoteController::class,'store'])->name('notes.store');
    Route::get('notes/edit/{note}',[NoteController::class,'edit'])->name('notes.edit');
    Route::post('notes/update/{note}',[NoteController::class,'update'])->name('notes.update');
    Route::get('notes/delete/{note}',[NoteController::class,'destroy'])->name('notes.delete');




});

require __DIR__.'/auth.php';
