<?php 
$host="sql111.byethost22.com";
$user="b22_27248289";
$pass="25658997";
$base="b22_27248289_smc";
$con=mysqli_connect($host, $user, $pass)  ;
mysqli_select_db($con,$base) or die ("Base de données introuvable !") ;  
 ?>