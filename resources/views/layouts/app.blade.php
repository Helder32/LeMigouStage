@extends('template')

@section('title')
    Connexion
@endsection

@section('content')

    {{-- <!-- Authentication code -->
    <div id="app">
        <!-- Authentication Links -->
        @guest
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
            @if (Route::has('register'))
                <!-- code -->
            @endif
        @else
            
            
        @endguest
    </div>

    <main class="py-4">
        @yield('content')
    </main> --}}

@endsection
