<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\Controller;

class client extends Model
{
    protected $fillable = [
        'nom', 'prenom', 'raison_sociale', 'numero_rue', 'rue', 'ville', 'code_postal', 'age', 'sexe', 'mail', 'tel_fixe', 'tel_mobile'
    ];

    public function achat() 
    {
        // Un client appartient à un ou plusieurs achats
        return $this->belongsToMany(achat::class);
    }
}
