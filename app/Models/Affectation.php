<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Affectation extends Model
{
    use HasFactory;
    protected $fillable = ["materiel_id","personnel_id","dateDebut"];
   
    public function Materiel (){ 
        return $this ->belongsTo(Materiel::class);
    }
    
    public function Personnel (){ 
        return $this ->belongsTo(Personnel::class,);
    }
    
}
