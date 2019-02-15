@extends('template')

@section('title')
Résultat
@endsection

@section('content')


<body id="resultCustomerBody">
    
    <button onclick="window.location='{{ URL::route('body') }}'" style="width:auto;">Retour à l'accueil</button>
    <div>
        <h4 id="title_table">Vos clients </h4>
    </div>
    
    
    {{-- <table class="table table-sm table-dark table-striped" id="customerTable" cellspacing="0" width="90%"> --}}
        <table id="customerTable" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
        <input type="text" id="searchCust" onkeyup="searchCustomer()" placeholder="Rechercher un client">

        <thead>
            <tr>
                <th class="th-sm">id.</th>
                <th class="th-sm">Date de création</th>
                <th class="th-sm">Nom</th>
                <th class="th-sm">Prénom</th>
                <th class="th-sm">Raison sociale</th>
                <th class="th-sm">Adresse</th>
                <th class="th-sm">age</th>
                <th class="th-sm">sexe</th>
                <th class="th-sm">mail</th>
                <th class="th-sm">tel.fixe</th>
                <th class="th-sm">tel.mobile</th>
            </tr>
        </thead>

        <tbody>

            @if(count($client) > 0)

            @foreach($client as $client)
                
                <tr>
                    <td> {{ $client->id_client }} </td>
                    <td> {{ $client->created_at }} </td>
                    <td> {{ $client->nom }} </td>
                    <td> {{ $client->prenom }} </td>
                    <td> {{ $client->raison_sociale }} </td>
                    <td> {{ $client->numero_rue. ' '.$client->rue. ' '. $client->code_postal. ' '. $client->ville  }} </td>
                    <td> {{ $client->age }} </td>
                    <td> {{ $client->sexe }} </td>
                    <td> {{ $client->mail }} </td>
                    <td> {{ $client->tel_fixe }} </td>
                    <td> {{ $client->tel_mobile }} </td>
                </tr>
            
            @endforeach

            @else
            <p>Vous n'avez pas de clients enregistrés</p>
            @endif 

        </tbody>
    </table> 



    
</body>

@endsection