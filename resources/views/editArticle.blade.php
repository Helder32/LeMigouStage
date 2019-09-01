@extends('template')

@section('title')
    Articles
@endsection

@section('content')

    <body>

        <div class="card" id="cardHeader">
            <div class="card-header h1">
                @include('sideNav')
                
                <!-- Pour revenir à la page précedente -->
                <a href="<?php echo $_SERVER['HTTP_REFERER']; ?>" id="Retour" >Retour</a> 
            </div>

        </div>
    
            <div id="newArticle">
                <form class="modal-content col-sm-4" action="{{url("/article/update", [$article->id_article])}}" id="newArt" method="post">
                    {{ csrf_field() }}

                    <span onclick="document.getElementById('newArticle').style.display='none'" class="close" title="Close Modal">&times;</span>

                    <div class="container">
                        <h1>Modifier une fiche article</h1>
                        <hr>
                        <label for="Nom"><b>Nom</b></label>
                        <input type="text" placeholder="Nom" name="Nom" value="{{$article->nom}}">

                        <label for="tome_livre"><b>Tome du livre</b></label>
                        <input type="text" placeholder="Tome du livre" name="tome_livre" value="{{$article->tome_livre}}">

                        <label for="isbn"><b>ISBN</b></label>
                        <input type="text" placeholder="ISBN" name="isbn" value="{{$article->isbn}}">

                        <label for="date_parution"><b>Date de parution : </b></label>
                        <input type="date" placeholder="Date de parution" name="date_parution" value="{{$article->date_parution}}"><br>

                        <label for="auteur"><b>Nom de l'auteur</b></label>
                        <input type="text" placeholder="Nom de l'auteur" name="auteur" value="{{$article->auteur}}">

                        <label for="editeur"><b>Éditeur</b></label>
                        <input type="text" placeholder="Éditeur" name="editeur" value="{{$article->editeur}}">

                        <label for="distributeur"><b>Distributeur</b></label>
                        <input type="text" placeholder="Distributeur" name="distributeur" value="{{$article->distributeur}}">

                        <label for="diffuseur"><b>Diffuseur</b></label>
                        <input type="text" placeholder="Diffuseur" name="diffuseur" value="{{$article->diffuseur}}">

                        <label for="secteur_livre"><b>Secteur</b></label><br>
                        <input type="radio" name="secteur" value="BD">BD<br>
                        <input type="radio" name="secteur" value="jeunesse">Jeunesse<br>
                        <input type="radio" name="secteur" value="roman">Roman<br>
                        <input type="radio" name="secteur" value="occasion">Occasion<br>

                        <label for="rayon_livre"><b>Rayon</b></label><br>
                        <input type="radio" name="cat" value="manga">Manga<br>
                        <input type="radio" name="cat" value="comics">Comics<br>
                        <input type="radio" name="cat" value="franco_belge">Franco Belge<br>
                        <input type="radio" name="cat" value="roman_graphique">Roman graphique<br>
                        <input type="radio" name="cat" value="alternatif">Alternatif<br>
                        <input type="radio" name="cat" value="docu_bd">Docu.BD<br>
                        <input type="radio" name="cat" value="album">Album<br>
                        <input type="radio" name="cat" value="actvite">Actvité<br>
                        <input type="radio" name="cat" value="roman">Roman<br>
                        <input type="radio" name="cat" value="divers">Divers<br>

                        <label for="bon_achat"><b>Bon d'achat</b></label>
                        <input type="text" placeholder="Bon d'achat" name="bon_achat" value="{{$article->bon_achat}}">

                        <label for="repas"><b>Repas</b></label>
                        <input type="text" placeholder="Repas" name="repas" value="{{$article->repas}}">

                        <label for="boisson"><b>Boisson</b></label>
                        <input type="text" placeholder="Boisson" name="boisson" value="{{$article->boisson}}">

                        <label for="dessert_divers"><b>Desserts et divers</b></label>
                        <input type="text" placeholder="Desserts et divers" name="dessert_divers" value="{{$article->dessert_divers}}">

                        <label for="prix_achat"><b>Prix d'achat</b></label>
                        <input type="text" placeholder="Prix d'achat" name="prix_achat" value="{{$article->prix_achat}}">

                        <label for="remise_achat"><b>Remise d'achat</b></label>
                        <input type="text" placeholder="Remise d'achat" name="remise_achat" value="{{$article->remise_achat}}">

                        <label for="taux_tva"><b>Taux TVA</b></label>
                        <input type="text" placeholder="Taux TVA" name="taux_tva" required  value="{{$article->taux_tva}}">

                        <label for="prix_ht"><b>Prix HT</b></label>
                        <input type="text" placeholder="Prix HT" name="prix_ht" required value="{{$article->prix_ht}}">

                        <label for="prix_ttc"><b>Prix TTC</b></label>
                        <input type="text" placeholder="Prix TTC" name="prix_ttc" required value="{{$article->prix_ttc}}">

                        <label for="qt_dispo_fournisseur"><b>Quantitée disponnible fournisseur</b></label>
                        <input type="text" placeholder="Quantitée disponnible fournisseur" name="qt_dispo_fournisseur" value="{{$article->qt_dispo_fournisseur}}">

                        <label for="qt_stock"><b>Quantitée stock</b></label>
                        <input type="text" placeholder="Quantitée stock" name="qt_stock" value="{{$article->qt_stock}}">

                        <label for="qt_depot"><b>Quantitée en dépôt</b></label>
                        <input type="text" placeholder="Quantitée en dépôt" name="qt_depot" value="{{$article->qt_depot}}">

                        <label for="qt_reservation"><b>Quantitée en réservation</b></label>
                        <input type="text" placeholder="Quantitée en réservation" name="qt_reservation" value="{{$article->qt_reservation}}">

                        <label for="qt_commande_fournisseur"><b>Quantitée en commande fournisseur</b></label>
                        <input type="text" placeholder="Quantitée en commande fournisseur" name="qt_commande_fournisseur" value="{{$article->qt_commande_fournisseur}}">

                        
                            <div class="clearfix">
                                <button type="button" onclick="document.getElementById('newArticle').style.display='none'" class="cancelbtn">Annuler</button>
                                <button type="submit" class="signupbtn" id="addArticle">Enregistrer</button>
                            </div>
                    </div>
                </form>
            </div>

    </body>

@endsection