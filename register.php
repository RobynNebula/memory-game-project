<?php require_once "utils/common.php" ?>
<!DOCTYPE html>
<?php require_once SITE_ROOT. "partials/head.php" ?>
<html>

<body class="inscription"> 

<?php require_once SITE_ROOT. "partials/header.php" ?>


    <div class="banner2"> 
        <h1>INSCRIPTION</h1>
    </div>
    
        <form class="formulaire">
            <form action="/page-traitement-donnees" method="post">
            <input type="email" id="email" placeholder="Email" required><br>
            <input type="text" id="pseudo" placeholder="Pseudo" required><br>
            <input type="password" id="password" placeholder="Mot de passe" required><br>
            <input type="password" id="password" placeholder="Confirmez le mot de passe" required><br>
            <button class="ps" type="submit">Inscription</button>
        </form>
    </div>

    <?php require_once SITE_ROOT. "partials/footer.php" ?>

</body>
</html>