<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReparationInterne extends Model
{
    use HasFactory;
   
    protected $fillable = [
        'actesExecutes',
        'datePanne',
        'dateIntervention',
        'observations',
        'materiel_id',
        
    ];
    public function Materiel(){
        return $this->belongsTo(Materiel::class, "materiel_id" );
    }
}
