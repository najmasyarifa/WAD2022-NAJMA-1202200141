<?php
use App\Models\Users;
use App\Models\Showrooms;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FirstPageController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ShowroomsController;
use Illuminate\Routing\Route as RoutingRoute;

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

Route::get('/login', [FirstPageController::class, 'LoginPage'])->name('LoginPage');
Route::get('/register', [FirstPageController::class, 'RegisterPage'])->name('RegisterPage');
Route::post('/login', [FirstPageController::class, 'UserLogin'])->name('UserLogin');
