<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdministrateurController;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\ProfesseurController;
use App\Http\Controllers\Auth\ImportController;


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

// Route::get('/Admin', function () {
//     return view('Admin.index');
// })->middleware(['auth', 'Adminmd:Admin']);


// Route::get('/Etudiant', function () {
//     return view('Etudiant.index');
// })->middleware(['auth', 'Etudiantmd:Etudiant']);


// Route::get('/Professeur', function () {
//     return view('Professeur.index');
// })->middleware(['auth', 'Professeurmd:Professeur']);



Route::resource('/Admin', AdministrateurController::class)->middleware(['auth','checkRole:Admin']);

Route::resource('/Etudiant', EtudiantController::class)->middleware(['auth','checkRole:Etudiant']);

Route::resource('/Professeur', ProfesseurController::class)->middleware(['auth','checkRole:Professeur']);




Route::get('/login', function () {
    return view('login');
});


Route::get('/Admin', function () {
    return view('Admin.Etudiant');
});


// Excel makhdaaaaaaaamch
Route::get('Admin/Etudiant', 'ImportController@show' );
Route::post('Admin/Etudiant', 'ImportController@import');









// Route::middleware('Admin')->group(function () {
//     Route::get('/Admin', function () {
//         return view('Admin.index');
//     });
// });

// Route::middleware('Etudiant')->group(function () {
//     Route::get('/Etudiant', function () {
//         return view('Etudiant.index');
//     });
// });

// Route::middleware('Professeur')->group(function () {
//     Route::get('/Professeur', function () {
//         return view('Professeur.index');
//     });
// });





// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__.'/auth.php';
