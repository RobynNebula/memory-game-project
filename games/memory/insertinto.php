<?php require_once "../../utils/database.php";
session_start();
if (isset($_POST['game_id'])) {
    $game_id = $_POST['game_id'];
    $game_level = $_POST['level'];
    $score_game = $_POST['score'];
    $id_joueur = $_SESSION['users_id'];

    $pdo = connectToDbAndGetPdo();

    $request = "INSERT INTO scores(users_id, game_id, level, score) VALUES($id_joueur, $game_id, $level, $score)";

    $pdoStatement = $pdo->prepare($request);
    $pdoStatement->execute();
    echo '<h3> insertion dans la base de données réussie </h3>';
} else {
    echo "<h3 style='color:white;'>  pas de post détecté </h3>";
}
