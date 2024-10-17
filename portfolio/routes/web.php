<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortFolioController;

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

Route::get('/', [PortFolioController::class, 'accueil']);
Route::get('/resume', [PortFolioController::class, 'resume']);
Route::get('/portfolio', [PortFolioController::class, 'portfolio']);
Route::get('/contact', [PortFolioController::class, 'contact']);

Route::post('/contactInfo', [PortFolioController::class, 'contactForm']);

