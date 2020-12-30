@extends('adminlte::page')

@section('content')

<h1 class="text-center">Création de classe</h1>

<div class="container d-flex align-items-center justify-content-center">
    <div>
    <form action="/classe" method="post" class="m-5">
    @csrf
        
        <h3>Nom de la classe :</h3>
        <input type="text" name="nom" placeholder="nom" style="width: 400px">
        <br>
        <button type="submit" class="mt-3 btn btn-success">Ajouter</button>
    </form>
    

    <h1 class="text-center mb-5">Toutes les classes</h1>
          <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Classe</th>
                <th scope="col"></th>
                <th scope="col">action</th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
              @foreach ($datas as $elem)
                    <th scope="row">{{$elem->id}}</th>
                          <td>{{$elem->classe}}</td>
                          <td>
                            <a href="/classe/{{$elem->id}}">
                              <button type="submit" class="btn btn-primary">Voir</button>
                          </a>
                        </td>
                          <td>
                            <a href="/classe/{{$elem->id}}/edit">
                                <button type="submit" class="btn btn-success">Editer</button>
                            </a>
                          </td>
                          <td><form action="/classe/{{$elem->id}}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger">Delete</button>
                          </form></td>
                
                        </tbody>
                        @endforeach
                      </table>

@endsection