<?php require_once "utils/common.php" ?>
<?php require_once "utils/database.php" ?>

<!DOCTYPE html>
<html>
<?php require_once SITE_ROOT . "partials/head.php" ?>

<body>

  <div>
    <?php require_once SITE_ROOT . "partials/header.php" ?>
  </div>

  <div class="banner">
    <h1 class="bienvenue">BIENVENUE DANS NOTRE STUDIO !</h1>
    <h2 class="soustitre1">Venez challenger les cerveaux les plus agiles !</h2>
  </div>

  <div class="buttonjouer">
    <button class="buttonform" type="submit">JOUER !</button>
  </div>

  <section class="centreimage">
    <div class="imagecentrale">
      <div>
        <div class="imgordi">
          <img src="<?= PROJECT_FOLDER ?>assets/image/ordinateur.png" />
        </div>
      </div>
      <div>
        <div class="imgnoel">
          <img src="<?= PROJECT_FOLDER ?>assets/image/noel.jpg" />
        </div>
      </div>
      <div>
        <div class="imgpoker">
          <img src="<?= PROJECT_FOLDER ?>assets/image/poker.png" />
        </div>
      </div>
    </div>
  </section>

  <div class="principaleaccueil">
    <div class="secondaire">
      <div class="chiffre1">
        <p>01</p>
      </div>
      <div class="titre1">
        <p>Lorem Ipsum</p>
      </div>
      <div class="texte1">
        Quisque commodo facilisis purus, interdum volutpat arcu viverra sed.
        Etiam sodales convallis pretium. Aenean pharetra laoreet lorem. Nunc
        dapibus tincidunt sem a pharetra. Duis vitae tristique leo, sed
        faucibus ipsum.
      </div>
    </div>
    <div class="secondaire">
      <div class="chiffre2">
        <p>02</p>
      </div>
      <div class="titre2">
        <p>Lorem Ipsum</p>
      </div>
      <div class="texte1">
        Quisque commodo facilisis purus, interdum volutpat arcu viverra sed.
        Etiam sodales convallis pretium. Aenean pharetra laoreet lorem. Nunc
        dapibus tincidunt sem a pharetra. Duis vitae tristique leo, sed
        faucibus ipsum.
      </div>
    </div>
    <div class="secondaire">
      <div class="chiffre3">
        <p>03</p>
      </div>
      <div class="titre3">
        <p>Lorem Ipsum</p>
      </div>
      <div class="texte1">
        Quisque commodo facilisis purus, interdum volutpat arcu viverra sed.
        Etiam sodales convallis pretium. Aenean pharetra laoreet lorem. Nunc
        dapibus tincidunt sem a pharetra. Duis vitae tristique leo, sed
        faucibus ipsum.
      </div>
    </div>
  </div>

  <div class="gta">
    <img src="<?= PROJECT_FOLDER ?>assets/image/jeu.jpg" />
    <div class="bloque">
      <div class="bloque1">
        <div class="bleu">

          <p>
            <?php
            $pdo = connectToDbAndGetPdo();
            $pdoStatement = $pdo->prepare('SELECT COUNT(*) AS nbparty FROM scores');
            $pdoStatement->execute();
            $party = $pdoStatement->fetch();
            echo $party->nbparty;
            ?>
            <br />
            Parties Jouées
          </p>
        </div>
        <div class="rose">
          <p>
            <?php
            $pdo = connectToDbAndGetPdo();
            $pdoStatement = $pdo->prepare('SELECT score_game AS best_score
            FROM scores 
            ORDER BY score_game ASC
            LIMIT 1');
            $pdoStatement->execute();
            $score = $pdoStatement->fetch();
            echo $score->best_score;
            ?>
            <br />Temps Record
          </p>
        </div>

      </div>
      <div class="bloque2">
        <div class="vert">
          <p>
            XX<br />
            joueurs Connectés
          </p>
        </div>
        <div class="jaune">
          <p>
            <?php
            $pdo = connectToDbAndGetPdo();
            $pdoStatement = $pdo->prepare('SELECT COUNT(*) AS player FROM users');
            $pdoStatement->execute();
            $player = $pdoStatement->fetch();
            echo $player->player;
            ?>
            <br />
            Joueurs Inscrits
          </p>
        </div>
      </div>
    </div>

  </div>
  <h3 class="equipe"> NOTRE EQUIPE </h3>
  <p class="soustitre2">Quisque commodo facilisis purus, interdum volutpat arcu viverra sed.</p>

  <div class="presentation">
    <div class="monsieur1">
      <img src="<?= PROJECT_FOLDER ?>assets/image/homme1.jpg">
      <div class="nom1">
        <h4>HAMILTON</h4>
        <p>Games Developer</p>
      </div>
      <div class="reseau">
        <img src="<?= PROJECT_FOLDER ?>assets/image/discord.png">
        <img src="<?= PROJECT_FOLDER ?>assets/image/insta.png">
        <img src="<?= PROJECT_FOLDER ?>assets/image/twitter.png">
      </div>
    </div>
    <br>

    <div class="monsieur2">
      <img src="<?= PROJECT_FOLDER ?>assets/image/homme2.jpg">
      <div class="nom1">
        <h4>MICKHAEL</h4>
        <p>Games Designer</p>
      </div>
      <div class="reseau">
        <img src="<?= PROJECT_FOLDER ?>assets/image/discord.png">
        <img src="<?= PROJECT_FOLDER ?>assets/image/insta.png">
        <img src="<?= PROJECT_FOLDER ?>assets/image/twitter.png">
      </div>
    </div>
    <br>

    <div class="monsieur3">
      <img src="<?= PROJECT_FOLDER ?>assets/image/homme3.jpg">
      <div class="nom1">
        <h4>ARNOLD</h4>
        <p>Games Designer</p>
      </div>
      <div class="reseau">
        <img src="<?= PROJECT_FOLDER ?>assets/image/discord.png">
        <img src="<?= PROJECT_FOLDER ?>assets/image/insta.png">
        <img src="<?= PROJECT_FOLDER ?>assets/image/twitter.png">
      </div>
    </div>
  </div>

  
    <div class="chatContainer">
      <div class="chatTitle">
        <div class="cititle">
          <h2> CHAT</h2>
        </div>
        <div class="xButton">
         <button id="displayText" onclick="display()"> X </button>
        </div>
      </div>

      <div id="ccp">
        <div id="msgContainer" class="msgContainer">
            <?php
            $pdo = connectToDbAndGetPdo();
            $pdoStatement = $pdo->prepare('SELECT u.pseudo, m.text_message, m.date_hour_message 
                                            FROM message AS m INNER JOIN users AS u
                                              ON m.users_id_from = u.id
                                              ORDER BY date_hour_message ASC ');
            $pdoStatement->execute([]);
            $msgs = $pdoStatement->fetchAll(); ?>

          <?php foreach($msgs as $msg) : ?>
              <?php if($msg->pseudo == 'ilonar') : ?>
                  <div class="blue">
                      <span class="time-left"> <?php echo $msg->pseudo ?> </span>
                      <p> <?php echo $msg->text_message ?> </p>
                      <span class="time-left"> <?php echo $msg->date_hour_message ?> </span>
                  </div>
                <?php else: ?> 
                  <div class="grey">
                    <span class="time-right"> <?php echo $msg->pseudo ?> </span>
                    <p class="text-right">  <?php echo $msg->text_message ?> </p>
                    <span class="text-right"> <?php echo $msg->date_hour_message ?> </span>
                  </div>
                <?php endif ?>
          <?php endforeach ?>
        </div> 
            
          <div class="msgsender">
          <input class="msgbox" name="msg" type="text" id="message" placeholder="Saisissez un message...">
          <button type="submit" id="send">Envoyer</button>
        </div>
      </div>
    </div>

    <?php
      if (isset($_GET['msg'])) {
          $pdo = connectToDbAndGetPdo();
          $pdoStatement = $pdo->prepare('INSERT INTO message (text_message) VALUES
          ( :text_message, :date_hour_message)');
          $pdoStatement->execute([
              ':text_message' => $_GET['msg'],
          ]);
      }

      ?>

  <script src="chat.js">  </script>
  <?php require_once SITE_ROOT . "partials/footer.php" ?>

</body>

</html>