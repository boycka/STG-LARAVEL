<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdministrateurController;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\ProfesseurController;
use App\Models\Etudiant;
use GuzzleHttp\Middleware;

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

// first page
Route::get('/Welcome', function () {
    return view('welcome');
});


Route::group(['Middleware' => 'Admin'],function(){
    Route::get('/Admin', function () {
        return view('Admin.index');
    });
});


Route::group(['Middleware' => 'Etudiant'],function(){
    Route::get('/Etudiant', function () {
        return view('Etudiant.index');
    });
});


Route::group(['Middleware' => 'Professeur'],function(){
    Route::get('/Professeur', function () {
        return view('Professeur.index');
    });
});











// Route::get('/login',function () {
//     return view('login');
// });



// Route::get('Admin/text',function () {
//     return view('Admin.show');
// });



// // Admin:Index;Etudiant;Profe
// Route::get('/Admin',function () {
//     return view('Admin.index');
// });

// Route::get('Admin/Etudiant',function () {
//     return view('Admin.Etudiant');
// });

// Route::get('Admin/Professeur',function () {
//     return view('Admin.Professeur');
// });


// // Etudiant
// Route::get('Etudiant/Rclamer',function () {
//     return view('Etudiant.index');
// });
// Route::get('Etudiant/Form',function () {
//     return view('Etudiant.create');
// });

// Route::get('Etudiant/text',function () {
//     return view('Etudiant.show');
// });

// Route::get('Etudaint/modif',function () {
//     return view('Etudiant.edit');
// });

// Route::get('Etud/Acc',function () {
//     return view('Etudiant.Accepte');
// });

// Route::get('Etud/Reje',function () {
//     return view('Etudiant.Rejeter');
// });




// // Professeur

// Route::get('Prof/Rclamer',function () {
//     return view('Professeur.index');
// });
// Route::get('Prof/Form',function () {
//     return view('Professeur.create');
// });

// Route::get('Prof/text',function () {
//     return view('Professeur.show');
// });

// Route::get('Prof/modif',function () {
//     return view('Professeur.edit');
// });

// Route::get('Prof/Acc',function () {
//     return view('Professeur.Accepte');
// });

// Route::get('Prof/Reje',function () {
//     return view('Professeur.Rejeter');
// });









// Route::get('/logProf',function () {
//     return view('Professeur.index');
// });






// -----------------------------------------------------------------------------------------------
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__.'/auth.php';

// --------------------------------------------------------------------------------------------------------

// Route::middleware('auth')->group(function () {
//     Route::get('/Prof', [ProfesseurController::class, 'index']);
//     Route::get('/Etud', [EtudiantController::class, 'index']);
//     Route::get('/Admin', [AdministrateurController::class, 'index']);
// });



