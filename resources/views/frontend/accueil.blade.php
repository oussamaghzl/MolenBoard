@extends('frontend.template')

@section('content')
    <section class="accueil" >
        <div class="container">
            <img class="img1" src="./img/molengeek.jpg" alt="">
            <img class="img2" src="./img/molenboard.png" alt="">
            <div class="acc-buttons d-flex">
                
                @guest
                @if (Route::has('login'))
                        
                    <a href="{{ route('login') }}">Se connecter</a>
                    <div class="test"> </div>


                @endif
                
                @if (Route::has('register'))

                        
                        <a href="{{ route('register') }}">S'inscrire</a>

                    
                @endif
            @else
                <a style="padding: 25px 100px" href="{{ route('profil') }}">Profil</a>

            @endguest


            </div>
        </div>
        <h2>Plateforme fait par des étudiants pour<span> les étudiants.</span></h2>
    </section>

@endsection