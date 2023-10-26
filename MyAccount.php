<?php require_once "utils/common.php" ?>
<?php require_once "utils/database.php" ?>
<!DOCTYPE html>
<?php require_once SITE_ROOT. "partials/head.php" ?>
<html>
   
    <body class="monespace">
       
    <?php require_once SITE_ROOT. "partials/header.php" ?>
    
        <div class="banner2"> 
            <h1> Mon espace </h1>
        </div><br>

         
            <form class="modifier">
                <div class="modifiermail">

                    <h2 class="modif">Modification de l'adresse email</h2>

                    <form action="/page-traitement-donnees" method="post">
                    <input type="email" id="email" placeholder="Ancien email" required><br>
                    <input type="email" id="email" placeholder="Nouvel email" required><br>
                    <input type="password" id="password" placeholder="Mot de passe" required><br>
                    <button type="submit">Envoyer</button>
                </div>

                <div class="mofifiermdp">
                    <h2 class="modif">Modification du mot de passe</h2>
                    <input type="password" id="password" placeholder="Ancien mot de passe" required><br>
                    <input type="password" id="password" placeholder="Nouveau mot de passe" required><br>
                    <input type="password" id="password" placeholder="Confirmer le nouveau mot de passe" required><br>
                    <button class="ps" type="submit">Envoyer</button>
                </div>
            </form>
        
        <?php require_once SITE_ROOT. "partials/footer.php" ?>
        
    </body>

</html>