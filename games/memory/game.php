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
           <button class="PButton">
              <img src="<?= PROJECT_FOLDER ?>assets/img/Theme_button/anime.png" />
            </button> 
        </div>
        <div class="pinkButton">
          <button class="PButton">
            <img  src="<?= PROJECT_FOLDER ?>assets/img/Theme_button/goofy_cat.png" />
          </button>
        </div>
        <div class="pinkButton">
          <button class="PButton">
            <img  src="<?= PROJECT_FOLDER ?>assets/img/Theme_button/space_galaxy.png" />
          </button>
        </div>
      </div>

      <div class="level">
        <div class="levelButton">
          <button class="greenButton">
            <img src="<?php echo PROJECT_FOLDER ?>assets/img/level_button/level1_button.png" />
          </button>
        </div>

        <div class="levelButton">
          <button class="greenButton">
            <img src="<?= PROJECT_FOLDER ?>assets/img/level_button/level2_button.png" />
          </button>
        </div>

        <div class="levelButton">
          <button class="greenButton">
            <img src="<?= PROJECT_FOLDER ?>assets/img/level_button/level3_button.png" />
          </button>
        </div>
      </div>

      <div class="tableau">
        <div class="Level1">
          <table class="gameTable">
            <tr>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/animeTheme1/hanabi.jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/animeTheme1/hanabi.jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/animeTheme1/lain.jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/animeTheme1/lain.jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/animeTheme1/mayuri.jpeg" /></td>
            </tr>

            <tr>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/animeTheme1/mayuri.jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/animeTheme1/misa.jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/animeTheme1/misa.jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/animeTheme1/nagisa.jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/animeTheme1/nagisa.jpeg" /></td>
            </tr>

            <tr>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/animeTheme1/nana.jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/animeTheme1/nana.jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/animeTheme1/rem.jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/animeTheme1/rem.jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/animeTheme1/rumi.jpeg" /></td>
            </tr>

            <tr>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/animeTheme1/rumi.jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/animeTheme1/sailor moon.jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/animeTheme1/sailor moon.jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/animeTheme1/sato.jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/animeTheme1/sato.jpeg" /></td>
            </tr>

            <tr>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/animeTheme1/shiro.jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/animeTheme1/shiro.jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/animeTheme1/yuzuki.jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/animeTheme1/yuzuki.jpeg" /></td>
              <td class="malus">-10points</td>
            </tr>
          </table>
        </div>

        <div class="Level2">
          <table class="gameTable">
            <tr>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (2).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (2).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (2).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (2).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (2).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (2).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (2).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (2).jpeg" /></td>
            </tr>

            <tr>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (2).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (2).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (2).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (2).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (2).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (2).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (2).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (2).jpeg" /></td>
            </tr>

            <tr>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (2).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (2).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (2).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (2).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (2).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (2).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (2).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (2).jpeg" /></td>
            </tr>

            <tr>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (2).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (2).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (2).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (2).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (2).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (2).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (2).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (2).jpeg" /></td>
            </tr>

            <tr>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (2).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (2).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (2).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (2).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (2).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (2).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (2).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (2).jpeg" /></td>
            </tr>

            <tr>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (2).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (2).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (2).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (2).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (2).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (2).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (2).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (2).jpeg" /></td>
            </tr>

            <tr>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (2).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (2).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (2).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (2).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (2).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (2).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (2).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (2).jpeg" /></td>
            </tr>

            <tr>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (2).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (2).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (2).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (2).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (2).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (2).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (2).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (2).jpeg" /></td>
            </tr>
          </table>
        </div>

        <div class="Level3">
          <table class="gameTable">
            <tr>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3).jpeg" /></td>
            </tr>

            <tr>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3).jpeg" /></td>
            </tr>

            <tr>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3).jpeg" /></td>
            </tr>

            <tr>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3).jpeg" /></td>
            </tr>

            <tr>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3).jpeg" /></td>
            </tr>

            <tr>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3).jpeg" /></td>
            </tr>

            <tr>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3).jpeg" /></td>
            </tr>

            <tr>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3).jpeg" /></td>
            </tr>

            <tr>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3).jpeg" /></td>
            </tr>

            <tr>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3).jpeg" /></td>
            </tr>

            <tr>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3).jpeg" /></td>
            </tr>

            <tr>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3).jpeg" /></td>
            </tr>
          </table>
        </div>
      </div>


      <div class="tableau">
        <div class="Level1">
          <table class="gameTable">
            <tr>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/catTheme2/cat1.jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (1.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/catTheme2/cat10.jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (1.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/catTheme2/cat11.jpeg" /></td>
            </tr>

            <tr>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (1.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/catTheme2/cat12.jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (1.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/catTheme2/cat2.jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (1.2).png" /></td>
            </tr>

            <tr>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/catTheme2/cat3.jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (1.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/catTheme2/cat4.jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (1.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/catTheme2/cat5.jpeg" /></td>
            </tr>

            <tr>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (1.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/catTheme2/cat6.jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (1.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/catTheme2/cat7.jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (1.2).png" /></td>
            </tr>

            <tr>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/catTheme2/cat8.jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (1.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/catTheme2/cat9.jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (1.2).png" /></td>
              <td class="malus">-10points</td>
            </tr>
          </table>
        </div>

        <div class="Level2">
          <table class="gameTable">
            <tr>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (2.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (2.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (2.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (2.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (2.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (2.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (2.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (2.2).png" /></td>
            </tr>

            <tr>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (2.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (2.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (2.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (2.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (2.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (2.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (2.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (2.2).png" /></td>
            </tr>

            <tr>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (2.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (2.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (2.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (2.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (2.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (2.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (2.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (2.2).png" /></td>
            </tr>

            <tr>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (2.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (2.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (2.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (2.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (2.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (2.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (2.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (2.2).png" /></td>
            </tr>

            <tr>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (2.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (2.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (2.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (2.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (2.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (2.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (2.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (2.2).png" /></td>
            </tr>

            <tr>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (2.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (2.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (2.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (2.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (2.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (2.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (2.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (2.2).png" /></td>
            </tr>

            <tr>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (2.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (2.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (2.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (2.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (2.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (2.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (2.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (2.2).png" /></td>
            </tr>

            <tr>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (2.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (2.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (2.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (2.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (2.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (2.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (2.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (2.2).png" /></td>
            </tr>
          </table>
        </div>

        <div class="Level3">
          <table class="gameTable">
            <tr>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.2).png" /></td>
            </tr>

            <tr>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.2).png" /></td>
            </tr>

            <tr>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.2).png" /></td>
            </tr>

            <tr>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.2).png" /></td>
            </tr>

            <tr>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.2).png" /></td>
            </tr>

            <tr>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.2).png" /></td>
            </tr>

            <tr>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.2).png" /></td>
            </tr>

            <tr>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.2).png" /></td>
            </tr>

            <tr>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.2).png" /></td>
            </tr>

            <tr>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.2).png" /></td>
            </tr>

            <tr>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.2).png" /></td>
            </tr>

            <tr>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.2).png" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.2).png" /></td>
            </tr>
          </table>
        </div>
      </div>
    

      <div class="tableau">
        <div class="Level1">
          <table class="gameTable">
            <tr>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/spaceTheme3/galaxy1.jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcard (1.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/spaceTheme3/galaxy10.jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcard (1.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/spaceTheme3/galaxy11.jpeg" /></td>
            </tr>

            <tr>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcard (1.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/spaceTheme3/galaxy12.jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcard (1.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/spaceTheme3/galaxy2.jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcard (1.3).jpeg" /></td>
            </tr>

            <tr>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/spaceTheme3/galaxy3.jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcard (1.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/spaceTheme3/galaxy4.jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcard (1.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/spaceTheme3/galaxy5.jpeg" /></td>
            </tr>

            <tr>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcard (1.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/spaceTheme3/galaxy6.jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcard (1.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/spaceTheme3/galaxy7.jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcard (1.3).jpeg" /></td>
            </tr>

            <tr>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/spaceTheme3/galaxy8.jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcard (1.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/spaceTheme3/galaxy9.jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcard (1.3).jpeg" /></td>
              <td class="malus">-10points</td>
            </tr>
          </table>
        </div>

        <div class="Level2">
          <table class="gameTable">
            <tr>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcard (2.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcard (2.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcard (2.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcard (2.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcard (2.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcard (2.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcard (2.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcard (2.3).jpeg" /></td>
            </tr>

            <tr>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcard (2.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcard (2.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcard (2.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcard (2.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcard (2.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcard (2.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcard (2.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcard (2.3).jpeg" /></td>
            </tr>

            <tr>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcard (2.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcard (2.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcard (2.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcard (2.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcard (2.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcard (2.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcard (2.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcard (2.3).jpeg" /></td>
            </tr>

            <tr>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcard (2.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcard (2.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcard (2.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcard (2.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcard (2.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcard (2.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcard (2.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcard (2.3).jpeg" /></td>
            </tr>

            <tr>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcard (2.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcard (2.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcard (2.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcard (2.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcard (2.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcard (2.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcard (2.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcard (2.3).jpeg" /></td>
            </tr>

            <tr>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcard (2.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcard (2.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcard (2.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcard (2.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcard (2.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcard (2.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcard (2.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcard (2.3).jpeg" /></td>
            </tr>

            <tr>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcard (2.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcard (2.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcard (2.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcard (2.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcard (2.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcard (2.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcard (2.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcard (2.3).jpeg" /></td>
            </tr>

            <tr>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcard (2.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcard (2.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcard (2.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcard (2.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcard (2.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcard (2.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcard (2.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcard (2.3).jpeg" /></td>
            </tr>
          </table>
        </div>

        <div class="Level3">
          <table class="gameTable">
            <tr>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.3).jpeg" /></td>
            </tr>

            <tr>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.3).jpeg" /></td>
            </tr>

            <tr>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.3).jpeg" /></td>
            </tr>

            <tr>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.3).jpeg" /></td>
            </tr>

            <tr>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.3).jpeg" /></td>
            </tr>

            <tr>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.3).jpeg" /></td>
            </tr>

            <tr>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.3).jpeg" /></td>
            </tr>

            <tr>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.3).jpeg" /></td>
            </tr>

            <tr>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.3).jpeg" /></td>
            </tr>

            <tr>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.3).jpeg" /></td>
            </tr>

            <tr>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.3).jpeg" /></td>
            </tr>

            <tr>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.3).jpeg" /></td>
              <td><img src="<?= PROJECT_FOLDER ?>assets/img/backcards (3.3).jpeg" /></td>
            </tr>
          </table>
        </div>
      </div>



    
   <?php require_once SITE_ROOT. "partials/footer.php" ?>

  </body>
</html>
