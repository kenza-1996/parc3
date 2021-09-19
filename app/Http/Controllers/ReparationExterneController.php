<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReparationExterneController extends Controller
{
    public function index(){
        return view("reparations_externe");
    }
}
