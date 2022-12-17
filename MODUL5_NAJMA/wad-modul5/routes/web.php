<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FirstPageController;
use App\Http\Controllers\HomePageController;

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

// //ubah arah navbar
// Route::get('/', [FirstPageController::class, 'FirstPage']);
// Route::get('/login', [FirstPageController::class, 'LoginPage'])->name('LoginPage');

Route::get('/', function () {
    return view('firstpage');
});

Route::get('/register', [FirstPageController::class, 'RegisterPage']);
Route::get('/login', [FirstPageController::class, 'LoginPage']);

Route::post('/register', [FirstPageController::class, 'Register']);
Route::post('/login', [FirstPageController::class, 'Login']);

Route::get('/homepage', [HomePageController::class, 'HomePage']);
Route::get('/addcar', [HomePageController::class, 'AddCarPage']);
Route::get('/mycarpage', [HomePageController::class, 'MyCar']);
Route::get('/profilepage', [HomePageController::class, 'ProfilePage']);

Route::post('/addcar', [HomePageController::class, 'AddCar']);

Route::get('/mycar', [CarController::class, 'MyCar']);
