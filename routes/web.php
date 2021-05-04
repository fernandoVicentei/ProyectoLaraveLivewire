<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\User;
use App\Http\Livewire\Redessoci;
use App\Http\Livewire\Archivote;
use App\Http\Livewire\PerfilVista;
use App\Http\Livewire\PerfilAdmin;
use App\Http\Livewire\Articulo;
use App\Http\Controllers\PersonaArchivo;
use App\Http\Livewire\Aboutus;
use App\Http\Livewire\Contactus;
use App\Http\Livewire\Empresaconfig;


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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard',PerfilAdmin::class, function () {
    return view('livewire.dash');
})->name('dashboard');

Route::get('/regispersona',function(){
    return view('regispersona');
});
Route::middleware(['auth:sanctum', 'verified'])->get('/user',User::class, function () {
    return view('livewire.user');
})->name('user');
Route::middleware(['auth:sanctum', 'verified'])->get('/redes',Redessoci::class, function () {
    return view('livewire.redes');
})->name('redes');
Route::middleware(['auth:sanctum', 'verified'])->get('/archivo',Archivote::class, function () {
    return view('livewire.archivo');
})->name('archivo');
Route::middleware(['auth:sanctum', 'verified'])->get('/perfilvista',PerfilVista::class, function () {
    return view('livewire.perfilvista');
})->name('perfilvista');
Route::middleware(['auth:sanctum', 'verified'])->get('/perfiladmin',PerfilAdmin::class, function () {
    return view('livewire.perfiladmin');
})->name('perfiladmin');
Route::middleware(['auth:sanctum', 'verified'])->get('/articulo',Articulo::class, function () {
    return view('livewire.articulo');
})->name('articulo');
Route::middleware(['auth:sanctum', 'verified'])->get('/aboutus',Aboutus::class, function () {
    return view('livewire.aboutus');
})->name('aboutus');
Route::middleware(['auth:sanctum', 'verified'])->get('/contactus',Contactus::class, function () {
    return view('livewire.contactus');
})->name('contactus');
Route::middleware(['auth:sanctum', 'verified'])->get('/empresa',Empresaconfig::class, function () {
    return view('livewire.empresa');
})->name('empresa');
/* Route::get('/user',User::class)->name('user');
Route::get('/redes',Redessoci::class)->name('redes');
Route::get('/archivo',Archivote::class)->name('archivo');
Route::get('/perfilvista',PerfilVista::class)->name('perfilvista');
Route::get('/perfiladmin',PerfilAdmin::class)->name('perfiladmin');
Route::get('/articulo',Articulo::class)->name('articulo');
// Preuba de consulta - Route::resource('persona',PersonaArchivo::class);
Route::get('/aboutus',Aboutus::class)->name('aboutus');
Route::get('/contactus',Contactus::class)->name('contactus');
Route::get('/empresa',Empresaconfig::class)->name('empresa'); */
