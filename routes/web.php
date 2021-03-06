<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LeadController;
use App\Http\Controllers\MainController;

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

Route::get('/auth', [MainController::class, 'auth']);
Route::post('/create', [LeadController::class, 'create']);
Route::get('/', [LeadController::class, 'listLead']);
