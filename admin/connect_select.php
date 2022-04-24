<?php
include("../conn.php");
$message="";
if(isset($_POST['action'])){
	$var=$_SERVER['REMOTE_ADDR'];
	$timing=time();
	$timing_5min= time()-(60*5);
	$retour=mysqli_fetch_array(mysqli_query($con,"SELECT COUNT(*) AS nbre_connectes  FROM connectes  WHERE ip='$var' "));
	 if($retour['nbre_connectes']==0){
		$query=mysqli_query($con,"INSERT INTO connectes (ip, time_connect) VALUES ('$var', '$timing')");	
	 }else{
		$update=mysqli_query($con,"UPDATE connectes SET time_connect='$timing'  WHERE ip='$var'");	
	 }
	 mysqli_query($con, "DELETE FROM connectes WHERE time_connect <".$timing_5min);
	 
	 $count_num=mysqli_query($con,"SELECT COUNT(*) AS nbre_connectes FROM connectes");
	 $donnes=mysqli_fetch_array($count_num);
	 $message='Il y a actuellement '.$donnes['nbre_connectes'].' visiteurs';
	 $count=$donnes['nbre_connectes'];
	 
	
}

    $data= array(
	   'notification'         =>$message,
	   'unseen_notification'  =>$count 
	);

echo json_encode($data);
?>