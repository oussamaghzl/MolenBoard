@extends('adminlte::page')

@section('content')
<div class="container w-50">
  <h1 class="text-center pb-4">Liste des roles</h1>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">role</th>
          <th scope="col">action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($datas as $elem)
              <th scope="row">{{$elem->id}}</th>
                    <td>{{$elem->name}}</td>
                    <td>
                      <a href="/admin/{{$elem->id}}/edit">
                          <button type="submit" class="btn btn-success">edit</button>
                      </a>
                    </td>  
                  </tbody>
                  @endforeach
                </table>
  </div>
    

@endsection