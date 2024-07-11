<?php
use App\Http\Controllers\HalamanController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/{siswa}', function ($siswa) {
//     return "<h1>Halo nama saya $siswa</h1>";
// })->where('siswa', '[A-Za-z]+');

Route::get("siswa", [SiswaController::class,'index']);
Route::get("siswa/{id}", [SiswaController::class,'detail']);

Route::get('/', [HalamanController::class, 'index']); 
Route::get('/about', [HalamanController::class, 'about']); 
Route::get('/contact', [HalamanController::class, 'contact']); 