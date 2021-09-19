<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReparateurController extends Controller
{
    public function index(){
        return view("reparateurs");
    }

}
