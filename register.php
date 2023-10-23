<!DOCTYPE html>

<html>

    <head>
        <link rel="stylesheet" href="./assets/style/header.css">
        <link rel="stylesheet" href="./assets/style/main.css">
        <link rel="stylesheet" href="./assets/style/footer.css">
        <meta charset="UTF-8">
    </head>

    <body>
        <!--En-tête-test-->
        <header class="head"> 
            <section>
                <p>The power of memory</p>
                <div class="linkContainer">
                    <a href="accueil.html">Accueil</a>
                    <a href="login.html"> login </a>
                    <a href="./games/memory/thèmeLevel.php" target="_blank"> Jeu </a>
                    <a href="./games/memory/scores.php" target="_blank"> Scores </a>
                    <a href="contact.html">Nous contacter</a>
                    <a href="MyAccount.html"><img class="avatar" src="./assets/image/avatar-homme.png"></a>
                </div>
            </section>
        </header>
        <!--Fin en-tête-->

    <!--Corps-->
    <div class="banner2"> 
        <h1>INSCRIPTION</h1>
    </div>
    <body class="inscription"> 
        <form class="formulaire">
            <form action="/page-traitement-donnees" method="post">
            <input type="email" id="email" placeholder="Email" required><br>
            <input type="text" id="pseudo" placeholder="Pseudo" required><br>
            <input type="password" id="password" placeholder="Mot de passe" required><br>
            <input type="password" id="password" placeholder="Confirmez le mot de passe" required><br>
            <button class="ps" type="submit">Inscription</button>
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