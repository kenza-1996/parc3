<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personnel extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'prenom',
      
        'email',
       
        
        'matricule',
        'num_bureau',
        'structure_id',
        
        
    ];

    public function Structure(){
        return $this->belongsTo(Structure::class);
    }
   
    public function materiels(){
        return $this->hasMany(Materiel::class,"affectations", "personnel_id", "materiel_id");
    }
}