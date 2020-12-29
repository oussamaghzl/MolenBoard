
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
          
          <div class="navbar-nav col-4 d-flex align-items-end">

            <div class="fancy-button__container mx-4">
              <div class="fancy-button__bg-box"></div>
                <a href="{{ route("accueil") }}" class="fancy-button btn">Accueil</a>
            </div> 

            <div class="fancy-button__container mx-4">
              <div class="fancy-button__bg-box"></div>
                <a href="{{ route("classe") }}" class="fancy-button btn">Classe</a>
            </div> 

            <div class="fancy-button__container mx-4">
              <div class="fancy-button__bg-box"></div>
                <a href="{{ route("accueil") }}" class="fancy-button btn">Forum</a>
            </div> 

            <div class="fancy-button__container mx-4">
              <div class="fancy-button__bg-box"></div>
                <a href="{{ route("accueil") }}" class="fancy-button btn">Contact</a>
            </div> 
            <div>
              <i class="fas fa-user-alt"></i>
            </div>
          </div>
        </div>
      </nav>
</header>
