<<<<<<< HEAD
<?php 
 
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route; 
use App\Http\Controllers\HomeController; 
 
 
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
 
Route::get('/', function () { 
    return view('auth.login'); 
}); 
Route::get('/kamar', function () { 
    return view('kamar'); 
});
Route::get('/fasilitas', function () { 
    return view('fasilitas'); 
});
 
Auth::routes(); 
 
 
Route::get('/home', [HomeController::class, 'index'])->name('home');
=======
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KamarController;
use App\Http\Controllers\FasilitasUmumController;
use App\Http\Controllers\FasilitasKamarController;


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

Route::get('/', function () {
    return view('auth.login');
});
Route::get('/home', function () {
    return view('home');
});

Auth::routes();




// ROUTE ADMIN
Route::get('/dashboard', function () {
    return view('admin.dashboard');
});
Route::get('/kamar', [KamarController::class, 'index'])->name('kamar');
Route::get('/fasilitaskamar', [FasilitasKamarController::class, 'index'])->name('fasilitaskamar');
Route::get('/fasilitasumum', [FasilitasUmumController::class, 'index'])->name('fasilitasumum');
>>>>>>> 9c9b3e0d3de3f6eb440779bb4e119ccf3cf6dd7e
