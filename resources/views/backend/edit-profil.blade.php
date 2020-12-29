@extends('adminlte::page')

@section('content')

<div class="container w-75">
    <h1 class="text-center">Modifier les profils</h1>
    <form action="/profil/{{$edit->id}}" method="post">
    @csrf
    @method('PUT')
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nom</th>
                <th scope="col">email</th>
                <th scope="col">Role</th>
                <th scope="col">Classe</th>
                <th scope="col">action</th>
              </tr>
            </thead>
            <tbody>
                <tr>
                  <th scope="row">{{$edit->id}}</th>
                  <td>
                    <input type="text" name="name" value="{{$edit->name}}">
                  </td>
                  <td>
                    <input type="text" name="email" value="{{$edit->email}}">
                  </td>
                  <td>
                      <select name="role_id" id="">
                          @foreach($role as $element)
                      <option value="{{$element->id}}">{{$element->name}}</option>
                        @endforeach
                      </select>
                  </td>
                  <td>
                    <select name="classe_id" id="">
                        @foreach($classe as $element)
                    <option value="{{$element->id}}">{{$element->classe}}</option>
                      @endforeach
                    </select>
                </td>
                  
                  <td>
                    <button type="submit" class="btn btn-success">modifier</button>
                  </td>
                </tbody>
              </table>
            </form>
  </div>


@endsection