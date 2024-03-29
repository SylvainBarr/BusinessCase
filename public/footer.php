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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>

</html>