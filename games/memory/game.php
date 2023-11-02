<?php require_once "../../utils/common.php" ?>
<?php require_once "../../utils/database.php" ?>
<!DOCTYPE html>

<?php require_once SITE_ROOT . "partials/head.php" ?>

<html lang="en">

<body>

  <?php require_once SITE_ROOT . "partials/header.php" ?>


  <div class="banner2">
    <h1>Choose your theme</h1>
  </div>


  <div class="principalPinkButton">
    <div class="pinkButton">
      <button class="PButton" id="anime">
        <img src="<?= PROJECT_FOLDER ?>assets/img/Theme_button/anime.png" />
      </button>
    </div>
    <div class="pinkButton">
      <button class="PButton" id="cats">
        <img src="<?= PROJECT_FOLDER ?>assets/img/Theme_button/goofy_cat.png" />
      </button>
    </div>
    <div class="pinkButton">
      <button class="PButton" id="galaxy">
        <img src="<?= PROJECT_FOLDER ?>assets/img/Theme_button/space_galaxy.png" />
      </button>
    </div>
  </div>

  <div class="level">
    <div class="levelButton">
      <button class="greenButton" id="1">
        <img src="<?php echo PROJECT_FOLDER ?>assets/img/level_button/level1_button.png" />
      </button>
    </div>

    <div class="levelButton">
      <button class="greenButton" id="2">
        <img src="<?= PROJECT_FOLDER ?>assets/img/level_button/level2_button.png" />
      </button>
    </div>

    <div class="levelButton">
      <button class="greenButton" id="3">
        <img src="<?= PROJECT_FOLDER ?>assets/img/level_button/level3_button.png" />
      </button>
    </div>
  </div>

  <div class="centerButton">
    <button class="playButton" id="generatorButton">
      <p> LANCER LA PARTIE </p>
    </button>
  </div>

  <div class="tableau">
    <div class="Level1">
      <table class="gameTable" id="gameTable">

      </table>
    </div>
  </div>

  <?php require_once SITE_ROOT . "partials/footer.php" ?>
  <script src="../../script.js"> </script>
</body>

</html>