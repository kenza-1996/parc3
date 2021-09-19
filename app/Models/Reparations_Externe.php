<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reparations_Externe extends Model
{
    use HasFactory;
    public $table = "reparations_externe";
    protected $fillable = [
        'designation',
        'date_panne',
        'date_sortie',
        'date_retour',
        'etat',
        'structure_id',
        'personnel_id',
        'materiel_id',
        'reparateur_id',
    ];

    public function Reparateur(){
        return $this->belongsTo(Reparateur::class, "reparateur_id" );
        
    }
    public function Materiel(){
        return $this->belongsTo(Materiel::class, "materiel_id" );
    }
    public function Personnel(){
        return $this->belongsTo(Personnel::class, "personnel_id" );
    }
    public function Structure(){
        return $this->belongsTo(Structure::class, "structure_id" );
    }
}
