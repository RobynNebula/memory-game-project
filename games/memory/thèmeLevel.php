<?php require_once "../../utils/common.php" ?>
<?php require_once "../../utils/database.php" ?>
<!DOCTYPE html>

<?php require_once SITE_ROOT. "partials/head.php" ?>

<html lang="en">

  <body>

  <?php require_once SITE_ROOT. "partials/header.php" ?>


    <div class="banner2">
      <h1>Choose your theme</h1>
    </div>

   
      <div class="principalPinkButton">
        <div class="pinkButton">
          <a href="memory.php">
            <img class="PButton" src="<?= PROJECT_FOLDER ?>assets/img/Theme_button/anime.png" />
          </a>
        </div>
        <div class="pinkButton">
          <a href="memory2.php">
            <img class="PButton" src="<?= PROJECT_FOLDER ?>assets/img/Theme_button/goofy_cat.png" />
          </a>
        </div>
        <div class="pinkButton">
          <a href="memory3.php">
            <img class="PButton" src="<?= PROJECT_FOLDER ?>assets/img/Theme_button/space_galaxy.png" />
          </a>
        </div>
      </div>
    
   <?php require_once SITE_ROOT. "partials/footer.php" ?>

  </body>
</html>
