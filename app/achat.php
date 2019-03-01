<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\Controller;
use App\article;
use App\achat;
use App\achat_article;



class achat extends Model
{
    protected $fillable = [
        'type_vente', 'mode_paiement', 'date_paiement', 'date_commande', 'date_livraison', 'statut_paiement', 'date_jour', 'id_client'
    ];

    public function client() 
    {
        // Un achat appartient à un client
        return $this->hasOne(client::class);
    }

    public function article() 
    {
    // Un achat appartient à plusieurs articles
    return $this->belongToMany(article::class);
    }
}
