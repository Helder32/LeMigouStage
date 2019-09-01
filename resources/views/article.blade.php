@extends('template')

@section('title')
    Articles
@endsection

@section('content')

    <body id="articleBody">

        <div class="card" id="cardHeader">
            <div class="card-header h1">
                @include('sideNav')
                
                <!-- Pour revenir à la page précedente -->
                <a href="<?php echo $_SERVER['HTTP_REFERER']; ?>" id="Retour" >Retour</a> 
                
                <button class="btn btn-light" onclick="document.getElementById('newArticleLib').style.display='block'" style="width:auto;">Créer une nouvelle fiche Librairie</button>
                <button class="btn btn-light" onclick="document.getElementById('newArticleRest').style.display='block'" style="width:auto;">Créer une nouvelle fiche Restauration</button>
                <button class="btn btn-light" onclick="window.location='{{ URL::route('resultArticle') }}'" style="width:auto;">Articles restauration</button>
                <button class="btn btn-light" onclick="window.location='{{ URL::route('resultArticle') }}'" style="width:auto;">Articles Librairie</button>
                <button class="btn btn-light" onclick="window.location='{{ URL::route('resultArticle') }}'" style="width:auto;">Tous les articles</button>
                
            </div>

        </div>
    
            <div id="newArticleLib" class="modal">
                <form class="modal-content col-sm-4" action="{{url("article")}}" id="newArt" method="post" autocomplete="off">
                    {{ csrf_field() }}
                    
                    <span onclick="document.getElementById('newArticleLib').style.display='none'" class="close" title="Close Modal">&times;</span>

                    <div class="container">
                        <hr>
                        <h1 id="titleFicheLib">Création d'une nouvelle fiche Librairie</h1>
                        <hr>

                        <label for="Nom"><b>Nom</b></label>
                        <input type="text" placeholder="Nom" name="Nom" required>
                        <hr>

                        <label for="tome_livre"><b>Tome du livre</b></label>
                        <input type="text" placeholder="Tome du livre" name="tome_livre">
                        <hr>

                        <label for="isbn"><b>ISBN</b></label>
                        <input type="text" placeholder="ISBN" name="isbn">
                        <hr>

                        <label for="date_parution"><b>Date de parution : </b></label>
                        <input type="date" placeholder="Date de parution" name="date_parution"><br>
                        <hr>

                        <label for="auteur"><b>Nom de l'auteur</b></label>
                        <input type="text" placeholder="Nom de l'auteur" name="auteur">
                        <hr>

                        <label for="editeur"><b>Éditeur</b></label>
                        <input type="text" placeholder="Éditeur" name="editeur">
                        <hr>

                        <label for="distributeur"><b>Distributeur</b></label>
                        <input type="text" placeholder="Distributeur" name="distributeur">
                        <hr>

                        <label for="diffuseur"><b>Diffuseur</b></label>
                        <input type="text" placeholder="Diffuseur" name="diffuseur">
                        <hr>

                        <label for="secteur_livre"><b>Secteur</b></label><br>
                        <input type="radio" name="secteur" value="BD">BD<br>
                        <input type="radio" name="secteur" value="jeunesse">Jeunesse<br>
                        <input type="radio" name="secteur" value="roman">Roman<br>
                        <input type="radio" name="secteur" value="occasion">Occasion<br>
                        <hr>

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
                        <hr>
                        
                        <label for="qt_dispo_fournisseur"><b>Quantitée disponnible fournisseur</b></label>
                        <input type="text" placeholder="Quantitée disponnible fournisseur" name="qt_dispo_fournisseur">
                        <hr>
                        
                        <label for="qt_stock"><b>Quantitée stock</b></label>
                        <input type="text" placeholder="Quabtitée stock" name="qt_stock">
                        <hr>
                        
                        <label for="qt_depot"><b>Quantitée en dépôt</b></label>
                        <input type="text" placeholder="Quantitée en dépôt" name="qt_depot">
                        <hr>
                        
                        <label for="qt_reservation"><b>Quantitée en réservation</b></label>
                        <input type="text" placeholder="Quantitée en réservation" name="qt_reservation">
                        <hr>
                        
                        <label for="qt_commande_fournisseur"><b>Quantitée en commande fournisseur</b></label>
                        <input type="text" placeholder="Quantitée en commande fournisseur" name="qt_commande_fournisseur">
                        <hr>
                        
                        <label for="bon_achat"><b>Bon d'achat</b></label>
                        <input type="text" placeholder="Bon d'achat" name="bon_achat">
                        <hr>

                        <label for="prix_achat"><b>Prix d'achat</b></label>
                        <input type="text" placeholder="Prix d'achat" name="prix_achat">
                        <hr>

                        @include('calcul_prix');

                        
                            <div class="clearfix">
                                <button type="button" onclick="document.getElementById('newArticleLib').style.display='none'" class="cancelbtn">Annuler</button>
                                <button type="submit" class="signupbtn" id="addArticle">Enregistrer</button>
                            </div>
                    </div>
                </form>
            </div>



            <div id="newArticleRest" class="modal">
                <form class="modal-content col-sm-4" action="{{url("article")}}" id="newArt" method="post" autocomplete="off">
                    {{ csrf_field() }}

                    <span onclick="document.getElementById('newArticleRest').style.display='none'" class="close" title="Close Modal">&times;</span>

                    <div class="container">
                        <hr>
                        <h1 id="titleFicheRest">Création d'une nouvelle fiche Restauration</h1>
                        <hr>
                        <label for="Nom"><b>Nom</b></label>
                        <input type="text" placeholder="Nom" name="Nom" required>

                        <label for="prix_achat"><b>Prix d'achat</b></label>
                        <input type="text" placeholder="Prix d'achat" name="prix_achat">

                        <label for="remise_achat"><b>Remise d'achat</b></label>
                        <input type="text" placeholder="Remise d'achat" name="remise_achat">

                        <label for="qt_stock"><b>Quantitée stock</b></label>
                        <input type="text" placeholder="Quabtitée stock" name="qt_stock">

                        <label for="qt_commande_fournisseur"><b>Quantitée en commande fournisseur</b></label>
                        <input type="text" placeholder="Quantitée en commande fournisseur" name="qt_commande_fournisseur">

                        
                        @include('calcul_prix')

                        
                        <div class="clearfix">
                            <button type="button" onclick="document.getElementById('newArticleRest').style.display='none'" class="cancelbtn">Annuler</button>
                            <button type="submit" class="signupbtn" id="addArticle">Enregistrer</button>
                        </div>
                    </div>
                </form>
            </div>
                

            {{-- code pour afficher les messages d'erreur  --}}                    
    
            @if(count($errors) > 0)

                @foreach($errors->all() as $error)
                
                    <div class="alert alert-danger">
                        {{$error}}

                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
            
                    </div>
                @endforeach
            @endif
            
            @if(session('success'))
                <div class="alert alert-success">
                    {{session('success')}}

                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            
                </div>
            @endif
            
            @if(session('success'))
                <div class="alert alert-error">
                    {{session('error')}}
    
                </div>
            @endif 

            

            <!-- Footer --> 
        <footer class="page-footer font-small special-color-dark pt-4" id="footerClients" >
    
            <!-- Copyright -->
            <div class="footer-copyright text-center py-3">© 2019 Copyright: * HelDev *</div>
            
        </footer>


    </body>

@endsection