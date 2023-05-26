<?php

$pageTitle = 'contact';

include 'header.php';

?>


    <!-- Corps de la page -->
    <main>

    <?php

    // test pour savoir si le formulaire a déjà été validé ou si on doit l'afficher pour la première fois
    if(empty($_POST['nom']) && empty($_POST['mail']) && empty($_POST['tel']) && empty($_POST['message'])){
        formulaire();
    // test si il manque une des valeurs obligatoires
    }else if(empty($_POST['nom']) || empty($_POST['mail']) || empty($_POST['message'])){
        formulaire();
    }else{
        // message si toutes les valeurs sont transmises
        echo 'Merci d\'avoir transmis vos données';
    }

    function formulaire(){
    ?>
        <form class="contactez-nous" method="post">
            <h2>Contact</h2>
            <fieldset>
                <legend>Une remarque ? Une suggestion ? N'hésitez pas à m'écrire.</legend>
                <div>
                    <label for="nom">Votre nom  <?=(isset($_POST['nom']))?'<span style="color:red"><i> - Obligatoire</i></span>':'*' ?></label>
                    <input type="text" id="nom" name="nom" class="text" value="<?=$_POST['nom']??''?>">
                </div>
                <div>
                    <label for="mail">Votre e-mail <?=(isset($_POST['mail']))?'<span style="color:red"><i> - Obligatoire</i></span>':'*' ?></label>
                    <input type="email" id="mail" name="mail"class="text" value="<?=$_POST['mail']??''?>">
                </div>
                <div>
                    <label for="tel">Votre téléphone </label>
                    <input type="tel" id="tel" name="tel" class="text" value="<?=$_POST['tel']??''?>">
                </div>
                <div>
                    <label for="message">Votre message <?=(isset($_POST['message']))?'<span style="color:red"><i> - Obligatoire</i></span>':'*' ?></label>
                    <textarea id="message" name="message"placeholder="Saisissez votre message" value="<?=$_POST['message']??''?>"></textarea>
                </div>
                <p style="font-size:.8rem"><i>Les champs marqués d'une * sont obligatoires.</i></p>
                <div>
                    <input type="submit" value="Envoyer">
                </div>
            </fieldset>

        </form>
        <?php }
    ?>
    </main>

    <?php
    include 'footer.php';
?>