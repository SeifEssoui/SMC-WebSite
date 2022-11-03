<?php
// Informations d'identification
define('DB_SERVER', 'sql111.byethost22.com');
define('DB_USERNAME', 'b22_27248289');
define('DB_PASSWORD', '25658997');
define('DB_NAME', 'b22_27248289_smc');
 
// Connexion à la base de données MySQL 
$conn = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_NAME);
 
// Vérifier la connexion
if($conn === false){
    die("ERREUR : Impossible de se connecter. " . mysqli_connect_error());
}
?>

