@extends('frontend.template')

@section('content')
    <div class="row mx-0 pb-4" id="sectionClasse">

        <div class="col-2 text-center">
            <div class=" py-3">

                <a style="text-decoration:none" href="{{ route("eleves") }}">

                    <div class="cardd titre cardd-1 mx-auto d-flex justify-content-center" >
                        <h3>Eleves</h3>
    
                    </div>
                </a>

                <a style="text-decoration:none" href="{{ route("agenda") }}">
                    <div class="cardd cardd-1 mx-auto d-flex justify-content-center">
                        <h3 >Agenda</h3>
    
                    </div>

                </a>

                <a style="text-decoration:none" href="{{ route("exercice") }}" >
                    <div id="titre"  class="cardd cardd-1 mx-auto d-flex justify-content-center">
                        <h3>Exercice</h3>
                    </div>

                </a>

                
                        
            </div>
        </div>

        <div class="col-10 mt-4">
            
            <section class="border mr-3"  id="classe">




                
            </section>
              
        </div>

    </div>
@endsection