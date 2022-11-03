<?php  
session_start();
var_dump($_POST);
$insert=$db->prepare( "INSERT INTO contacts (nom, email,sujet,message) VALUES (?,?,?,?)");
$insert->execute (array( $name,$email,$subject,$message));
header('location:contact.php');

?>