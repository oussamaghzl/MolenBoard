@extends('frontend.template')

@section('content')
    <div class="row mx-0 pb-4" id="sectionClasse">

        <div class="col-2 text-center ">
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
                    <div class="cardd cardd-1 mx-auto d-flex justify-content-center">
                        <h3>Exercice</h3>
                    </div>

                </a>

                
                        
            </div>
        </div>

        <div class="col-10 bg-dark my-4" >
            
            <section class=" mr-3 bg-dark"  id="classe">
                <h2 class="block-title text-center py-3">
                    Liste des élèves
                </h2>
                    <div class="card  shadow mt-4 mx-3 container-fluid w-75 mx-auto mt-5">
                        
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Prenom</th>
                                            <th>Email</th>
                                        </tr>
                                    </thead>
                                   
                                    <tbody>
                                        @foreach ($eleve as $item)
                                            @if ($item->role_id == 3)
                                                
                                                <tr>
                                                    <td>{{$compteur++}}</td>
                                                    <td>{{$item->name}}</td>
                                                    <td>{{$item->email}}</td>
                                                </tr>
                                            @else
                                                
                                            @endif
                                            

                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>


                
            </section>
              
        </div>

    </div>
@endsection