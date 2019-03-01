@extends('template')

@section('title')
    Vente librairie
@endsection

@section('content')

<body >
    <div class="bg_venteLib">
        <div>
        @include('sideNav')
        
        <!-- Pour revenir à la page précedente -->
        <a href="<?php echo $_SERVER['HTTP_REFERER']; ?>" id="Retour" >Retour</a> 
    </div>
        
        <div id="fond"> 
            <div class="ruban">     
                <h2>Vente Librairie</h2>     
            </div>     
            <div class="ruban_gauche"></div>
            <div class="ruban_droit"></div>
        </div>

        <div id="butCaisse" >
                <button class="btn btn-light" id="ChoixCaisse" href="" style="width:auto;">Ticket de caisse</button>
                <button class="btn btn-light" id="ChoixCaisse" href="" style="width:auto;">Facture comptant</button>
                <button class="btn btn-light" id="ChoixCaisse" href="" style="width:auto;">Bon de livraison</button>
                <button class="btn btn-light" id="ChoixCaisse" href="" style="width:auto;">Facture différée</button>
                <button class="btn btn-light" id="ChoixCaisse" href="" style="width:auto;">Devis</button>
        </div>
        
        <!-- Footer --> 
        <footer class="page-footer font-small special-color-dark pt-4" id="footer" >
            
            <!-- Copyright -->
            <div class="footer-copyright text-center py-3">© 2019 Copyright: * HelDev *</div>
        </footer>

    </div>
    
</body>



@endsection