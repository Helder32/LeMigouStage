@include('head')
<body id="customerBody">
    
    <a href="{{ route('home') }}">{{ __('Accueil') }}</a>

    <button onclick="document.getElementById('newCustomer').style.display='block'" style="width:auto;">Créer une nouvelle fiche client</button>
    <button onclick="document.getElementById('searchCustomer').style.display='block'" style="width:auto;">Rechercher une fiche client</button>

    <div id="newCustomer" class="modal">
        <form class="modal-content" action="create" id="newCust">

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
                <form>
                    <input type="radio" name="gender" value="male"> Masculin<br>
                    <input type="radio" name="gender" value="female"> Feminin<br>
                </form><br>

                <label for="email"><b>Email</b></label>
                <input type="text" placeholder="Email" name="email">

                <label for="telFix"><b>Téléphone fixe</b></label>
                <input type="text" placeholder="Téléphone fixe" name="telFix">

                <label for="mobile"><b>Téléphone mobile</b></label>
                <input type="text" placeholder="Téléphone mobile" name="mobile">

                
                
                <div class="clearfix">
                    <button type="button" onclick="document.getElementById('newCustomer').style.display='none'" class="cancelbtn">Annuler</button>
                    <button type="submit" class="signupbtn">Enregistrer</button>
                </div>
            </div>
        </form>
    </div>




    <div id="searchCustomer" class="modal-text">
        <form class="modal-content" action="search" id="searchCust">

        <span onclick="document.getElementById('searchCustomer').style.display='none'" class="close" title="Close Modal">&times;</span>

            <div class="container">
                <h1>Recherche d'une fiche client</h1>
                <hr>
                <label for="Nom"><b>Nom</b></label>
                <input type="text" placeholder="Nom" name="Nom">

                <label for="Prenom"><b>Prénom</b></label>
                <input type="text" placeholder="Prénom" name="Prenom">

                <label for="raison_sociale"><b>Raison sociale</b></label>
                <input type="text" placeholder="Raison sociale" name="raison_sociale">

                <div class="clearfix">
                    <button type="button" onclick="document.getElementById('searchCustomer').style.display='none'" class="cancelbtn">Annuler</button>
                    <button type="submit" class="signupbtn">Chercher</button>
                </div>
            </div>
        </form>
    </div>


    
</body>