@extends('adminlte::page')

@section('content')
<h1 class="text-center">
    Profil
</h1>

<div class="container w-75">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nom</th>
            <th scope="col">email</th>
            <th scope="col">action</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
          @foreach ($datas as $elem)
                <th scope="row">{{$elem->id}}</th>
                      <td>{{$elem->name}}</td>
                      <td>{{$elem->email}}</td>
                      <td>
                        <a href="/profil-admin/{{$elem->id}}/edit">
                            <button type="submit" class="btn btn-success">edit</button>
                        </a>
                      </td>
  
                      <td><form action="/profil-admin/{{$elem->id}}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger">Delete</button>
                      </form></td>
                    </tbody>
                    @endforeach
                  </table>
    </div>
@endsection