<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [PagesController::class, 'home'])->name('home');

Route::get('/sejarah', [PagesController::class, 'sejarah'])->name('sejarah');

Route::get('/awards', [PagesController::class, 'awards'])->name('awards');

Route::get('/visimisi', [PagesController::class, 'visimisi'])->name('visimisi');

Route::get('/penumpang', [PagesController::class, 'penumpang'])->name('penumpang');

Route::get('/pertanian', [PagesController::class, 'pertanian'])->name('pertanian');

Route::get('/niaga', [PagesController::class, 'niaga'])->name('niaga');

Route::get('/contact', [PagesController::class, 'contact'])->name('contact');

Route::get('Shop/Shop', [PagesController::class, 'Shop'])->name('Shop');

Route::get('Shop/detailshop', [PagesController::class, 'detail'])->name('detail');

Route::get('Admin/login', [PagesController::class, 'login'])->name('login');

Route::post('Admin/login', [PagesController::class, 'login'])->name('login');

Route::post('Admin/login', [PagesController::class, 'login'])->name('formsubmit');

Route::get('Admin/admin', [PagesController::class, 'admin'])->name('admin');