<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    use HasFactory;
    protected $fillable = ['nom'];

    public function Marque (){ 
        return $this ->hasMany(Marque::class);
    }
    public function Lot (){ 
        return $this ->hasMany(Lot::class);
    }

}
