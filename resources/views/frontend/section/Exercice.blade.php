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

        <div class="col-10 bg-dark mt-4">



            <section  class="bg-dark  mr-3"  id="classe">
                <h2 class="block-title text-center py-3">
                    Exercice
                </h2>
                <section class="scroll-container " id="mise-en-page">
                   
              @foreach($datas as $element)
                    <article class="post">
                        <div class="post-content">
                            <div class="row text-center">
                                <div class="col-6">
<<<<<<< HEAD
                                    <h3 class="post-title">Exercice {{$element->nom}}</h3>
=======
                                    <h3 class="text-white post-title">{{$compteur++}}) &nbsp; Exercice Laravel</h3>
>>>>>>> e1393bf7b6bb21838ddf3757ffb098f9f70f97b1
        
                                </div>
                                <div class="col-6">
                                <form action="/exercice/{{$element->id}}/download" method="post">
                                    @csrf
                                        <button type="submit" style="max-width: max-content" class="btn btn-block text-white btn-success">
                                        Download
                                        </button> 
                                    </form>
                                    
                                </div>
                            </div>
                                                
                         </div>
                   </article>
<<<<<<< HEAD
              @endforeach
                   
=======
              
                   <article class="post">
                    <div class="post-content">
                        <div class="row text-center">
                            <div class="col-6">
                                <h3 class="text-white post-title">{{$compteur++}}) &nbsp; Exercice Laravel</h3>
    
                            </div>
                            <div class="col-6">
                                <button type="button" style="max-width: max-content" class="btn btn-block text-white btn-success">
                                    Download
                                    </button> 
                            </div>
                        </div>
                                            
                     </div>
               </article>
               
>>>>>>> e1393bf7b6bb21838ddf3757ffb098f9f70f97b1
              </section>


                
            </section>
              
        </div>

    </div>
@endsection