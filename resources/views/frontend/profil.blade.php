@extends('frontend.template')

@section('content')
            
<!-- this is the markup. you can change the details (your own name, your own avatar etc.) but don’t change the basic structure! -->
<div id="body">
    <aside class="profile-card">
    
      <header>
      
          <!-- here’s the avatar -->
          <a href="http://victory-design.ru/">
              <img src="https://cdn.funnyisms.com/0575c2a0-c3e7-4e32-9af9-651a3093a685.jpg" />
          </a>
          
          <!-- the username -->
          <h1>{{Auth::user()->name}}</h1>
          
          <!-- and role or location -->
          <h2>Web Developer</h2>
          <h2>{{Auth::user()->email}}</h2>
      
      </header>
    
      <!-- bit of a bio; who are you? -->
      <div class="profile-bio">
        
        @foreach ($role as $item)
            @if (Auth::user()->role_id == $item->id)
                <p>Role : {{$item->name}}</p>
            @endif
        @endforeach
      
      </div>
    
     
    
    </aside>
    <!-- that’s all folks! -->

</div>
  
  


@endsection





