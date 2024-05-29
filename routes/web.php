<?php

use App\Http\Controllers\AbroadController;
use App\Http\Controllers\AbroadwantController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DiseaseController;
use App\Http\Controllers\EmpoymentController;
use App\Http\Controllers\FamilyController;
use App\Http\Controllers\GreatController;
use App\Http\Controllers\HouseController;
use App\Http\Controllers\InspectorController;
use App\Http\Controllers\NeighborhoodController;
use App\Http\Controllers\NotebookController;
use App\Http\Controllers\StreetController;
use App\Http\Controllers\WarController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [AuthController::class,'login'])->name('login');
Route::post('/check', [AuthController::class, 'check'])->name('check');

Route::middleware('auth')->group(function () {
    Route::get('/home', function () {
        return view('home');
    })->name('homepage');

    Route::get('/back', [StreetController::class, 'back'])->name('back');
    Route::get('/backhouse', [HouseController::class, 'backhouse'])->name('backhouse');
    Route::get('/houses/{family}/back', [FamilyController::class, 'backfamily'])->name('backfamily');
    Route::get('/families/{id}/create', [FamilyController::class, 'create'])->name('famcreate');
    Route::get('/houses/{id}/item', [HouseController::class, 'houseshow'])->name('houseshow');
    Route::get('/search', [AbroadwantController::class, 'search'])->name('search');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::resources([
        'streets' => StreetController::class,
        'houses' => HouseController::class,
        'families' => FamilyController::class,
        'populations' => FamilyController::class,
        'neighborhoods' => NeighborhoodController::class,
        'abroads' => AbroadController::class,
        'notebooks' => NotebookController::class,
        'abroadwants' => AbroadwantController::class,
        'inspectors' => InspectorController::class,
        'wars' => WarController::class,
        'greats' => GreatController::class,
        'empoyments' => EmpoymentController::class,
        'diseases' => DiseaseController::class,
    ]);

});
