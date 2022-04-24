<?php
include("conn.php");
if(isset($_POST['nom'])){
	$nom=$_POST['nom'];
	$prenom=$_POST['prenom'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$date=$_POST['date'];
	$adresse=$_POST['adresse'];
	$message=$_POST['message'];
	$error='';
	$insert="insert into consultation values (null,'$nom','$prenom','$email','$phone','$date','$message','$adresse')";
	$result=mysqli_query($con, $insert);
}
?>
