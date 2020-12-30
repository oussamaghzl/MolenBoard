@extends('frontend.template')
@section('content')

    <div class="row mx-0 pb-4" id="sectionClasse">
        <div class="col-2 text-center " id="titre">
            <div class=" py-3">
                <a style="text-decoration:none" href="{{ route("eleves") }}">
                    <div class="cardd cardd-1 mx-auto" >
                        <h3>Eleve</h3>
                    </div>
                </a>
                <a style="text-decoration:none" href="{{ route("agenda") }}">
                    <div class="cardd cardd-1 mx-auto d-flex justify-content-center">
                        <h3 >Agenda</h3>
                    </div>
                </a>
                <a style="text-decoration:none" href="{{ route("exercice") }}" >
                    <div class="cardd cardd-1 mx-auto d-flex justify-content-center">
                        <h3>Exercice</h3>
                    </div>
                </a>                        
            </div>
        </div>
        <div class="col-10" id="titre">
                <ul class="bubbles">
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <ul>
                    <h1 class="bg-none" id="titree">Bienvenue {{Auth::user()->name}}</h1>
        </div>
    </div>

@endsection