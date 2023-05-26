<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php
    
    switch($pageTitle){
        case 'accueil':
            echo 'Burn Your Crypto';
            break;
        case 'about':
            echo 'A propos';
            break;
        case 'contact':
            echo 'Contactez-nous';
            break;
        case 'galery':
            echo 'Notre collection';
            break;
        case 'mygalery':
            echo 'Ma gallerie perso';
            break;
    }

    ?></title>
    <link rel="shortcut icon" href="assets/img/favicon.ico">
    <link rel="stylesheet" href="css/style.css">
    <?=($pageTitle == 'accueil')?'<script src="https://cdn.jsdelivr.net/npm/animejs@3.0.1/lib/anime.min.js"></script><script src="js/vinyleanim.js" defer></script><script src="js/title.js" defer></script>':''?>
    <!-- <script src="js/rythm.js" defer></script> -->
    <?=($pageTitle == 'galery')?'<script src="js/galery-scroll.js" defer></script>':''?>
</head>

<body>

    <!-- Header du site qui restera identique sur les différentes pages -->
    <header>
        <a href="index.php"><img src="assets/img/logo-businesscase.webp" alt="Logo du site de NFT de Tatty Josy"></a>
        <h1 class = "short display-5">B<span class="display-6">urn </span>Y<span class="display-6">our </span>C<span class="display-6">rypto</span></h1>
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
                    <li><a href="index.php" <?=($pageTitle == 'accueil')?'class="here"':''?>>Accueil</a></li>
                    <li><a href="galery.php" <?=($pageTitle == 'galery')?'class="here"':''?>>Notre Galerie</a></li>
                    <li><a href="mygalery.php" <?=($pageTitle == 'mygalery')?'class="here"':''?>>Mes NFT</a></li>
                    <li><a href="about.php" <?=($pageTitle == 'about')?'class="here"':''?>>A propos</a></li>
                    <li><a href="contact.php" <?=($pageTitle == 'contact')?'class="here"':''?>>Nous contacter</a></li>
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