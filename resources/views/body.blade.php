@extends('template')

@section('title')
    Accueil
@endsection

@section('content')


<!-- div which contains the backround-image -->
<div class="bg_accueil">
    
    @include('sideNav')
    
        <!-- Pour revenir à la page précedente -->
        <a href="<?php echo $_SERVER['HTTP_REFERER']; ?>" id="Retour" >Retour</a> 
    
        <!-- Authentication Links -->
        @guest
        
            <a id="connectBtn" class="link" href="{{ route('login') }}">{{ __('Se connecter') }}</a>
        
            @if (Route::has('register'))

        
            @endif
            @else
        
        
        @endguest
        
        <main class="py-4">
            @yield('content')
        </main>
    
    
        {{-- <!-- Code pour le ruban titre -->
        <div id="fond"> 
            <div class="ruban">     
                <h2>MigouLib</h2>     
            </div>     
            <div class="ruban_gauche"></div>
            <div class="ruban_droit"></div>
        </div> --}}
</div>


    <!-- Footer --> 
    <footer class="page-footer font-small special-color-dark pt-4">

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">© 2019 Copyright: * HelDev *</div>
        
    </footer>

        

@endsection