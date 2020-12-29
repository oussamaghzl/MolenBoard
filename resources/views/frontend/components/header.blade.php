
<header style="background:url(./img/back.png); background-repeat: repeat; background-size: 100%;">
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="col-6 d-flex align-items-center">
            <img src="./img/point_bleu.png" alt="">
            <h3 class="p-1">.BOARD</h3>
        </div>
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class=" col-6 d-flex align-items-end">

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
              <a href="{{ route("classe") }}" class="fancy-button btn btn-light">Contact</a>
            </div>
            <div class="d-flex align-items-end">
              <a href="">
                <i class="fas fa-user-alt"></i>
              </a>
            </div>
          </div>
        </div>
      </nav>
</header>
