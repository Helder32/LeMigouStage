
    <!-- content of the sidenav --> 
    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

        @if (Auth::check())
            <li class="nav-item dropdown">
                <a id="navbarDropdownBienvenue" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    Bienvenue {{ Auth::user()->name }} <span class="caret"></span>
                </a>
                
                <a id="date">Nous sommes le {{ date('d/m/y') }}</a>
                <div class="ephemeride">
                        <a id="navbarDropdownBienvenue" >
                            <label for="">Éphéméride :</label><div id="widget_nominis" class="css_nominis"></div>
                            <script type="text/javascript" src="https://nominis.cef.fr/widgets/widget.php?id=widget_nominis&format=1"></script>
                        </a>
                        
                    </div>

                <div class="dropdown-menu dropdown-menu-left" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        {{ __('Se déconnecter') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>

            @else
            
            <a id="content">Vous n'êtes pas connecté(e)</a>
            
            @endif
            
        <a class="nav-link" id="newUtil" href="{{ route('register') }}">{{ __('Créer un nouvel utilisateur') }}</a><br>

        <a href="{{ route('body') }}">{{ __('Accueil') }}</a>
        
        <a href="{{ route('venteLib') }}">{{ __('Vente librairie') }}</a>

        <a href="{{ route('venteRest') }}">{{ __('Vente restauration') }}</a>

        <a href="{{ route('customer') }}">{{ __('Gestion des fiches clients') }}</a>
        
        <a href="{{ route('article') }}">{{ __('Gestion des articles') }}</a>

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" 
                aria-expanded="false">Gestion des commandes</a>
                <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">Réception des commandes</a>
                    <a class="dropdown-item" href="#">Réception des nouveautées</a>
                    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" 
                        aria-expanded="false">Chercher une commande</a>
                        <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">Librairie</a>
                            <a class="dropdown-item" href="#">Client</a>
                            <a class="dropdown-item" href="#">Toutes les commandes en cours</a>
                        </div>
                        
                </div>
        </li>

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" 
                aria-expanded="false">Consulter le stock</a>
                    <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Par secteur</a>
                        <a class="dropdown-item" href="#">Dépôts</a>
                        
                    </div>
                        
        </li>
        
        <a href="#">Tableau de bord</a>

        <a href="#">Rechercher un titre</a>
        

        
    
    </div>    


    <span style="font-size:35px;cursor:pointer" onclick="openNav()">&#9776;
    
    
        

