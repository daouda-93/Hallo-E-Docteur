<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\DocteurController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SpecialiteController;
use App\Http\Controllers\AuthentificationController;
use App\Http\Controllers\RendezvousController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\WelcomeController;
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


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/admin', function () {
    return view('admin');
});


Route::get('/logout',[AuthController::class, 'logout'] )->name('logout');


Route::get('welcome', [WelcomeController::class, 'index'])->name('welcome');

Route::resource('patients', PatientController::class);
Route::get('supprimer-patients/{id}', [DocteurController::class, 'destroy']);

Route::resource('docteurs', DocteurController::class);
Route::get('supprimer-docteurs/{id}', [DocteurController::class, 'destroy']);

Route::resource('services',ServiceController::class);
Route::get('supprimer-services/{id}', [ServiceController::class, 'destroy']);

Route::resource('specialites', SpecialiteController::class);

Route::delete('logoutadmin',[AuthentificationController::class, 'logoutadmin'] )->name('logoutadmin');

Route::get('supprimer-specialites/{id}', [SpecialiteController::class, 'destroy']);

Route::resource('apropos', AproposController::class);



Route::resource('rendezvous', RendezvousController::class);
Route::get('supprimer-rendezvous/{id}', [RendezvousController::class, 'destroy']);

Route::resource('roles', RolesController::class);
Route::get('supprimer-roles/{id}', [RolesController::class, 'destroy']);





Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
