<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;




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
Route::get('/', [TestController::class, 'index']);/* トップページへのアクセス時に */
Route::post('/contact/confirm', [TestController::class, 'confirm']);
/*　　入力された内容を確認画面に渡す処理 */
Route::post('/contact/store', [TestController::class, 'store']);
/* 確認画面からの保存処理を担うルート */
Route::get('/thanks', [TestController::class, 'thanks']);
/* 保存処理が成功した後の完了画面の表示 */


/* Route::get('/show/{id})', [::class, 'show']);
ID,を指定して、特定のお問い合わせ内容を表示するページ
あとでControllerを指定する */


