<!DOCTYPE html>

<html>
    
<?php require_once SITE_ROOT.'partials/head.php' ?>


  <body>
    <!--En-tête-->
    <?php require_once SITE_ROOT.'partials/header.php' ?>
    <!--Fin en-tête-->

    <!--Corps-->
    
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
        <tr class="lignetableau">
          <td class="valeur">Contenu colonne 1</td>
          <td class="valeur">Contenu colonne 2</td>
          <td class="valeur">Contenu colonne 3</td>
          <td class="valeur">Contenu colonne 4</td>
        </tr>
      </table>
    
    <!--Fin corps-->

    <!--Bas de page-->
    <br />
    <?php require_once SITE_ROOT.'partials/footer.php' ?>
    <!--Fin bas de page-->
  </body>
</html>
