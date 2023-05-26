
<?php
$pageTitle = 'accueil';
include 'header.php';
?>

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
            <h3 class="display-2 main-title">Burn Your Crypto</h3>
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
            <h2 id="last">Les derniers ajouts</h2>

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

    <?php
    include 'footer.php';
    ?>