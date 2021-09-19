<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BonComandes extends Model
{
    use HasFactory;
    public $table = "bon_commandes";
    protected $fillable = ['num_boncom','materiel1','materiel2','materiel3', 'prix1', 'prix2' ,'prix3','ht','ttc', 'tva','reparateur_id','dpsdemande_id','structure1','structure2','structure3' ];

    public function dpsdemande(){ 
        return $this ->belongsTo(DemandeDps::class);

    }
    public function reparateur(){ 
        return $this ->belongsTo(Reparateur::class);
    }
    public function structure(){ 
        return $this ->belongsToMany(Structure::class, 'structure1');
    }
    public function materiel(){ 
        return $this ->belongsToMany(Materiel::class,'materiel1');
    }
   
}
