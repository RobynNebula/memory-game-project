<?php
if (!empty($_SESSION['user_id'])) {
    $pdo = connectToDbAndGetPdo();
    $pdoSelectUserConnected = $pdo->prepare('SELECT pseudo FROM users WHERE id = :user_id ');
    $pdoSelectUserConnected->execute([":user_id" => $_SESSION['user_id']]);
    $pseudoUserConnected = $pdoSelectUserConnected->fetch();
    $pseudoOfUserConnected = strtoupper($pseudoUserConnected->pseudo);
} else {
    $pseudoOfUserConnected = "MON COMPTE";
} ?>


<header class="head">
    <section>
        <p class="hh" >The power of memory </p>
        <div class="linkContainer">
          <div class="hh"><a href="<?php echo PROJECT_FOLDER ?>accueil.php" <?= ($_SERVER['PHP_SELF'] == PROJECT_FOLDER . 'accueil.php') ? 'class="active"' : '' ?> > Accueil </a></div>
          <div class="hh"><a href="<?php echo PROJECT_FOLDER ?>login.php" <?= ($_SERVER['PHP_SELF'] == PROJECT_FOLDER . 'login.php') ? 'class="active"' : '' ?> > login </a></div>
          <div class="hh"><a href="<?php echo PROJECT_FOLDER ?>games/memory/game.php" <?= ($_SERVER['PHP_SELF'] == PROJECT_FOLDER . 'games/memory/game.php') ? 'class="active"' : '' ?> > Jeu </a></div>
          <div class="hh"><a href="<?php echo PROJECT_FOLDER ?>games/memory/scores.php" <?= ($_SERVER['PHP_SELF'] == PROJECT_FOLDER . 'games/memory/scores.php') ? 'class="active"' : '' ?> > Scores </a></div>
          <div class="hh"><a href="<?php echo PROJECT_FOLDER ?>contact.php" <?= ($_SERVER['PHP_SELF'] == PROJECT_FOLDER . 'contact.php') ? 'class="active"' : '' ?> > Nous contacter </a></div>
          <div class="hh"><a href="<?php echo PROJECT_FOLDER ?>MyAccount.php" <?= ($_SERVER['PHP_SELF'] == PROJECT_FOLDER . 'connexion.php') ? 'class="active"' : '' ?> >
            <img class="avatar" src= "<?php echo PROJECT_FOLDER ?>assets/image/avatar-homme.png"/>
            <?php echo $pseudoOfUserConnected ;?>
          </a></div>
          
         </div>
    </section>

</header>


