<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;




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
Route::get('register', [RegisterController::class, 'shoeRegistrationForm'])->name('register');
Route::post('register',[Register::class, 'register']);
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LogoutController::class< 'logout'])->name('logout');
Route::Group(['prefix' => 'contact','middleware' => 'auth'],function(){
    Route::get('register','ContactFormController@index')->name('contact.register');
    Route::get('create','ContactFormController@create')->name('contact.create');
});


