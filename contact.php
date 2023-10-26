<?php require_once "utils/common.php" ?>
<!DOCTYPE html>

<html>

<?php require_once SITE_ROOT. "partials/head.php" ?>

<body class="contact">
   
    <?php require_once SITE_ROOT. "partials/header.php" ?>
 
    <div class="banner2"> 
        <h1> NOUS CONTACTER </h1>
    </div>

    <div class="icone">
        <div class="numero">
            <div class="orange">
                <img src="<?= PROJECT_FOLDER ?>assets/image/telephone-mobile.png">
            </div><br>

            <div >06 05 04 03 02</div>
        </div>

        <div class="mail">
            <div class="lettre">
                <img src="<?= PROJECT_FOLDER ?>assets/image/email.png">
            </div><br>
            
            <div>support@powerofmemory.com</div> 
        </div>

        <div class="lieu">
            <div class="endroit">
                <img src="<?= PROJECT_FOLDER ?>assets/image/espace-reserve.png">
            </div><br>

            <div>Paris</div>
        </div>
    </div>

    </div> 

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
        
      <?php require_once SITE_ROOT. "partials/footer.php" ?>

    </body>

</html>