
function createNewDivOnIntersection() {
    // Récupération de la div cible
    const scrollTarget = document.querySelector('#last');
    const title = document.querySelector('.main-title');
  
    // Création de l'observer avec une fonction callback
    const observer = new IntersectionObserver(entries => {
      // Si la div cible est visible à l'écran
      if (entries[0].isIntersecting) {
        let myTitle = document.querySelector('.short');
        myTitle.style.opacity = '0';
      }else{
        let myTitle = document.querySelector('.short');
        myTitle.style.opacity = '1';
      }
    });
  
    // Ajout de la div cible à l'observer
    observer.observe(title);
  }


  // Appel de la fonction pour créer une nouvelle div lorsqu'une div avec la classe "scroll-target" devient visible à l'écran
createNewDivOnIntersection();
