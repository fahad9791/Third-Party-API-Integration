<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

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
    return view('welcome');
});

Route::get('/getData', [PagesController::class, 'getData'])->name('getData');
Route::get('/wrongUrl', [PagesController::class, 'wrongUrl'])->name('wrongUrl');
Route::get('/postView/{id}', [PagesController::class, 'postView'])->name('postView');
Route::get('/insertData', [PagesController::class, 'insertData'])->name('insertData');
Route::post('/insertDataSubmit', [PagesController::class, 'insertDataSubmit'])->name('insertDataSubmit');
