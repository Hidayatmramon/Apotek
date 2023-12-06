<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\MedicineController;
use App\Http\Controllers\UserController;


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

//setelah login, hanya yang admin bisa akes
Route::middleware(['isLogin', 'cekRole:admin,kasir'])->group(function () {
    Route::get('/dashboard', [PageController::class, 'dashboard'])->name('dashboard');
    Route::get('/admin/home', [PageController::class, 'home'])->name('admin.home');
    Route::get('/obat', [MedicineController::class, 'index'])->name('medicine.index');
    Route::get('/obat/create', [MedicineController::class, 'create'])->name('medicine.create');
    Route::get('/obat/edit', [MedicineController::class, 'edit'])->name('medicine.edit');
    Route::get('/obat/delete{id}', [MedicineController::class, 'delete'])->name('medicine.delete');
    Route::get('/user-list', [UserController::class, 'index'])->name('user.index');
}); 
//setelah login hanya user biasa yg bisa aksses
Route::middleware(['isLogin', 'cekRole:user'])->group(function () {
    Route::get('/home', [PageController::class, 'home'])->name('home');
    //Route::get('/student', [StudentController::class, 'index'])->name('student.index');
   // Route::get('tabel/{slug}',[PageController::class, 'detilHari'])->name('detil.hari');
});


//yg bisa akses hanya untuk yg blum login, kalo udah login ga bisa akses
Route::middleware(['isGuest'])->group(function () {
    Route::get('/', [LoginController::class, 'login'])->name('login');
    Route::post('/login/post', [LoginController::class, 'auth'])->name('auth');
});


//logout
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

