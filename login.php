<?php require_once "utils/common.php" ?>
<?php require_once "utils/database.php" ?>
<?php

if (isset($_GET['email']) && isset($_POST['password'])) {
    $pdo = connectToDbAndGetPdo();
    $pdoStatement = $pdo->prepare('SELECT * FROM users WHERE email = :email AND passwords = :passwords');
    $pdoStatement->execute([
        ':email' => $_GET['email'],
        ':passwords' => hash('sha256', $_GET['password']),
    ]);
    $user = $pdoStatement->fetch();

    if($user){
        $_SESSION['user_id'] = $user->id;
    }
}
?>
<!DOCTYPE html>
<html>
<?php require_once SITE_ROOT . "partials/head.php" ?>

<body class="login">

    <?php require_once SITE_ROOT . "partials/header.php" ?>


    <div class="banner2">
        <h1> CONNEXION </h1>
    </div>
    </br>
    </br>

    <body>
        <div class="formulaire">

            <form>
                <input class="emailformu" name="email" type="email" placeholder="Email" style="width: 300px; height: 30px;" />
                <br />
                <br />
                <input class="emailformu" name="password" type="password" placeholder="Mot de passe" style="width: 300px; height: 30px;" />
                <br />
                <br />
                <button class="buttonform" type="submit" style="width: 90px; height: 30px;"> Connexion </button>



            </form>

        </div>

        <?php require_once SITE_ROOT . "partials/footer.php" ?>

    </body>

</html>