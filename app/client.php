<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class client extends Model
{
    protected $fillable = [
        'nom', 'prenom', 'raison_sociale', 'numero_rue', 'rue', 'ville', 'code_postal', 'age', 'sexe', 'mail', 'tel_fixe', 'tel_mobile'
    ];
}
