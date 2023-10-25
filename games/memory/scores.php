<?php require_once "../../utils/common.php" ?>
<?php require_once "../../utils/database.php" ?>
<!DOCTYPE html>

<?php require_once SITE_ROOT. "partials/head.php" ?>

<html>

<?php require_once SITE_ROOT. "partials/header.php" ?>
  
    <body>
        <div class="banner"> 
            <h1> SCORES </h1>
        </div><br>

      <table class="tableauscore">

        <caption class="titretableau">
          SCORES
        </caption>
        <tr class="lignetableau">
          <th class="valeur">Pseudo du joueur</th>
          <th class="valeur">Niveau de difficulté</th>
          <th class="valeur">Score du joueur</th>
          <th class="valeur">Date et heure</th>
        </tr>

        <?php $pdo = connectToDbAndGetPdo();
            $pdoStatement = $pdo->prepare('SELECT s.*, g.name_game, u.pseudo FROM scores s INNER JOIN game g 
                                          ON s.game_id = g.id INNER JOIN users u ON s.users_id = u.id ORDER BY s.score ASC');
            $pdoStatement->execute();
            $scores = $pdoStatement->fetchAll(); ?>

        <?php foreach($scores as $score) : ?>

          <tr class="lignetableau">
            <td class="valeur"> <?php echo $score->pseudo ?> </td>
            <td class="valeur"> <?php echo $score->level ?> </td>
            <td class="valeur"> <?php echo $score->score ?> </td>
            <td class="valeur"> <?php echo $score->game_hour?> </td>
          </tr>

        <?php endforeach; ?>

      </table>

      <?php require_once SITE_ROOT. "partials/footer.php" ?>

  </body>
</html>
