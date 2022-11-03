

<?php
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message= $_POST['message'];

$servername = "sql111.byethost22.com";
$username = "b22_27248289";
$password = "25658997";
$dbname = "b22_27248289_smc";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "INSERT INTO contacts (nom,email,sujet,message)
  VALUES (\"$name\",\"$email\",\"$subject\",\"$message\")";
  // use exec() because no results are returned
  $conn->exec($sql);
  echo "New record created successfully";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>