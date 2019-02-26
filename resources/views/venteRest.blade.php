@extends('template')

@section('title')
    Vente Restauration
@endsection

@section('content')

<body >
    <div class="bg_venteRest">
        @include('sideNav')
        
        <!-- Pour revenir à la page précedente -->
        <a href="<?php echo $_SERVER['HTTP_REFERER']; ?>" id="Retour" >Retour</a> 
            
        <!-- Code pour le ruban titre -->
        <div id="fond"> 
            <div class="ruban">     
                <h2>Vente Restauration</h2>     
            </div>     
            <div class="ruban_gauche"></div>
            <div class="ruban_droit"></div>
        </div>

        <div id="butCaisse" >
                <button class="btn btn-light" id="ChoixCaisse" href="" style="width:auto;">Repas</button>
                <button class="btn btn-light" id="ChoixCaisse" href="" style="width:auto;">Boisson</button>
                <button class="btn btn-light" id="ChoixCaisse" href="" style="width:auto;">Dessert et divers</button>
        </div>
        
    </div>
    
    <!-- Footer --> 
    <footer class="page-footer font-small special-color-dark pt-4">
        
        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">© 2019 Copyright: * HelDev *</div>
        
    </footer>
        
</body>




@endsection