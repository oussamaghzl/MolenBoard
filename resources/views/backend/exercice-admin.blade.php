@extends('adminlte::page')

@section('content')

<h1 class="text-center">Ajouter des exercices</h1>


<div class="container w-50">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">Nom</th>
            <th scope="col">Exercices</th>
            <th scope="col">Classe</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
               
                    <form action="/exercice-admin" method="post" enctype="multipart/form-data">
                        @csrf
                        <td>
                            <input type="text" name="nom">
                        </td>
                        <td>
                          <input type="file" name="fichier">
                      </td>
                      <td>
                          <select name="classe" id="">
                              @foreach($classe as $element)
                          <option value="{{$element->id}}">{{$element->classe}}</option>
                              @endforeach
                          </select>
                      </td>
                      <td>
                        <a href="/exercice-admin">
                            <button type="submit" class="btn btn-success">Ajouter</button>
                        </a>
                      </td> 
                    </form>
                      
                      
                    </tbody>
                    
                  </table>
    </div>

@endsection