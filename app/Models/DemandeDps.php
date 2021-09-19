<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DemandeDps extends Model
{
    use HasFactory;
    public $table = "dpsdemandes";
    protected $fillable = ['num_dps', 'date','materiel1','materiel2' ,'materiel3','traiter' ];
  

    public function materiel(){ 
        return $this ->belongsToMany(Materiel::class,'materiel1');
    }
   
  

}
