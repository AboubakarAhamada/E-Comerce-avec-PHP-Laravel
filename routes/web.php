<?php

use App\Http\Controllers\PanierController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Shop\MainController;

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

//Route::get('/', function () {
//    return view('welcome');
//});

//Route::resource('/',MainController::class); // C'est pour toutes ressources (get,post,delete,put,etc)

Route::get('/',[MainController::class,'index']);
Route::get('produit/{id}',[MainController::class,'voirProduit']);
Route::get('categorie/{id}',[MainController::class,'voirParCategorie']);

Route::get('panier', [PanierController::class, 'index'])->name('panier_index');
Route::post('panier/add/{id}', [PanierController::class, 'add'])->name('panier_add');


