
<header>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="col-8 d-flex align-items-center">
            <img src="./img/point_bleu.png" alt="">
            <h3 class="p-1">.BOARD</h3>
        </div>
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav col-4">
              <div class=" hover1 mx-3">
                <div class="buttons">
    
                    <a href="" class="btn btn-1">
                      <svg style="width: 10px" >
                        <rect x="0" y="0" fill="none" width="10%" height="100%"/>
                      </svg>
                     Hover
                    </a>
                    
                </div>
              </div>

              <div class="mx-3">
                  <a class="nav-item nav-link active" href="{{ route("classe") }}">Classe</span></a>
              </div>

              <div class="mx-3">
                  <a class="nav-item nav-link active" href="{{ route("accueil") }}">Forum</span></a>
              </div>

              <div class="mx-3">
                  <a class="nav-item nav-link active" href="{{ route("accueil") }}">Contact</span></a>
              </div>
          </div>
        </div>
      </nav>
</header>
