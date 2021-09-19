<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materiel extends Model
{
    use HasFactory;
    
    protected $fillable = ["num_serie","codebarre","nom","lot_id","etat","affectation","caracteristiques"];
   
    public function Lot (){ 
        return $this ->belongsTo(Lot::class);
    }
    public function personnels(){
        return $this->belongsTo(Personnel::class,"affectations", "materiel_id", "personnel_id");
    }
}
