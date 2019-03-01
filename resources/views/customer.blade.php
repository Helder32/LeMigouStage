@extends('template')

@section('title')
    Clients
@endsection

@section('content')

    <body id="customerBody">

        <div class="card" id="cardHeader">
            <div class="card-header h1">
                    <div>
                        @include('sideNav')
                        
                        <!-- Pour revenir à la page précedente -->
                        <a href="<?php echo $_SERVER['HTTP_REFERER']; ?>" id="Retour" >Retour</a> 
                        
                        <button class="btn btn-light" onclick="document.getElementById('newCustomer').style.display='block'" style="width:auto;">Créer une nouvelle fiche client</button>
                        <button class="btn btn-light" onclick="window.location='{{ URL::route('resultCustomer') }}'" style="width:auto;">Afficher ou rechercher les clients</button>
                    </div>
            </div>
        </div>

        <div id="newCustomer" class="modal">
            <form class="modal-content col-sm-7" action="{{url("customer")}}" id="newCust" method="post">
                {{ csrf_field() }}

                <span onclick="document.getElementById('newCustomer').style.display='none'" class="close" title="Close Modal">&times;</span>

                <div class="container">
                    <h1>Création d'une nouvelle fiche client</h1>
                    <hr>
                    <label for="Nom"><b>Nom</b></label>
                    <input type="text" placeholder="Nom" name="Nom" required>

                    <label for="Prenom"><b>Prénom</b></label>
                    <input type="text" placeholder="Prénom" name="Prenom" required>

                    <label for="raison_sociale"><b>Raison sociale</b></label>
                    <input type="text" placeholder="Raison sociale" name="raison_sociale">

                    <label for="Nrue"><b>N° de rue</b></label>
                    <input type="text" placeholder="N° de rue" name="Nrue">

                    <label for="rue"><b>Nom de rue</b></label>
                    <input type="text" placeholder="Nom de rue" name="rue">

                    <label for="ville"><b>Ville</b></label>
                    <input type="text" placeholder="Ville" name="ville">

                    <label for="code_postal"><b>Code postal</b></label>
                    <input type="text" placeholder="Code postal" name="code_postal">

                    <label for="age"><b>Age</b></label>
                    <input type="text" placeholder="Age" name="age">

                    <label for="sexe"><b>Genre</b></label><br>
                    <input type="radio" name="gender" value="male"> Masculin<br>
                    <input type="radio" name="gender" value="female"> Feminin<br>

                    <label for="email"><b>Email</b></label>
                    <input type="text" placeholder="Email" name="email">

                    <label for="telFix"><b>Téléphone fixe</b></label>
                    <input type="text" placeholder="Téléphone fixe" name="telFix">

                    <label for="mobile"><b>Téléphone mobile</b></label>
                    <input type="text" placeholder="Téléphone mobile" name="mobile">

                    
                    
                    <div class="clearfix">
                        <button type="button" onclick="document.getElementById('newCustomer').style.display='none'" class="cancelbtn">Annuler</button>
                        <button type="submit" class="signupbtn" id="addcustomer">Enregistrer</button>
                    </div>
                </div>
            </form>
        </div>




        {{-- <div id="searchCustomer" class="modal">
            <form class="modal-content" action="{{url("customer")}}" id="searchCust" method="get">
                {{ csrf_field() }}
                <span onclick="document.getElementById('searchCustomer').style.display='none'" class="close" title="Close Modal">&times;</span>

                <div class="container">
                    <h1>Recherche d'une fiche client</h1>
                    <hr>
                    <label for="Nom"><b>Nom</b></label>
                    <input type="text" placeholder="Nom" name="SearchNom">

                    <label for="Prenom"><b>Prénom</b></label>
                    <input type="text" placeholder="Prénom" name="SearchPrenom">

                    <label for="raison_sociale"><b>Raison sociale</b></label>
                    <input type="text" placeholder="Raison sociale" name="SearchRaisonSociale">

                    <div class="clearfix">
                        <button type="button" onclick="document.getElementById('searchCustomer').style.display='none'" class="cancelbtn">Annuler</button>
                        <button type="submit" onclick="document.getElementById('resultCustomer').style.display='block'" class="signupbtn">Chercher</button>
                    </div>
                </div>
            </form>
        </div> --}}


        

        {{-- code pour afficher les messages d'erreur --}}

        @if(count($errors) > 0)

            @foreach($errors->all() as $error)
                <div class="alert alert-danger">
                    {{$error}}
                </div>
            @endforeach
        @endif
        
        @if(session('success'))
            <div class="alert alert-success">
                {{session('success')}}
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