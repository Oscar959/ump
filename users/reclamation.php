<?php
include("../conn.php");
function apostrophe($data){
		 $cut=explode("'",$data);
		 $ready=implode('\\\'',$cut);
		 return $ready;
}
if(isset($_POST['message'])){
	$nom=$_POST['nom'];
	$message=apostrophe($_POST['message']);
	$insert="insert into concern values (null,'$nom','$message')";
	$result=mysqli_query($con, $insert);
}
?>
