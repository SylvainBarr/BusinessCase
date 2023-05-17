<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallerie</title>
    <link rel="shortcut icon" href="assets/img/favicon.png">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/galery-scroll.js" defer></script>
</head>
<body>

    <!-- Header du site qui restera identique sur les différentes pages -->
    <header>
        <a href="index.php"><img src="assets/img/logo-businesscase.webp" alt="Logo du site de NFT de Tatty Josy"></a>
        <h1>B-Y-C</h1>
        <button class="btn btn-outline-dark bouton-menu" type="button" data-bs-toggle="offcanvas"
            data-bs-target="#menu-slide" aria-controls="menu-slide">
            <svg xmlns="http://www.w3.org/2000/svg" width="2rem" height="2rem" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
                <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5ZM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5 5 5Z"/>
            </svg>
        </button>

        <!-- Nav qui sera masquée tant qu'on ne clique pas sur le bouton de menu -->

        <div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="menu-slide"
            aria-labelledby="menu-slideLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="menu-slideLabel">Menu</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="nav1">
                    <li><a href="index.php">Accueil</a></li>
                    <li><a href="galery.php" class="here">Notre Galerie</a></li>
                    <li><a href="mygalery.php">Mes NFT</a></li>
                    <li><a href="about.php">A propos</a></li>
                    <li><a href="contact.php">Nous contacter</a></li>
                </ul>
                <div class="nav2">
                    <ul>
                        <li><a href="inscrip.php" class="btn btn-outline-dark">Inscription</a></li>
                        <li>
                            <button type="button" class="btn btn-outline-dark" data-bs-toggle="modal" data-bs-target="#Connexion-backdrop">Connexion
                            </button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        
    </header>


    <!-- Corps de la page -->
    <main>


      <!-- Barre de recherche de la gallerie -->
     
      <form id = 'search-menu'>
        <div class="search-form">
          <input class="search-bar" type="text" value="" />
          <input class="search-submit" type="submit" value=""/>
        </div>
          <p class="tri">
            <select class="form-select" aria-label="Default select example">
              <option value="0" selected>Date d'ajout</option>
              <option value="1">Groupe</option>
              <option value="2">Style</option>
              <option value="3">Prix d'achat</option>
              <option value="4">Date de sortie</option>
            
            </select>
            <span> &nbsp;Trier par :</span>
          </p>
      </form>



      <!-- Affichage de la gallerie des NFT -->
      
      <section class="gallerie">
        <div class="card card-main-galery">
          <a href=""><img src="./assets/img/nft/bfmv-handofblood.jpg" class="card-img-top" alt=""></a>
          <div class="card-body">
            <p class="card-text">Bullet For My Valentine - Hand of blood</p>
          </div>
        </div>
        <div class="card card-main-galery">
          <a href=""><img src="./assets/img/nft/bfmv-handofblood.jpg" class="card-img-top" alt=""></a>
          <div class="card-body">
            <p class="card-text">Bullet For My Valentine - Hand of blood</p>
          </div>
        </div>
        <div class="card card-main-galery">
          <a href=""><img src="./assets/img/nft/bfmv-handofblood.jpg" class="card-img-top" alt=""></a>
          <div class="card-body">
            <p class="card-text">Bullet For My Valentine - Hand of blood</p>
          </div>
        </div>
        <div class="card card-main-galery">
          <a href=""><img src="./assets/img/nft/bfmv-handofblood.jpg" class="card-img-top" alt=""></a>
          <div class="card-body">
            <p class="card-text">Bullet For My Valentine - Hand of blood</p>
          </div>
        </div>
        <div class="card card-main-galery">
          <a href=""><img src="./assets/img/nft/bfmv-handofblood.jpg" class="card-img-top" alt=""></a>
          <div class="card-body">
            <p class="card-text">Bullet For My Valentine - Hand of blood</p>
          </div>
        </div>
        <div class="card card-main-galery">
          <a href=""><img src="./assets/img/nft/bfmv-handofblood.jpg" class="card-img-top" alt=""></a>
          <div class="card-body">
            <p class="card-text">Bullet For My Valentine - Hand of blood</p>
          </div>
        </div>
        <div class="card card-main-galery">
          <a href=""><img src="./assets/img/nft/bfmv-handofblood.jpg" class="card-img-top" alt=""></a>
          <div class="card-body">
            <p class="card-text">Bullet For My Valentine - Hand of blood</p>
          </div>
        </div>
        <div class="card card-main-galery">
          <a href=""><img src="./assets/img/nft/bfmv-handofblood.jpg" class="card-img-top" alt=""></a>
          <div class="card-body">
            <p class="card-text">Bullet For My Valentine - Hand of blood</p>
          </div>
        </div>
        <div class="card card-main-galery">
          <a href=""><img src="./assets/img/nft/bfmv-handofblood.jpg" class="card-img-top" alt=""></a>
          <div class="card-body">
            <p class="card-text">Bullet For My Valentine - Hand of blood</p>
          </div>
        </div>
        <div class="card card-main-galery">
          <a href=""><img src="./assets/img/nft/bfmv-handofblood.jpg" class="card-img-top" alt=""></a>
          <div class="card-body">
            <p class="card-text">Bullet For My Valentine - Hand of blood</p>
          </div>
        </div>
        <div class="card card-main-galery">
          <a href=""><img src="./assets/img/nft/bfmv-handofblood.jpg" class="card-img-top" alt=""></a>
          <div class="card-body">
            <p class="card-text">Bullet For My Valentine - Hand of blood</p>
          </div>
        </div>
        <div class="card card-main-galery">
          <a href=""><img src="./assets/img/nft/bfmv-handofblood.jpg" class="card-img-top" alt=""></a>
          <div class="card-body">
            <p class="card-text">Bullet For My Valentine - Hand of blood</p>
          </div>
        </div>
        <div class="card card-main-galery">
          <a href=""><img src="./assets/img/nft/bfmv-handofblood.jpg" class="card-img-top" alt=""></a>
          <div class="card-body">
            <p class="card-text">Bullet For My Valentine - Hand of blood</p>
          </div>
        </div>
        <div class="card card-main-galery">
          <a href=""><img src="./assets/img/nft/bfmv-handofblood.jpg" class="card-img-top" alt=""></a>
          <div class="card-body">
            <p class="card-text">Bullet For My Valentine - Hand of blood</p>
          </div>
        </div>
        <div class="card card-main-galery">
          <a href=""><img src="./assets/img/nft/bfmv-handofblood.jpg" class="card-img-top" alt=""></a>
          <div class="card-body">
            <p class="card-text">Bullet For My Valentine - Hand of blood</p>
          </div>
        </div>
        
        <div class="scroll-target">

        </div>

        
        
      </section>




    </main>

    <!-- Footer à reprendre sur toutes les pages -->
    <footer>
        <img src="assets/img/favicon.png" alt="Logo du site de NFT de Tatty Josy">
        <span>Tous droits réservés &copy; <a href="index.php">Burn Your Crypto</a> / 2023</span>
    </footer>


    

    <!-- Modal formulaire connexion-->

    <div class="modal fade text-dark" id="Connexion-backdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="Connexion-backdropLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h2 class="modal-title fs-5" id="Connexion-backdropLabel">Connectez-vous !</h2>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="connexion-form">
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Adresse e-mail</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required placeholder="xxx@exemple.com">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Mot de passe</label>
                      <input type="password" class="form-control" id="exampleInputPassword1" required>
                      <div id="emailHelp" class="form-text"><a href="#">Mot de passe oublié ?</a></div>
                    </div>
                    <div class="mb-3 form-check">
                      <input type="checkbox" class="form-check-input" id="exampleCheck1">
                      <label class="form-check-label" for="exampleCheck1">Se souvenir de moi</label>
                    </div>
                    <button type="submit" class="btn btn-outline-dark">Connexion</button>
                  </form>
            </div>
          </div>
        </div>
      </div>

    <!-- Script JS bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</body>
</html>