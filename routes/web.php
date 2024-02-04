<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LeaderController;
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

// Route::get('/', function () {
//     return view('navbarlogin.dashboard', ['title' => 'Home']);
// })->name('home');


Route::post('/leader-post', [LeaderController::class, 'LeaderPost']);

Route::get('register', [UserController::class, 'register'])->name('register');
Route::post('register/action', [UserController::class, 'register_action'])->name('register.action');
Route::get('login', [UserController::class, 'login'])->name('login');
Route::post('login', [UserController::class, 'login_action'])->name('login.action');
Route::get('password', [UserController::class, 'password'])->name('password');
Route::post('/logout', [UserController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard/{group_name}', [DashboardController::class, 'index'])->name('dashboard');
});

// Admin routeapp
// Route::prefix('/admin')->group(function(){
//     Route::get('/', [AdminController::class, 'lists'])->name('admin.home');
// });
Route::get('/admin', [AdminController::class, 'showAllData'])->name('all-data');
Route::get('/admin/search', [AdminController::class, 'search'])->name('admin.search');
Route::get('/user/{id}/edit', [AdminController::class, 'edit'])->name('user.edit');
Route::delete('/user/{id}/delete', [AdminController::class, 'delete'])->name('user.delete');
Route::put('/user/update/{id}', [AdminController::class, 'update'])->name('user.update');


Route::get('/timeline', function () {
    return view('pages.timeline');
})->name('timeline');

Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::get('/loginmember', function () {
    return view('user.login');
})->name('loginmembers');

Route::get('/loginchoose', function () {
    return view('user.loginas');
})->name('loginchoose');

Route::get('/loginadmin', function () {
    return view('user.loginasadmin');
})->name('loginadmins');

Route::post('/admin/login', [AdminController::class, 'login'])->name('admin.login');
