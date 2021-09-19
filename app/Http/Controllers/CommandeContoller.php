<?php

namespace App\Http\Controllers;

use App\Models\BonComandes;
use Illuminate\Http\Request;

class CommandeContoller extends Controller
{
    public function index()
    {
    
        $commande = BonComandes::all() ->sortBy('num_boncom');
       
        return view("commandes.index", compact('structures'))
        ->extends("layouts.master")
        ->section("contenu");
    }
}
