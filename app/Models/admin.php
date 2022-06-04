<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class admin extends Model
{
    use HasFactory;
    protected $fillable = [ "Nom_Prenom", "email", "Mot_de_passe","created_at","updated_at"  ];
    
}
