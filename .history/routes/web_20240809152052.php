<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\Direksi\BerandaController as DireksiBerandaController;
use App\Http\Controllers\Karyawan\BerandaController as KaryawanBerandaController;
use App\Http\Controllers\Kasir\BerandaController as KasirBerandaController;
use App\Http\Controllers\PanggilController;
use App\Http\Controllers\EdulevelController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;
use App\Models\Edulevel;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application.
| These routes are loaded by the RouteServiceProvider within a group
| which contains the "web" middleware group. Now create something great!
|
*/

// Rute untuk halaman utama
Route::get('/', function () {
    return view('auth/login');
});

// Rute untuk halaman surat
Route::get('buatsurat', function () {
    return view('page/isisurat');
});

Route::get('surat', function () {
    return view('page/surat');
});

Route::get('offering', function () {
    return view('page/offering');
});

Route::get('sponsor', function () {
    return view('page/sponsor');
});

Route::get('tugas', function () {
    return view('page/tugas');
});

Route::get('daftarsurat', function () {
    return view('page/daftarsurat');
});


Route::get('dashboard', function () {
    return view('dashboard');
});

Route::get('index', function () {
    return view('page/index');
});

Route::get('/', function () {
    return view('welcome');
});

// Rute untuk PanggilController
Route::get('homeindex', [PanggilController::class, 'HomeIndex']);
Route::post('dataInsert', [PanggilController::class, 'DataInsert']);


// Rute untuk EdulevelController
Route::get('isisurat', [EdulevelController::class, 'data']);
Route::get('index', [EdulevelController::class, 'index']);
Route::get('ceksurat', [EdulevelController::class, 'ceksurat']);
Route::post('postsurat', [EdulevelController::class, 'postsurat'])->name('postsurat');
Route::get('show/{id}', [EdulevelController::class, 'show'])->name('show');
Route::get('showsurat/{id}', [EdulevelController::class, 'showsurat'])->name('showsurat');

// Rute untuk BerandaController
Route::get('suratoffering', [BerandaController::class, 'suratoffering'])->name('suratoffering');
Route::get('offering', [BerandaController::class, 'suratoffering'])->name('offering');
Route::get('suratsponsorship', [BerandaController::class, 'suratsponsorship'])->name('suratsponsorship');
Route::get('sponsor', [BerandaController::class, 'suratsponsorship'])->name('sponsor');
Route::get('suratketerangankerja', [BerandaController::class, 'surat_keterangan_kerja']);


Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'registerSave'])->name('register.save');
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'loginAction'])->name('login.action');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


Route::controller(AuthController::class)->group(function () {
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerSave')->name('register.save');

    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAction')->name('login.action');
 
    Route::get('logout', 'logout')->middleware('auth')->name('logout');
});

//Normal Users Routes List
Route::middleware(['auth', 'user-access:user'])->group(function () {
    Route::get('dashboard', [HomeController::class, 'index'])->name('dashboard');
});

