<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\achat;
use App\achat_article;
use App\client;
use App\article;

class venteRestController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $client = client::all();
        $article = article::all();

        return view('venteRest', ['client'=>$client, 'article'=>$article] );
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $client = client::all();
        $articles = article::all();

        
        $achat = new achat;
        $achat->id_client = $request->input('Nom');
        $achat->id_article = $request->input('nomArticle');
        $achat->type_vente = $request->input('type');
        $achat->mode_paiement = $request->input('mode_paiement');
        $achat->date_paiement = $request->input('date_paiement');
        $achat->date_commande = $request->input('date_commande');
        $achat->date_livraison = $request->input('date_livraison');
        $achat->statut_paiement = $request->input('statut_paiement');
        $achat->date_jour = $request->input('date_jour');      
        $achat->save();
        
        
        // die( " " . $achat->id );
        
        // $achats= achat::orderby('created_at', 'desc')->first();
        $article= $request->input('nomArticle');

        $achat_article = new achat_article;
        $achat_article->fk_achat = $achat->id;
        $achat_article->fk_article = $article;

        $achat_article->quantite = $request->input('quantite');
        $achat_article->remise_forfaitaire = $request->input('remise_forfaitaire');        
        $achat_article->save();
            
            
        return view('venteRest', ['client'=>$client, 'article'=>$articles]);
        
        
    }

    
}
