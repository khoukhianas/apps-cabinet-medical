<?php

use App\Http\Controllers\ChartController;
use App\Http\Controllers\GerantLivreController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LivreController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;

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
    return view('acceuil');
})->name('acceuil');
Route::get('/recherche_livre', function () {
    return view('recherche_livre');
})->name('recherche_livre');
Route::get('/propos', function () {
    return view('propos');
})->name('propos');
Route::get('/page', function () {
    return view('page');
})->name('page');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', [HomeController::class, 'home']);
    Route::get('/page', function () {
        return view('page');
    });

    
    Route::group(['middleware'=>'admin'],function(){
        Route::resource('/Location', LocationController::class);
        Route::resource('/Livre', LivreController::class);
        Route::get('/statistique', [ChartController::class, 'index'])->name('statistique');
        Route::resource('/gestion_adherant', UserController::class);
        Route::resource('/gerant/gestion_livre', GerantLivreController::class);
        Route::get('/gerant', function () {
            return view('gerant.acceuil');
        })->name('gerant.acceuil');
    });
    Route::get('/detaille', function () {
        return view('detaillelivre');
    });
    
    
   
    
    
});


Route::get('/detaillelivre/{livre_id}', [HomeController::class, 'afficher'])->name('afficherlivre');
// Route::get('/gerant/gestion_location', function () {
//     return view('gerant.gestion_location');
// })->name('gestion_location');

Route::get('/Livree/create', [HomeController::class, 'create'])->name('create');
Route::get('/Livree', [HomeController::class, 'index'])->name('index');

