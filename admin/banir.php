<?php
include('../connect.php');
include('../conn.php');
if(isset($_POST['id'])){
	$id=$_POST['id'];
	$query2=$connect->exec("UPDATE members SET 	statut='0', is_advanced='0' WHERE id= '$id'");
	if($query2){
		echo "good";
	}else{
		echo "good1";
	}
}
?>