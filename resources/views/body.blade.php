@extends('template')

@section('title')
    Accueil
@endsection

@section('content')


<!-- div which contains the backround-image -->
<div class="bg_accueil">
    
    <div>
        @include('sideNav')
        
        <!-- Authentication Links -->
        @guest
        
        <a id="connectBtn" class="link" href="{{ route('login') }}">{{ __('Se connecter') }}</a>
        
        @if (Route::has('register'))
        
        @endif
        @else
        
        @endguest
    </div>
        
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
        
        
        <!-- Footer --> 
        <footer class="page-footer font-small special-color-dark pt-4" id="footer" >
    
            <!-- Copyright -->
            <div class="footer-copyright text-center py-3">© 2019 Copyright: * HelDev *</div>
            
        </footer>
    </div>
        

@endsection