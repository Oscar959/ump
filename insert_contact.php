<?php
function apostrophe($data){
		 $cut=explode("'",$data);
		 $ready=implode('\\\'',$cut);
		 return $ready;
}
include("conn.php");
if(isset($_POST['name'])){
	$name=apostrophe($_POST['name']);
	$email=apostrophe($_POST['email']);
	$subject=apostrophe($_POST['subject']);
	$message=apostrophe($_POST['message']);
	$insert="INSERT INTO `contact_us` (`id`, `nom`, `email`, `subject`, `message`,`date_pub`) 
				VALUES (NULL, '$name', '$email', '$subject', '$message', NOW())";
	$result=mysqli_query($con, $insert);
}
?>
