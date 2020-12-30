@extends('adminlte::page')

@section('content')

<div class="container w-50">
    <h1 class="text-center">Modifier les profils</h1>
    <form action="/classe-admin/{{$datas->id}}" method="post">
    @csrf
    @method('PUT')
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Classe</th>
                <th scope="col">action</th>
                
              </tr>
            </thead>
            <tbody>
                <tr>
                  <th scope="row">{{$datas->id}}</th>
                  <td>
                    <input type="text" name="classe" value="{{$datas->classe}}">
                  </td>
                  
                  
                  <td>
                    <button type="submit" class="btn btn-success">modifier</button>
                  </td>
                </tbody>
              </table>
            </form>
  </div>
  

@endsection