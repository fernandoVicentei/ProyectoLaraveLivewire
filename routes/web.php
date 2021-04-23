<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\User;
use App\Http\Livewire\Redessoci;
use App\Http\Livewire\Archivote;
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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/user',User::class)->name('user');
Route::get('/redes',Redessoci::class)->name('redes');
Route::get('/archivo',Archivote::class)->name('archivo');