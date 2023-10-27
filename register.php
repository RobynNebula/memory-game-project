<?php require_once "utils/common.php" ?>
<?php require_once "utils/database.php" ?>
<!DOCTYPE html>
<?php require_once SITE_ROOT . "partials/head.php" ?>
<html>

<body class="inscription">

    <?php require_once SITE_ROOT . "partials/header.php" ?>


    <div class="banner2">
        <h1>INSCRIPTION</h1>
    </div>

    <form class="formulaire">
        <form action="/page-traitement-donnees" method="post">
            <input type="text" name="mail" placeholder="Email" required><br>

                <span>
                    <?php if (isset($message)) {
                                  echo $message ;} ?> 
                </span>
            
            <input type="text" id="pseudo" name="pseudo" placeholder="Pseudo" required><br>

            <span>
                <?php
                if (isset($_GET['pseudo'])) {
                    if (strlen($_GET['pseudo']) < 4) {
                        echo 'Votre pseudo doit contenir minimum 4 caractères.';
                    }
                }
                $pdo = connectToDbAndGetPdo();
                if (isset($_GET['pseudo'])) {
                    $pdoStatement = $pdo->prepare('SELECT COUNT(pseudo) AS nbr FROM users WHERE pseudo = :pseudo');
                    $pdoStatement->execute([':pseudo' => $_GET['pseudo']]);
                    $user = $pdoStatement->fetch();
                    if ($user->nbr != 0) { {
                            echo "Ce pseudo est déjà utilisé ";
                        }
                    }
                }?>
            </span>


            <input type="password" name=password id="password" placeholder="Mot de passe" required><br>
            <input type="password" name="passwordConfirm" id="passwordConfirm" placeholder="Confirmez le mot de passe" required><br>

            <span>
            <?php  
            $passwordPattern = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*]).{8,}$/'; 
            if (isset($_GET['password'])) {
                if(!preg_match($passwordPattern,$_GET['password'])) {
                    echo 'Le mot de passe doit contenir :
                    - au moins 8 caractères,
                    - une minuscule,
                    - une majuscule,
                    - un chiffre
                    - un caractère spécial';
                }  
                if ($_GET['password'] != $_GET['passwordConfirm']){
                    echo  'Les 2 mots de passe sont différents.';
                } }
            ?>
            </span>

            
            <button class="ps" type="submit">Inscription</button>

            <?php

            if(isset($_GET["password"])){
                $pdo = connectToDbAndGetPdo();
                $pdoStatement = $pdo->prepare('INSERT INTO users ( email, passwords, pseudo) VALUES
                (:email, :passwords, :pseudo)');
                $pdoStatement->execute([
                ':email' => $_GET['mail'],
                ':passwords' => hash('sha256', $_GET['password']),
                ':pseudo' => $_POST['pseudo'],
                ]);
                
            } 
            
            ?>

        </form>
        </div>

        <?php require_once SITE_ROOT . "partials/footer.php" ?>

</body>

</html>