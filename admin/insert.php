<?php 
include('../conn.php');
include('../connect.php');
session_start();	
if(!($_SESSION['name']) && !($_SESSION['firstname']) && !($_SESSION['mdp'])){
	header('location:login.php');
}
		$nom=$_SESSION['name'];
		$prenom=$_SESSION['firstname'];
		$mdp=$_SESSION['mdp'];
		$result=$connect->query("select* from admin
								where name='$nom' AND firstname='$prenom' AND mdp='$mdp'");
		 while($records=$result->fetch()){
         $id=$records['id'];
if(isset($_POST['subject'])){
 $subject= mysqli_real_escape_string($con, $_POST['subject']);
 $comment= mysqli_real_escape_string($con,$_POST['comment']);
 $query= "INSERT INTO notif(id, subject, notif_text, notif_status,date_pub, admin_id) values(null,'$subject', '$comment', '0',now(), '$id')";
 mysqli_query($con, $query);
}
																		
	}
?>