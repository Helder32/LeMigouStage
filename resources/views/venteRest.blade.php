@extends('template')

@section('title')
    Vente Restauration
@endsection

@section('content')

<body>
    <div class="card" id="bg_venteRest">

            <div>
                @include('sideNav')
                
                <!-- Pour revenir à la page précedente -->
                <a href="<?php echo $_SERVER['HTTP_REFERER']; ?>" id="Retour" >Retour</a> 
            </div>
            
            <div id="butCaisse" >

                <!-- Code pour le ruban titre -->
                <div id="fond"> 
                    <div class="ruban">     
                        <h2>Vente Restauration</h2>     
                    </div>     
                    <div class="ruban_gauche"></div>
                    <div class="ruban_droit"></div>
    
                </div>

                <button class="btn btn-light" onclick="document.getElementById('newRepas').style.display='block'" style="width:auto;">Repas</button>

                {{-- <button class="btn btn-light" id="ChoixCaisse" href="" style="width:auto;">Repas</button> --}}
                <button class="btn btn-light" id="ChoixCaisse" href="" style="width:auto;">Boisson</button>
                <button class="btn btn-light" id="ChoixCaisse" href="" style="width:auto;">Dessert et divers</button>
            
            </div>

            <!-- Footer --> 
        <footer class="page-footer font-small special-color-dark pt-4" id="footer" >
            
                <!-- Copyright -->
                <div class="footer-copyright text-center py-3">© 2019 Copyright: * HelDev *</div>
                
            </footer>

    </div>
    
    
    <div id="newRepas" class="modal">
        <form class="modal-content col-sm-7" action="{{url("venteRest")}}" id="newArt" method="post">
                {{ csrf_field() }}
                
                <span onclick="document.getElementById('newRepas').style.display='none'" class="close" title="Close Modal">&times;</span>
                
            <div class="container">
                <h1>Caisse</h1>
                <hr>

                <select class="browser-default custom-select mb-4" name="Nom">
                    <option disabled="" selected="">Nom du client</option>
                    @foreach($client as $key)
                        <option value="{{$key ->id_client}}">{{$key ->nom}}</option>
                    @endforeach
                </select>                  

                <select class="browser-default custom-select mb-4" name="nomArticle" id="artSelect" >
                    <option disabled="" selected="">Nom de l'article</option>
                    @foreach($article as $key)
                        <option value="{{$key ->id_article}}">{{$key ->repas}}</option>
                        <option value="{{$key ->id_article}}">{{$key ->boisson}}</option>
                        <option value="{{$key ->id_article}}">{{$key ->dessert_divers}}</option>
                    @endforeach
                </select>  
                
                
                <label for="date_jour"><b>Date</b></label>
                <input type="date" placeholder="Date" name="date_jour" required><br><hr>
                
                <label for="type_vente"><b>Type de vente</b></label><br>
                <input type="radio" name="type" value="Repas">Repas<br>
                <input type="radio" name="type" value="Boisson">Boisson<br>
                <input type="radio" name="type" value="Dessert_divers">Dessert et divers<br><hr>
                <label for="mode_paiement"><b>Mode de paiement</b></label><br>
                <input type="radio" name="mode_paiement" value="Especes">Especes<br>
                <input type="radio" name="mode_paiement" value="CB">CB<br>
                <input type="radio" name="mode_paiement" value="Cheques">Cheques<br>
                <input type="radio" name="mode_paiement" value="Ticket_resto">Ticket resto<br>
                <input type="radio" name="mode_paiement" value="Paiement_multiple">Paiement multiple<br><hr>

                <label for="taux_tva"><b>Taux de TVA</b></label><br>
                <input type="radio" name="tva" value="Restauration">Restauration 5.50 %<br>
                <input type="radio" name="tva" value="Boisson">Boisson 20 %<br>
                <input type="radio" name="tva" value="Librairie">Librairie 5.50 %<br>

                <label for="prix_ht"><b>Prix HT</b></label>
                <input type="text" placeholder="Prix HT" name="prix_ht" required>
                
                <label for="quantite"><b>Quantité</b></label>
                <input type="text" placeholder="Quantité" name="quantite">

                <label for="remise_forfaitaire"><b>Remise</b></label>
                <input type="text" placeholder="Remise" name="remise_forfaitaire">

                <label for="prix_ttc"><b>Prix TTC</b></label>
                <input type="text" placeholder="Prix TTC" name="prix_ttc" required><hr>

                <div class="clearfix">
                    <button type="button" onclick="document.getElementById('newRepas').style.display='none'" class="cancelbtn">Annuler</button>
                    <button type="submit" class="signupbtn" id="addArticle">Enregistrer</button>
                </div>
            </div>
        </form>
    </div>
        
</body>

@endsection