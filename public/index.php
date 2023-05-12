<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Burn Your Crypto</title>
    <link rel="shortcut icon" href="assets/img/favicon.ico">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/animejs@3.0.1/lib/anime.min.js"></script>
    <script src="js/vinyleanim.js" defer></script>
    <!-- <script src="js/rythm.js" defer></script> -->
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
                    <li><a href="index.php" class="here">Accueil</a></li>
                    <li><a href="galery.php">Notre Galerie</a></li>
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

        <!-- Logo + texte de présentation du site -->

        <section class="presentation">
            <div class="presentation-head">
              <div class="rythm">
                <div class="rythm-bar rythm-bar-1"></div>
                <div class="rythm-bar rythm-bar-2"></div>
                <div class="rythm-bar rythm-bar-3"></div>
                <div class="rythm-bar rythm-bar-4"></div>
                <div class="rythm-bar rythm-bar-5"></div>
              </div>
              <img id="logo" src="assets/img/logo-businesscase.webp" alt="Logo du site de NFT de Tatty Josy">
              <div class="rythm">
                <div class="rythm-bar rythm-bar-6"></div>
                <div class="rythm-bar rythm-bar-7"></div>
                <div class="rythm-bar rythm-bar-8"></div>
                <div class="rythm-bar rythm-bar-9"></div>
                <div class="rythm-bar rythm-bar-10"></div>
              </div>
            </div>
            <h3 class="display-2">Burn Your Crypto</h3>
            <br>
            <p>Amateurs de NFT et de métal, bienvenue sur Burn Your Crypto. <br> Tatty Josy, grande fan de métal a
                décidé de se lancer dans l'aventure des NFT. Ici, vous pourrez afficher, consulter et suivre le cours des NFT
                de pochettes d'album de groupes de métal que vous possedez.</p>
        </section>

        <div class="return">
            <a href="#"><img src="assets/img/angles-up.svg" alt="fleches vers le haut"></a>
        </div>

        <!-- Section affichant les derniers NFT ajoutés sur le site -->

        <section>
            <h2>Les derniers ajouts</h2>

            <div id="carroussel-index" class="carousel slide">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <div class="nfts">
                        <div><img src="assets/img/nft/disturbed-tenthousandfists.jpg" class="cover" alt="Un NFT"></div>
                        <div><img src="assets/img/nft/trivium-ascendancy.jpg" class="cover" alt="Un NFT"></div>
                        <div><img src="assets/img/nft/disturbed-immortalized.jpg" class="cover" alt="Un NFT"></div>
                        <div><img src="assets/img/nft/disturbed-divisive.jpg" class="cover" alt="Un NFT"></div>
                        <div><img src="assets/img/nft/bfmv-handofblood.jpg" class="cover" alt="Un NFT"></div>
                        <div><img src="assets/img/nft/bfmv-screamaimfire.jpg" class="cover" alt="Un NFT"></div>
                        <div><img src="assets/img/nft/bfmv-tempertemper.jpg" class="cover" alt="Un NFT"></div>
                        <div><img src="assets/img/nft/bfmv-thepoison.jpg" class="cover" alt="Un NFT"></div>
                        <div><img src="assets/img/nft/trivium-thecrusade.jpg" class="cover" alt="Un NFT"></div>
                        <div class="vinyles">
                          <img class="vinyle" src="assets/img/utiles/Vinyle.png" alt="Un vinyle">
                          <img class="vinyle" src="assets/img/utiles/Vinyle.png" alt="Un vinyle">
                          <img class="vinyle" src="assets/img/utiles/Vinyle.png" alt="Un vinyle">
                        </div>
                    </div>
                    
                  </div>
                  <div class="carousel-item">
                    <div class="nfts">
                        <div><img src="assets/img/nft/disturbed-indestructible.webp" alt="Un NFT"></div>
                        <div><img src="assets/img/nft/disturbed-immortalized.jpg" alt="Un NFT"></div>
                        <div><img src="assets/img/nft/bfmv-screamaimfire.jpg" alt="Un NFT"></div>
                        <div><img src="assets/img/nft/trivium-thecrusade.jpg" alt="Un NFT"></div>
                        <div><img src="assets/img/nft/bfmv-tempertemper.jpg" alt="Un NFT"></div>
                        <div><img src="assets/img/nft/bfmv-handofblood.jpg" alt="Un NFT"></div>
                        <div><img src="assets/img/nft/disturbed-divisive.jpg" alt="Un NFT"></div>
                        <div><img src="assets/img/nft/bfmv-thepoison.jpg" alt="Un NFT"></div>
                        <div><img src="assets/img/nft/bfmv-tempertemper.jpg" alt="Un NFT"></div>
                        <div class="vinyles">
                          <img class="vinyle" src="assets/img/utiles/Vinyle.png" alt="Un vinyle">
                          <img class="vinyle" src="assets/img/utiles/Vinyle.png" alt="Un vinyle">
                          <img class="vinyle" src="assets/img/utiles/Vinyle.png" alt="Un vinyle">
                        </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="nfts">
                        <div><img src="assets/img/nft/disturbed-tenthousandfists.jpg" alt="Un NFT"></div>
                        <div><img src="assets/img/nft/trivium-ascendancy.jpg" alt="Un NFT"></div>
                        <div><img src="assets/img/nft/disturbed-immortalized.jpg" alt="Un NFT"></div>
                        <div><img src="assets/img/nft/disturbed-divisive.jpg" alt="Un NFT"></div>
                        <div><img src="assets/img/nft/bfmv-handofblood.jpg" alt="Un NFT"></div>
                        <div><img src="assets/img/nft/bfmv-screamaimfire.jpg" alt="Un NFT"></div>
                        <div><img src="assets/img/nft/bfmv-tempertemper.jpg" alt="Un NFT"></div>
                        <div><img src="assets/img/nft/bfmv-thepoison.jpg" alt="Un NFT"></div>
                        <div><img src="assets/img/nft/trivium-thecrusade.jpg" alt="Un NFT"></div>
                        <div class="vinyles">
                          <img class="vinyle" src="assets/img/utiles/Vinyle.png" alt="Un vinyle">
                          <img class="vinyle" src="assets/img/utiles/Vinyle.png" alt="Un vinyle">
                          <img class="vinyle" src="assets/img/utiles/Vinyle.png" alt="Un vinyle">
                        </div>
                    </div>
                  </div>
                </div>
                <button onclick="animation.play(anime())" class="carousel-control-prev" type="button" data-bs-target="#carroussel-index" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button onclick="animation.play(anime())" class="carousel-control-next" type="button" data-bs-target="#carroussel-index" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
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