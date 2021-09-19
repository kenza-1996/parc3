<?php

use App\Http\Controllers\CommandeContoller;
use App\Http\Controllers\CommandesContoller;
use App\Http\Controllers\DynamicPDFController;
use App\Http\Controllers\UserController;
use App\Http\Livewire\Affectations;
use App\Http\Livewire\Demandes;
use App\Http\Livewire\Categories;
use App\Http\Livewire\Comandes;
use App\Http\Livewire\Lots;
use App\Http\Livewire\Marques;
use App\Http\Livewire\Materiels;
use App\Http\Livewire\Personnels;
use App\Http\Livewire\Reparateurs;
use App\Http\Livewire\ReparationExterne;
use App\Http\Livewire\ReparationInternes;
use App\Http\Livewire\Structures;
use App\Http\Livewire\Utilisateurs;
use App\Models\Article;
use App\Models\Reparations_Externe;
use App\Models\TypeArticle;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::group(
    [
        "middleware" => ["auth"]
    ],
    function(){

        Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
        Route::get('/generate_pdf', [App\Http\Controllers\DynamicPDFController::class, 'generatePDF'])->name('livewire.commandes.boncommand');
// Le groupe des routes relatives aux administrateurs uniquement
Route::group([
    "middleware" => [ "auth.admin"],
    'as' => 'admin.'
], function(){

    Route::group([
        "prefix" => "habilitations",
        'as' => 'habilitations.'
    ], function(){

        Route::get("/utilisateurs", Utilisateurs::class)->name("users.index");
        //Route::get("/rolesetpermissions", [UserController::class, "index"])->name("rolespermissions.index");
        //

    });
    Route::group([
        "prefix" => "Materiels",
        'as' => 'Materiels.'
    ], function(){
        Route::get("/materiels", Materiels::class)->name("materiels.index");
        Route::get("/affectations", Affectations::class)->name("affectations.index");
        Route::get("/lots", Lots::class)->name("lots.index");
        Route::get("/categories", Categories::class)->name("categories.index");
        Route::get("/marques", Marques::class)->name("marques.index");
        
        //Route::get("/rolesetpermissions", [UserController::class, "index"])->name("rolespermissions.index");
        //

    });

    Route::group([
        "prefix" => "Demandes",
        'as' => 'Demandes.'
    ], function(){

        Route::get("/demande", Demandes::class)->name("demande.index");
        Route::get('/demande/pdf', [DemandeController::class, 'createPDF']);
        //Route::get("/rolesetpermissions", [UserController::class, "index"])->name("rolespermissions.index");
        //

    });
   
    Route::get("/affectations", Affectations::class)->name("affectations.index");
    Route::get("/reparationInternes", ReparationInternes::class)->name("reparationInternes.index");



    Route::group([
        "prefix" => "Personnels",
        'as' => 'Personnels.'
    ], function(){

        Route::get("/personnels", Personnels::class)->name("personnels.index");
        //Route::get("/rolesetpermissions", [UserController::class, "index"])->name("rolespermissions.index");
        //

    });
   
    Route::group([
        "prefix" => "Structures",
        'as' => 'Structures.'
    ], function(){

        Route::get("/structures", Structures::class)->name("structures.index");
        //Route::get("/rolesetpermissions", [UserController::class, "index"])->name("rolespermissions.index");
        //

    });

});
Route::group([
    "middleware" => [ "auth.admin-sag"],
    'as' => 'admin-sag.'
],


    
   
function(){

    Route::group([
        "prefix" => "Reparateurs",
        'as' => 'Reparateurs.'
    ], function(){

        Route::get("/reparateurs", Reparateurs::class)->name("reparateurs.index");
      
        

    });
    Route::group([
        "prefix" => "Reparation",
        'as' => 'Reparation.'
    ], function(){

        Route::get("/reparations", ReparationExterne::class)->name("reparations.index");
      
        

    });
    Route::group([
        "prefix" => "Bondecomande",
        'as' => 'Bondecomande.'
    ], function(){

        Route::get("/commandes", Comandes::class)->name("commandes.index");
       
       
      
       
      
      
        

    });
  
});

});
