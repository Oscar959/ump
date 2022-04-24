<?php
include('../connect.php');
include('../conn.php');
if(isset($_POST['id'])){
	$id=$_POST['id'];
	$query2=$connect->exec("DELETE FROM members WHERE id='$id'");
	if($query2){
		echo "good";
	}else{
		echo "good1";
	}
}
?>