@extends('adminlte::page')

@section('content')

<h1 class="text-center">Elèves dans la classe</h1>
<h2 class="text-center"><u>{{$datas->classe}}</u></h2>
<div class="container w-50">
    <table class="table text-center">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Eleve</th>
      </tr>
    </thead>
    <tbody>
        @foreach($eleve as $elem)
        @if($elem->classe_id == $datas->id)
      <tr>
      <th scope="row">{{$elem->id}}</th>
        <td>{{$elem->name}}</td>
      </tr>
      @endif
      @endforeach
    </tbody>
  </table>
  </div>
 
@endsection