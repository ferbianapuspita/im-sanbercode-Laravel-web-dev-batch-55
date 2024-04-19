<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CastController;

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

Route::get('/', [DashboardController::class, 'utama']);


Route::get('/register', [DashboardController::class, 'daftar']);

Route::post('/welcome', [DashboardController::class, 'welcome']);

Route::get('/data-table', function(){
    return view('page.data-table');
});

Route::get('/table', function(){
    return view('page.table');
});

// CRUD Cast

// Tambah Cast (C => Create Data)
//untuk mengarah keform tambah cast
Route::get('/cast/create', [CastController::class, 'create']);
//untuk memasukkan inputan ke db table category
Route::post('/cast', [CastController::class, 'store']);

//Read cast (R => Read Data)
//Untuk menampilkan semua cast
Route::get('/cast', [CastController::class, 'index']);
//untuk menampilkan detail cast berdasarkan id
Route::get('/cast/{id}', [CastController::class, 'show']);

//Update cast (U => Update Data)
// untuk mengarah ke form edit cast berdasarkan 
Route::get('/cast/{id}/edit', [CastController::class, 'edit']);
// untuk fungsi update data berdasarkan id
Route::put('/cast/{id}', [CastController::class, 'update']);

//Delete Cast (D => Delete Data)
//fungsi delete berdasarkan parameter id
Route::delete('cast/{id}', [CastController::class, 'destroy']);
