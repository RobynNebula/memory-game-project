<!DOCTYPE html>

<html>

    <head>
        <link rel="stylesheet" href="./assets/style/header.css">
        <link rel="stylesheet" href="./assets/style/main.css">
        <link rel="stylesheet" href="./assets/style/footer.css">
        <meta charset="UTF-8">
    </head>

<body>
    <!--En-tête-->
    <header class="head"> 
        <section>
            <a href="thepowerofmemory.php">The power of memory</a>
            <div class="linkContainer">
                <a href="accueil.php">Accueil</a>
                <a href="login.php"> login </a>
                <a href="./games/memory/thèmeLevel.php" target="_blank"> Jeu </a>
                <a href="./games/memory/scores.php" target="_blank"> Scores </a>
                <a href="contact.php">Nous contacter</a>
                <a href="MyAccount.php"><img class="avatar" src="./assets/image/avatar-homme.png"></a>
            </div>
        </section>
    </header>
    <!--Fin en-tête-->

    <!--Corps-->
    <div class="banner2"> 
        <h1> NOUS CONTACTER </h1>
    </div>

    <div class="icone">
        <div class="numero">
            <div class="orange">
                <img src="./assets/image/telephone-mobile.png">
            </div><br>

            <div >06 05 04 03 02</div>
        </div>

        <div class="mail">
            <div class="lettre">
                <img src="./assets/image/email.png">
            </div><br>
            
            <div>support@powerofmemory.com</div> 
        </div>

        <div class="lieu">
            <div class="endroit">
                <img src="./assets/image/espace-reserve.png">
            </div><br>

            <div>Paris</div>
        </div>
    </div>

    <body class="contact"></div> 

        <div> 
            <form class="formulairecontact">
                <div>
                    <div class="wrap">
                        <input type="text" id="nom" placeholder="Nom" required>
                        <input type="email" id="email" placeholder="Email" required><br>
                        <input class="sujet" type="text" id="sujet" placeholder="Sujet" required><br>
                        <textarea class="message" type="text" id="message" placeholder="Message" required></textarea>
                    </div>
                </div>
            <div>
                <button type="submit">Envoyer</button>
            </div>

            </form>

        </div>
        </body>
    <!--Fin corps-->

    <!--Bas de page-->
    <footer class="foot">
        <div class="info">
          <legend>Informations</legend>
          <p>Contacter nous 7j/7 et 24h/24</p>
          <p><span>Tél:</span> 605-040-302</p>
          <p><span>Email:</span> support@powerofmemory.com</p>
          <p><span>Localisation:</span> Cergy préfecture</p>
        </div>
  
        <div>
          <legend>Power Of Memory</legend>
          <br />
          <ul>
          <li><span class="li">Jouer !</span></li>
          <br />
          <li><span class="li">Les scores</span></li>
          <br />
          <li><span class="li">Nous contacter</span></li>
          <br />
        </ul>
        </div>
      </footer>
        <!--Fin bas de page-->
    </body>

</html>