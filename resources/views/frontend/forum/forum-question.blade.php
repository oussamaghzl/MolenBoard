@extends('frontend.template')

@section('content')
    
<h1 class="text-center">{{$sujet->sujet}}</h1>



<div class="container w-50">
    <table class="table text-left">
    <thead>
      <tr>
        <th scope="col">Réponse</th>
      </tr>
    </thead>
    <tbody>
        @foreach($question as $element)
        @if($element->sujet_id == $sujet->id)
      <tr>
      <th scope="row">{{$element->question}}</th>
      </tr>
      @endif
      @endforeach
    </tbody>
  </table>
</div>

<div class="container w-50">
<form action="/forum-question" method="post">
        @csrf
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Quelle est votre question?</label>
          <textarea type="text" class="form-control" name="question" id="exampleInputEmail1" aria-describedby="emailHelp">
          </textarea>
        <input type="text" name="sujet_id" value="{{$sujet->id}}" class="d-none">
          
        </div>
        <button type="submit" class="btn btn-primary">Ajouter</button>
      </form>
</div>


@endsection