<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\article;


class ArticleController extends Controller
{
    // if (isset($_POST["addArticle"]))
    // { 
    //     $this->store();
    // }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('article'); 

    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('article');
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $article = new article;
        $article->nom = $request->input('Nom');
        $article->tome_livre = $request->input('tome_livre');
        $article->isbn = $request->input('isbn');
        $article->date_parution = $request->input('date_parution');
        $article->auteur = $request->input('auteur');
        $article->editeur = $request->input('editeur');
        $article->distrbuteur = $request->input('distributeur');
        $article->diffuseur = $request->input('diffuseur');
        $article->secteur_livre = $request->input('secteur');
        $article->rayon_livre = $request->input('cat');
        $article->bon_achat = $request->input('bon_achat');
        $article->repas = $request->input('repas');
        $article->boisson = $request->input('boisson');
        $article->dessert_divers = $request->input('dessert_divers');
        $article->prix_achat = $request->input('prix_achat');
        $article->remise_achat = $request->input('remise_achat');
        $article->taux_tva = $request->input('taux_tva');
        $article->prix_ht = $request->input('prix_ht');
        $article->prix_ttc = $request->input('prix_ttc');
        $article->qt_dispo_fournisseur = $request->input('qt_dispo_fournisseur');
        $article->qt_stock = $request->input('qt_stock');
        $article->qt_depot = $request->input('qt_depot');
        $article->qt_reservation = $request->input('qt_reservation');
        $article->qt_commande_fournisseur = $request->input('qt_commande_fournisseur');
        $article->save();
            
            
        return redirect('article')->with('success', 'Votre demande a bien été enregistrée');
        
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $article = article::all();

        return view('resultArticle')->with('article', $article);
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //$article = article::all();
        //$article->find($id);
        $article = article::where('id_article', $id)->first();
        
        return view('editArticle', compact('article'));   
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $article = article::find($id);
        $article->nom = $request->input('Nom');
        $article->tome_livre = $request->input('tome_livre');
        $article->isbn = $request->input('isbn');
        $article->date_parution = $request->input('date_parution');
        $article->auteur = $request->input('auteur');
        $article->editeur = $request->input('editeur');
        $article->distrbuteur = $request->input('distributeur');
        $article->diffuseur = $request->input('diffuseur');
        $article->secteur_livre = $request->input('secteur');
        $article->rayon_livre = $request->input('cat');
        $article->bon_achat = $request->input('bon_achat');
        $article->repas = $request->input('repas');
        $article->boisson = $request->input('boisson');
        $article->dessert_divers = $request->input('dessert_divers');
        $article->prix_achat = $request->input('prix_achat');
        $article->remise_achat = $request->input('remise_achat');
        $article->taux_tva = $request->input('taux_tva');
        $article->prix_ht = $request->input('prix_ht');
        $article->prix_ttc = $request->input('prix_ttc');
        $article->qt_dispo_fournisseur = $request->input('qt_dispo_fournisseur');
        $article->qt_stock = $request->input('qt_stock');
        $article->qt_depot = $request->input('qt_depot');
        $article->qt_reservation = $request->input('qt_reservation');
        $article->qt_commande_fournisseur = $request->input('qt_commande_fournisseur');
        $article->save();
        
        return redirect('article/show')->with('success', 'Votre article a bien été modifié');

    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // article::where('id_article', $id)->delete();

        $article = article::find($id);
        $article->delete();

        return redirect('article')->with('succes', 'Article supprimé');
    }
}
