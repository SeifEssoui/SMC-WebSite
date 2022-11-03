<?php
$servername = "sql111.byethost22.com";
$username = "b22_27248289";
$password = "25658997";
$dbname = "b22_27248289_smc";
$con=mysqli_connect("sql111.byethost22.com","b22_27248289","25658997","b22_27248289_smc");
$result=mysqli_query($con,"select * from contacts");


?>
<html>
<head>
	<meta http-equiv="Content-type" content="text/html; charset=UTF-8" />
	<title>Acces aux BD</title>
</head>
<body>
	
<?php			

	echo '<center><h1>Liste des contacts ('.mysqli_num_rows($result).')</h1></center>'; 	

	?>
	<table align="center" width="30%">
		<tr><td><b>Nom</td><td><b>Email</td><td><b>Sujet</td><td><b>Message</td></tr>
	<?php
  while ($ligne = mysqli_fetch_array($result)) {
echo '<tr><td>'.$ligne['nom'].'</td><td>'.$ligne['email'].'</td><td>'. $ligne['sujet'].'</td><td>'. $ligne['message'].'</td><td>';
  }
  echo '</table>';




?>
<br><br><br><center><a href="contact.php">Retour</a></center>