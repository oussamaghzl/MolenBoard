
<header style="background:url(./img/back.png); background-repeat: repeat; background-size: 100%;">
    <nav class=" container-fluid mx-auto w-75 navbar navbar-expand-lg navbar-light">
      <div class="row text-center">

        <div class="col-6 d-flex align-items-center">
            <img src="./img/point_bleu.png" alt="">
            <h3 class="p-1">.BOARD</h3>
        </div>
        
        <div class="collapse navbar-collapse col-6" id="navbarNavAltMarkup">
          <div class=" d-flex ">

            <div class="fancy-button__container mx-4">
              <div class="fancy-button__bg-box"></div>
              <a href="{{ route("accueil") }}" class="fancy-button btn btn-light">Accueil</a>
            </div> 

            <div class="fancy-button__container mx-4">
              <div class="fancy-button__bg-box"></div>
              <a href="{{ route("classe") }}" class="fancy-button btn btn-light">Classe</a>
            </div> 

            <div class="fancy-button__container mx-4">
              <div class="fancy-button__bg-box"></div>
              <a href="{{ route("classe") }}" class="fancy-button btn btn-light">Forum</a>
            </div> 

            <div class="fancy-button__container mx-4">
              <div class="fancy-button__bg-box"></div>
              <a href="{{ route("contact") }}" class="fancy-button btn btn-light">Contact</a>
            </div>

            <ul class="navbar-nav ml-auto">

             
            
              @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    
                        <li class="nav-item dropdown no-arrow">
                            
                                                            @guest
                            @if (Route::has('login'))
                                <a style="text-decoration:none" href="{{ route('login') }}" class="text-sm  underline">
                                    <button type="button" class="btn btn-block text-white btn-info">
                                        Login
                                    </button>
                                </a>
                            @endif
                            
                            @if (Route::has('register'))
                                <a style="text-decoration:none" href="{{ route('register') }}" class="ml-4 text-sm  underline">
                                    <button type="button" class="btn btn-block text-white btn-success">
                                    Register
                                    </button>
                                </a>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('profil') }}">
                                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Profile
                                    </a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                            </div>
                        </li>                    
                    
                </div>
            @endif
              

          </ul>

          </div>
        </div>

      </div>
      </nav>
</header>
