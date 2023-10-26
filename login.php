<?php require_once "utils/common.php" ?>
<?php require_once "utils/database.php" ?>
<!DOCTYPE html>
<html>
<?php require_once SITE_ROOT. "partials/head.php" ?>
<body class="login">
    
<?php require_once SITE_ROOT. "partials/header.php" ?>


    <div class="banner2" >
        <h1> CONNEXION </h1>
    </div>
        </br>
        </br>
    <body>   
    <div class="formulaire">
    
        <form >
            <input class="emailformu" name="mail" type="email" placeholder="Email" style="width: 300px; height: 30px;"/>
                <br/>
                <br/>
            <input class="emailformu" name="password" type="password" placeholder="Mot de passe" style="width: 300px; height: 30px;" />
                <br/>
                <br/>
            <button class="buttonform" type="submit" style="width: 90px; height: 30px;" > Connexion </button>

            <span>
            <?php 
            $pdo = connectToDbAndGetPdo();
            $pdoStatement = $pdo->prepare('SELECT * FROM users WHERE id = :id' );
            $pdoStatement->execute([
            ':id' => $_SESSION['user_id'] = 1,
            ]);
            $userId= $pdoStatement->fetchAll(); 
            
            foreach($userId as $user) {
                if(isset($_GET['mail'])== $user->email){
                    if(isset($_GET['password'])== $user->passwords){
                        echo "vous êtes connecté" ;
                    }
                 }
            } 
        
            ?>
            </span>
            

        </form>

    </div>

<?php require_once SITE_ROOT. "partials/footer.php" ?>
        
</body>
</html>