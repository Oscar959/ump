<?php
function apostrophe($data){
		 $cut=explode("'",$data);
		 $ready=implode('\\\'',$cut);
		 return $ready;
}
include("conn.php");
if(isset($_POST['demande'])){
	$demande=apostrophe($_POST['demande']);
	$type=apostrophe($_POST['type']);
	$duree=apostrophe($_POST['duree']);
	$lieu=apostrophe($_POST['lieu']);
    $contact=apostrophe($_POST['contact']);
	$message=apostrophe($_POST['message']);
	$insert="INSERT INTO `service_asked` (`id`, `demande`, `type`, `duree`, `lieu`, `contact`, `message`,`date_pub`) 
				VALUES (NULL, '$demande', '$type', '$duree', '$lieu', '$contact','$message', NOW())";
	$result=mysqli_query($con, $insert);
}
?>
