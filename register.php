<?php require_once "utils/common.php" ?>
<?php require_once "utils/database.php" ?>
<!DOCTYPE html>
<?php require_once SITE_ROOT. "partials/head.php" ?>
<html>

<body class="inscription"> 

<?php require_once SITE_ROOT. "partials/header.php" ?>

<?php function isMailValid($mail): bool
{
    return filter_var($mail, FILTER_VALIDATE_EMAIL);
}
?>

<?php  if (isset($_GET['mail'])) {


$isMailValid = isMailValid($_GET['mail']);

if (!$isMailValid) {
    $message = "le format de l'email n'est pas valide";
} }; 
?>

    <div class="banner2"> 
        <h1>INSCRIPTION</h1>
    </div>
    
        <form class="formulaire">
            <form action="/page-traitement-donnees" method="post">
            <input type="mail" name="mail" placeholder="Email" required><br>

            <?php if (isset($message)) : ?>
            <p><?php echo $message ?></p>
            <?php endif; ?>

            <input type="text" id="pseudo" name="pseudo" placeholder="Pseudo" required><br>

            <?php 
            if (isset($_GET['pseudo'])){
                if (strlen($_GET['pseudo']) < 4){
                    $erreur = 'Votre pseudo doit contenir minimum 4 caractères.';
                } 
            }
            ?>

           

            <input type="password" id="password" placeholder="Mot de passe" required><br>
            <input type="password" id="password" placeholder="Confirmez le mot de passe" required><br>
            <button class="ps" type="submit">Inscription</button>
        </form>
    </div>

    <?php require_once SITE_ROOT. "partials/footer.php" ?>

</body>
</html>