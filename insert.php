<?php
function apostrophe($data){
		 $cut=explode("'",$data);
		 $ready=implode('\\\'',$cut);
		 return $ready;
}
include("conn.php");
if(isset($_POST['nom'])){
	$nom=apostrophe($_POST['nom']);
	$email=apostrophe($_POST['email']);
	$phone=apostrophe($_POST['phone']);
	$date=apostrophe($_POST['date']);
	$message=apostrophe($_POST['message']);
	$insert="INSERT INTO `appoitment` (`id`, `nom`, `email`, `phone`, `date`, `message`, `date_pub`) 
				VALUES (NULL, '$nom', '$email', '$phone', '$date', '$message', NOW())";
	$result=mysqli_query($con, $insert);
}
?>
