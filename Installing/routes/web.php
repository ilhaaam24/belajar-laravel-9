<?php
use App\Http\Controllers\HalamanController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Route;

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
Route::resource('siswa', SiswaController::class);
Route::get('/', [HalamanController::class, 'index']); 
Route::get('/about', [HalamanController::class, 'about']); 
Route::get('/contact', [HalamanController::class, 'contact']); 
Route::get('/sesi', [SessionController::class, 'index']);
Route::post('/sesi/login', [SessionController::class, 'login']);
Route::get('/sesi/logout', [SessionController::class, 'logout']);

Route::get('sesi/register',[SessionController::class, 'register']);
Route::post('/sesi/create', [SessionController::class, 'create']);