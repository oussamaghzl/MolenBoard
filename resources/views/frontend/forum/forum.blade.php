@extends('frontend.template')

@section('content')
    
<h1 class="text-center">Foire aux questions</h1>

<div class="container w-50">
    <table class="table text-center">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Sujet</th>
      </tr>
    </thead>
    <tbody>
        @foreach($sujet as $elem)
      <tr>
      <th scope="row">{{$elem->id}}</th>
      <th scope="row"><a href="/forum/{{$elem->id}}">{{$elem->sujet}}</a></th>
      </tr>
      @endforeach
    </tbody>
  </table>
  <h3 class="text-center">Ajouter un sujet</h3>

  <form action="/forum" method="post">
    @csrf
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Sujet</label>
      <input type="text" class="form-control" name="sujet" placeholder="sujet" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <button type="submit" class="btn btn-primary">Ajouter</button>
  </form>

  </div>

@endsection