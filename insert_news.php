<?php
function apostrophe($data){
		 $cut=explode("'",$data);
		 $ready=implode('\\\'',$cut);
		 return $ready;
}
include("conn.php");
if(isset($_POST['email'])){
	$email=apostrophe($_POST['email']);
	$insert="INSERT INTO `newsletter` (`id`, `email`,`date_pub`) 
				VALUES (NULL, '$email', NOW())";
	$result=mysqli_query($con, $insert);
}
?>
