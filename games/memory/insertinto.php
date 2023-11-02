<?php require_once "../../utils/database.php";

if (isset($_POST['game_id'])) {
    $game_id = $_POST['game_id'];
    $game_level = $_POST['game_level'];
    $score_game = $_POST['score_game'];
    $_idjoueur = 1;

    $pdo = connectToDbAndGetPdo();

    $request = "INSERT INTO scores(users_id, game_id, game_level, score_game) VALUES($_idjoueur, $game_id, $game_level, $score_game)";

    $pdoStatement = $pdo->prepare($request);
    $pdoStatement->execute();
    echo '<h3> insertion dans la base de données réussie </h3>';
} else {
    echo "<h3 style='color:white;'>  pas de post détecté </h3>";
}
