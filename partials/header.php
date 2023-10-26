<?php 
$_SESSION['userId'] = 2 ;
if (!empty($_SESSION['userId'])) {
    $pdo = connectToDbAndGetPdo();
    $pdoSelectUserConnected = $pdo->prepare('SELECT pseudo FROM users WHERE id = :userId ');
    $pdoSelectUserConnected->execute([":userId" => $_SESSION['userId']]); 
    $pseudoUserConnected = $pdoSelectUserConnected->fetch();
    $pseudoOfUserConnected = strtoupper($pseudoUserConnected->pseudo);

} else {
    $pseudoOfUserConnected = "MON COMPTE";
} ?>

<header class="head">
    <section>
        <a href="thepowerofmemory.html">The power of memory</a>
        <div class="linkContainer">
          <div><a href="<?php echo PROJECT_FOLDER ?>accueil.php" <?= ($_SERVER['PHP_SELF'] == PROJECT_FOLDER . 'accueil.php') ? 'class="active"' : '' ?> > Accueil </a></div>
          <div><a href="<?php echo PROJECT_FOLDER ?>login.php" <?= ($_SERVER['PHP_SELF'] == PROJECT_FOLDER . 'login.php') ? 'class="active"' : '' ?> > login </a></div>
          <div><a href="<?php echo PROJECT_FOLDER ?>games/memory/thèmeLevel.php" <?= ($_SERVER['PHP_SELF'] == PROJECT_FOLDER . 'games/memory/thèmeLevel.php') ? 'class="active"' : '' ?> > Jeu </a></div>
          <div><a href="<?php echo PROJECT_FOLDER ?>games/memory/scores.php" <?= ($_SERVER['PHP_SELF'] == PROJECT_FOLDER . 'games/memory/scores.php') ? 'class="active"' : '' ?> > Scores </a></div>
          <div><a href="<?php echo PROJECT_FOLDER ?>contact.php" <?= ($_SERVER['PHP_SELF'] == PROJECT_FOLDER . 'contact.php') ? 'class="active"' : '' ?> > Nous contacter </a></div>
          <div><a href="<?php echo PROJECT_FOLDER ?>MyAccount.php" <?= ($_SERVER['PHP_SELF'] == PROJECT_FOLDER . 'connexion.php') ? 'class="active"' : '' ?> >
            <img class="avatar" src= "<?php echo PROJECT_FOLDER ?>assets/image/avatar-homme.png"/>
            <?php echo $pseudoOfUserConnected ;?>
          </a></div>
          
         </div>
    </section>
</header>