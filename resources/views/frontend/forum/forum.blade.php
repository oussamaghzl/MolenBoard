@extends('frontend.template')

@section('content')
    
<h1 class="text-center">Foire aux questions</h1>

<div class="box box-info bg-dark text-white container py-5 px-2">
  
  


  <div class="box-body">
    <div class="table-responsive">
      <table class="table no-margin">
        <thead>
        <tr class="text-center text-white">
          <th>Order </th>
          <th>Sujet</th>
        </tr>
        </thead>
        <tbody>

          @foreach($sujet as $elem)
          <tr class="text-center text-white">
          <th  scope="row">{{$elem->id}}</th>
          <th scope="row"><a href="/forum/{{$elem->id}}">{{$elem->sujet}}</a></th>
          </tr>
      @endforeach

        
        </tbody>
      </table>
    </div>
  </div>
  
</div>

<h1 class="text-center my-3">Ajouter un sujet</h1>

<div class="box-footer container mt-5 mx-auto bg-dark clearfix">

<form action="/forum" method="post">
  @csrf
  <div class="mb-3">
    <label  for="exampleInputEmail1" class="text-white form-label"></label>
    <input type="text" class="form-control" name="sujet" placeholder="sujet" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <button type="submit" class="text-white btn btn-primary">Ajouter</button>
</form>
</div>


@endsection