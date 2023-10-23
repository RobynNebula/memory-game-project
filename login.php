<!DOCTYPE html>
<html>

        <?php require_once SITE_ROOT.'partials/head.php' ?>

        
<body class="login">
        <?php require_once SITE_ROOT.'partials/header.php' ?>
        <div class="banner2" >
            <h1> CONNEXION </h1>
        </div>
            </br>
            </br>  
        <div class="formulaire">
     
        <form action="POST">
            <input class="emailformu" type="email" placeholder="Email" style="width: 300px; height: 30px;"/>
                <br/>
                <br/>
            <input class="emailformu" type="password" placeholder="Mot de passe" style="width: 300px; height: 30px;" />
                <br/>
                <br/>
            <button class="buttonform" type="submit" style="width: 90px; height: 30px;" > Connexion </button>
        </form>
   
        </div>

        <?php require_once SITE_ROOT.'partials/footer.php' ?>
</body>
</html>