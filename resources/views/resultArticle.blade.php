@extends('template')

@section('title')
    Résultat
@endsection

@section('content')


<body id="resultArticleBody">
    
        <div>
            @include('sideNav')

            <!-- Pour revenir à la page précedente -->
            <a href="<?php echo $_SERVER['HTTP_REFERER']; ?>" id="Retour" >Retour</a> 
            
        </div>

    <div>
        <h4 id="title_table">Vos articles </h4>
    </div>
    
    <div class="listArticle_container">
        {{-- <table class="table table-sm table-dark table-striped" id="customerTable" cellspacing="0" width="90%"> --}}
        <table id="articleTable" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
        <label for="articleTable">Rechercher un article par son nom :</label>
        <input type="text" id="searchArt" onkeyup="searchArticle()" placeholder="Nom de l'article" onfocus="this.value=''">
            
            <thead>
                <tr id="trTable">
                    <th class="th-sm">id.</th>
                    <th class="th-sm">Date de création</th>
                    <th class="th-sm">Nom</th>
                    <th class="th-sm">Tome</th>
                    <th class="th-sm">ISBN</th>
                    <th class="th-sm">Date de parution</th>
                    <th class="th-sm">Auteur</th>
                    <th class="th-sm">Editeur</th>
                    <th class="th-sm">Distributeur</th>
                    <th class="th-sm">Diffuseur</th>
                    <th class="th-sm">Secteur et Catégorie</th>
                    <th class="th-sm">Bon d'achat</th>
                    <th class="th-sm">Repas</th>
                    <th class="th-sm">Boisson</th>
                    <th class="th-sm">Dessert et divers</th>
                    <th class="th-sm">Prix d'achat</th>
                    <th class="th-sm">Remise</th>
                    <th class="th-sm">Taux de TVA</th>
                    <th class="th-sm">Prix HT</th>
                    <th class="th-sm">Prix TTC</th>
                    <th class="th-sm">Qt dispo. fournisseur</th>
                    <th class="th-sm">Qt en stock</th>
                    <th class="th-sm">Qt en dépôt</th>
                    <th class="th-sm">Qt en réservation</th>
                    <th class="th-sm">Qt en commande fournisseur</th>
                    
                    
                </tr>
            </thead>
            
            <tbody>
                
                @if(count($article) > 0)
                
                @foreach($article as $article)
                
                <tr>
                    <td> {{ $article->id_article }} </td>
                    <td> {{ $article->created_at }} </td>
                    <td> {{ $article->nom }} </td>
                    <td> {{ $article->tome_livre }} </td>
                    <td> {{ $article->isbn }} </td>
                    <td> {{ $article->date_parution }} </td>
                    <td> {{ $article->auteur }} </td>
                    <td> {{ $article->editeur }} </td>
                    <td> {{ $article->distributeur }} </td>
                    <td> {{ $article->diffuseur }} </td>
                    <td>Secteur : {{ $article->secteur_livre }}<br> 
                        Catégorie : {{ $article->rayon_livre}} 
                    </td>
                    <td> {{ $article->bon_achat }} </td>
                    <td> {{ $article->repas }} </td>
                    <td> {{ $article->boisson }} </td>
                    <td> {{ $article->dessert_divers }} </td>
                    <td> {{ $article->prix_achat }} </td>
                    <td> {{ $article->remise_achat }} </td>
                    <td> {{ $article->taux_tva }} </td>
                    <td> {{ $article->prix_ht }} </td>
                    <td> {{ $article->prix_ttc }} </td>
                    <td> {{ $article->qt_dispo_fournisseur }} </td>
                    <td> {{ $article->qt_stock }} </td>
                    <td> {{ $article->qt_depot }} </td>
                    <td> {{ $article->qt_reservation }} </td>
                    <td> {{ $article->qt_commande_fournisseur }} </td>
                    
                </tr>
                
                @endforeach
                
                @else
                    <p id='alertArt'>Vous n'avez pas d'articles enregistrés</p>
                @endif 
                
            
            </tbody>
        </table> 
    </div>
        

    
</body>

@endsection