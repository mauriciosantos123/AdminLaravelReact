<?php

use App\Http\Controllers\CategoryOrderPaymentController;
use App\Http\Controllers\CategoryPortfolioController;
use App\Http\Controllers\CategoryServiceController;
use App\Http\Controllers\ClientController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FinanceiroController;
use App\Http\Controllers\ForgotController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ManutenceServiceController;
use App\Http\Controllers\PortifolioController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\UserController;

use Inertia\Inertia;

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

Route::resource('user', UserController::class);
Route::resource('contact', ContactController::class);
Route::resource('dashboard', DashboardController::class);
Route::resource('forgot', ForgotController::class);
Route::resource('home', HomeController::class);
Route::resource('portifolio', PortifolioController::class);
Route::resource('post', PostController::class);

Route::resource('client', ClientController::class);
Route::resource('financeiro', FinanceiroController::class);
Route::resource('service', ServiceController::class);
Route::resource('categoryPortfolio', CategoryPortfolioController::class);
Route::resource('categoryService', CategoryServiceController::class);
Route::resource('categoryOrder', CategoryOrderPaymentController::class);
Route::resource('manutenceService', ManutenceServiceController::class);

Route::resource('login', LoginController::class);
Route::resource('register', RegisterController::class);





Route::any('client/{id}/read', [ClientController::class, 'read'])->name('clientRead');

Route::any('finaceiro/{id}/read', [FinanceiroController::class, 'read'])->name('finaceiroRead');

Route::any('service/{id}/read', [ServiceController::class, 'read'])->name('serviceRead');

Route::any('portifolio/{id}/read', [PortifolioController::class, 'read'])->name('portifolioRead');

Route::any('manutenceService/{id}/read', [ManutenceServiceController::class, 'read'])->name('manutenceServiceRead');

Route::any('client/{id}/activation', [ClientController::class, 'activation'])->name('clientActivation');


Route::redirect('/', 'home');
Route::view('/welcome', 'welcome');
