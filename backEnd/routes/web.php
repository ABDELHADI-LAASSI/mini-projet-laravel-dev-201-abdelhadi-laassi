<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UtilisatuerController;
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

Route::get("/",[UtilisatuerController::class,'loginView'])->name('loginView');
Route::post("/login",[UtilisatuerController::class,'loginLogic'])->name('login');

Route::get("/logout",[UtilisatuerController::class,'logoutLogic'])->name('logout');

Route::get("/admin",[AdminController::class,'adminV'])->name('adminV');

Route::get("/admin/ajouter",[AdminController::class,'adminAjouterForm'])->name('adminA');

Route::post("/admin/ajouter/poduct",[AdminController::class,'adminAjouterLogic'])->name('ajouterProduct');


Route::get("/admin/Afficher/poduct/{id}",[AdminController::class,'admineAfficherProduitLogic'])->name('AficherProduct');


Route::delete("/admin/supprimer/poduct/{id}",[AdminController::class,'adminDeleteLogic'])->name('supprimerProduct');






