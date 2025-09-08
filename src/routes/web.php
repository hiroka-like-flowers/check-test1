<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\CategoryController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', [TestController::class, 'index']);
Route::post('/confirm', [TestController::class, 'confirm']);
Route::post('/thanks', [TestController::class, 'store']);
Route::get('/register', [RegisterController::class, 'create'])->name('register.create');
Route::post('/register',[RegisterController::class, 'store'])->name('register.store');
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::get('/admin', function () {
    return view('admin.dashboard');
})->middleware('auth');
Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');

