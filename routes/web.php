<?php


use App\Http\Controllers\UserController;
use App\Http\Controllers\Home;
use App\Models\Article;
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

Route::get('/',[UserController::class,'index']);
Route::get('/login',[UserController::class,'loginUser'])->name('login');
Route::get('/sign-up',[UserController::class,'signupUser'])->name('signup');

Route::post('/sign-up',[Home::class,'registerUser'])->name('RegisterUser');

