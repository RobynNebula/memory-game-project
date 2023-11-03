<?php
function connectToDbAndGetPdo()
{

  $dbname = 'memory_database';
  $host = 'localhost';
  $dsn = "mysql:dbname=$dbname;host=$host;charset=utf8";
  $user = 'root';
  $pass = 'root';
  $driver_options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
  ];
  try {
    $pdo = new PDO($dsn, $user, $pass, $driver_options);
    return $pdo;
  } catch (PDOException $e) {
    echo 'La connexion à la base de données a échouée.';
  }
}

function isMailValid($mail): bool
{
  return filter_var($mail, FILTER_VALIDATE_EMAIL);
}
?>

<?php if (isset($_GET['mail'])) {
  $isMailValid = isMailValid($_GET['mail']);

  if (!$isMailValid) {
    $message = "le format de l'email n'est pas valide";
  }
};
