<?php

namespace App\Http\Controllers;

use App\Models\Marque;
use Illuminate\Http\Request;

class MarqueController extends Controller
{
    public function index()
    {
    
        $marques = Marque::all() ->sortBy('nom');
       
        return view("livewire.commandes.index", compact('marques'));
    }
}
