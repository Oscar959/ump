<?php
include("../conn.php");
$output='';
if(isset($_POST["id"])){
	$id=$_POST["id"];
	$nom=$_POST["nom"];
	$prenom=$_POST["prenom"];
	$ps=$_POST["postnom"];
	$mdp=md5($_POST["mdp"]);
	$profession=$_POST["profession"];
	
	$file_name=$_FILES['photo']['name'];
	$file_tmp=$_FILES['photo']['tmp_name'];
    $file_size=$_FILES['photo']['size'];
	$file_error=$_FILES['photo']['error'];
	$file_type=$_FILES['photo']['type'];
			  
		if(is_uploaded_file($file_tmp)){
			if($file_size < 2097152){
				if($file_type= 'image/jpg'){
					if(move_uploaded_file($file_tmp, "../uploads/$file_name")){
				    	$output= '<p class="alert alert-success">file uploaded successefully</p>';
					}else{
						$output= '<p class="alert alert-success">file uploaded failed</p>';
					}
					}else{
						$output= '<p class="alert alert-success">file not image</p>';
					}
					}else{
						$output= '<p class="alert alert-success">2M only</p>';
					}
					}else{
				     	$output= '<p class="alert alert-success">Please select a file</p>';
					}
					
	$query="UPDATE members SET nom = '$nom', prenom = '$prenom', post_nom = '$ps', mdp = '$mdp', profession_actuelle = '$profession', photo = '$file_name' WHERE id = '$id'";	
    $query_exec=mysqli_query($con, $query);
	if($query_exec){
		$output='<p class="alert alert-success">Cà marche avec success</p>';
	}else{
		$output='<p class="alert alert-success">Cà n\'as pas marché</p>';
	}
	echo $output;

}





?>