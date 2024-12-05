<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TableController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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



Route::post("/login",function(){
    return view('pages.login');
});

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::post('/register', [AuthController::class, 'signup'])->name('register.store');
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/loginCheck', [AuthController::class, 'loginCheck'])->name('loginCheck');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/contact', function () {
    return view('pages.contact');
});
Route::get('/table-reservation', [TableController::class, 'tableReservation'])->name('table.reservation');


Route::get('/register', [AuthController::class, 'index']);
Route::get('/dashboard',[DashboardController::class,'index'])->name('admin');
Route::get('/dashboard/user-list', [DashboardController::class, 'userlist'])->name('user.list');
Route::get('/dashboard/user-delete/{id}', [DashboardController::class, 'userDelete'])->name('user.delete');
Route::get('/dashboard/table-list', [TableController::class, 'index'])->name('table.list');
Route::get('/dashboard/table-create', [TableController::class, 'TableCreate'])->name('table.create');
Route::post('/table-reservation', [TableController::class, 'reservationStore'])->name('reservation.store');
