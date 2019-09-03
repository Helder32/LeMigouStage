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

                <button class="btn btn-light" onclick="document.getElementById('newRepas').style.display='block'" style="width:auto;">Ticket de caisse</button>
                <button class="btn btn-light" onclick="document.getElementById('newBoisson').style.display='block'" style="width:auto;">Facture comptant</button>
                <button class="btn btn-light" onclick="document.getElementById('newDessert').style.display='block'"style="width:auto;">Facture différée</button>
                <button class="btn btn-light" onclick="document.getElementById('newDessert').style.display='block'"style="width:auto;">Devis</button>
            
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
                <footer class="page-footer font-small special-color-dark pt-4" id="footer" >
                
                    <!-- Copyright -->
                    <div class="footer-copyright text-center py-3">© 2019 Copyright: * HelDev *</div>
                    
                </footer>

        </div>
        
        
        <div id="newRepas" class="modal">
            <form class="modal-content col-sm-4 form-inline myForm"" action="{{url("venteRest")}}" id="newArt" method="post" autocomplete="off">
                    {{ csrf_field() }}
                    
                <span onclick="document.getElementById('newRepas').style.display='none'" class="close" title="Close Modal">&times;</span>
                <div class="container">
                    <hr>
                    <h1 id="titleVenteRest">Caisse Restauration</h1>
                    <hr>
                    
                    <button class="btn btn-light" id="butNewClient" onclick="document.getElementById('newCustomer').style.display='block'" style="width:auto;">Nouveau client ?</button>                        
                    
                    <select class="browser-default custom-select mb-6" name="Nom">
                        <option disabled="" selected="">Nom du client</option>
                        @foreach($client ->sortBy('nom') as $key)
                        <option value="{{$key ->id_client}}">{{$key ->nom}}</option>
                        @endforeach
                    </select>  
                    
                    {{-- div pour le code autocomplete : --}}
                    {{-- <div id="result" data-result="{{ $client }}"></div> --}}
                    
                    <select class="browser-default custom-select mb-6" name="nomArticle" id="artSelect" >
                        <option disabled="" selected="">Nom de l'article</option>
                        @foreach($article ->sortBy('nom') as $key)
                        @if ($key ->repas != NULL)
                        <option value="{{$key ->id_article}}">{{$key ->repas}}</option>
                        @elseif ($key ->boisson != NULL)
                        <option value="{{$key ->id_article}}">{{$key ->boisson}}</option>
                        @elseif ($key ->dessert_divers != NULL)
                        <option value="{{$key ->id_article}}">{{$key ->dessert_divers}}</option>
                        @endif
                        @endforeach
                    </select>
                    <hr>
                    
                    <label for="date_jour"><b>Date</b></label>
                    <input type="date" placeholder="Date" name="date_jour" required><br>
                    <hr>
                    
                    <label for="type_vente"><b>Type de vente</b></label><br>
                    <input type="radio" name="type" value="Repas"> Repas complet<br>
                    <input type="radio" name="type" value="Boisson"> Boisson seule<br>
                    <input type="radio" name="type" value="Dessert_divers"> Dessert et divers<br>
                    <hr>
                    
                    <label for="mode_paiement"><b>Mode de paiement</b></label><br>
                    <input type="radio" name="mode_paiement" value="Especes"> Especes<br>
                    <input type="radio" name="mode_paiement" value="CB"> CB<br>
                    <input type="radio" name="mode_paiement" value="Cheques"> Cheques<br>
                    <input type="radio" name="mode_paiement" value="Ticket_resto"> Ticket resto<br>
                    <input type="radio" name="mode_paiement" value="Paiement_multiple"> Paiement multiple<br>
                    <hr>
                    
                    
                    @include('calcul_prix')
                    
                    
                    <div class="clearfix">
                        <button type="button" onclick="document.getElementById('newRepas').style.display='none'" class="cancelbtn">Annuler</button>
                        <button type="submit" class="signupbtn" id="addArticle">Enregistrer</button>
                    </div>
                </div>
            </form>
            
            <div id="newCustomer" class="modal myCust">
                <form class="modal-content col-sm-4" action="{{url("customer")}}" id="newCust" method="post" autocomplete="off">
                        {{ csrf_field() }}
                        
                    <span onclick="document.getElementById('newCustomer').style.display='none'" class="close" title="Close Modal">&times;</span>
                    
                    <div class="container">
                        <h1 id="newCustTitle">Création d'une nouvelle fiche client</h1>
                        <hr>
                        
                        <label for="Nom"><b>Nom</b></label>
                        <input type="text" placeholder="Nom" name="Nom" required>
                        <hr>
    
                        <label for="Prenom"><b>Prénom</b></label>
                        <input type="text" placeholder="Prénom" name="Prenom" required>
                        <hr>
    
                        <label for="raison_sociale"><b>Raison sociale</b></label>
                        <input type="text" placeholder="Raison sociale" name="raison_sociale">
                        <hr>
    
                        <label for="Nrue"><b>N° de rue</b></label>
                        <input type="text" placeholder="N° de rue" name="Nrue">
                        <hr>
    
                        <label for="rue"><b>Nom de rue</b></label>
                        <input type="text" placeholder="Nom de rue" name="rue">
                        <hr>
    
                        <label for="ville"><b>Ville</b></label>
                        <input type="text" placeholder="Ville" name="ville">
                        <hr>
    
                        <label for="code_postal"><b>Code postal</b></label>
                        <input type="text" placeholder="Code postal" name="code_postal">
                        <hr>
    
                        <label for="age"><b>Age</b></label><br>
                        <input type="number" placeholder="Age" name="age">
                        <hr>
    
                        <label for="sexe"><b>Genre</b></label><br>
                        <input type="radio" name="gender" value="male"> Masculin<br>
                        <input type="radio" name="gender" value="female"> Feminin<br>
                        <hr>
    
                        <label for="email"><b>Email</b></label><br>
                        <input type="email" placeholder="Email" name="email">
                        <hr>
    
                        <label for="telFix"><b>Téléphone fixe</b></label><br>
                        <input type="tel" placeholder="Téléphone fixe" name="telFix" pattern="[0-9]{10}">
                        <hr>
    
                        <label for="mobile"><b>Téléphone mobile</b></label><br>
                        <input type="tel" placeholder="Téléphone mobile" name="mobile" pattern="[0-9]{10}">
                        
                        
                        <div class="clearfix">
                            <button type="button" onclick="document.getElementById('newCustomer').style.display='none'" class="cancelbtn">Annuler</button>
                            <button type="submit" class="signupbtn" id="addcustomer">Enregistrer</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </body>

@endsection
