<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reparateur extends Model
{
    use HasFactory;
    public $table = "reparateurs";
    protected $fillable = [
        'nom',
        'prenom',
        'disponiblite',
        'email',
        'telephone',
        'adresse',
        'disponibilite',
        'societe'
        ];
}
