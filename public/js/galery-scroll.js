
function createNewDivOnIntersection() {
    // Récupération de la div cible
    const scrollTarget = document.querySelector('.scroll-target');
  
    // Création de l'observer avec une fonction callback
    const observer = new IntersectionObserver(entries => {
      // Si la div cible est visible à l'écran
      if (entries[0].isIntersecting) {
        for (let i = 0; i < 15; i++){
            // Création de la nouvelle div
            let newDiv = document.createElement('div');
            newDiv.classList.add('card', 'card-main-galery')
            newDiv.innerHTML = "<a href=\"\"><img src=\"./assets/img/nft/bfmv-handofblood.jpg\" class=\"card-img-top\" alt=\"\"></a><div class=\"card-body\"><p class=\"card-text\">Bullet For My Valentine - Hand of blood</p>";
            scrollTarget.before(newDiv);
        };
      }
    });
  
    // Ajout de la div cible à l'observer
    observer.observe(scrollTarget);
  }

  // Appel de la fonction pour créer une nouvelle div lorsqu'une div avec la classe "scroll-target" devient visible à l'écran
createNewDivOnIntersection();
