<?php
include('../conn.php');
include('../connect.php');
session_start();	
function apostrophe($data){
		 $cut=explode("'",$data);
		 $ready=implode('\\\'',$cut);
		 return $ready;
}
if(!($_SESSION['name']) && !($_SESSION['firstname']) && !($_SESSION['mdp'])){
	header('location:../index.php');
}
        $nom=$_SESSION['name'];
		$prenom=$_SESSION['firstname'];
		$mdp=$_SESSION['mdp'];
		$result=$connect->query("select* from admin
								where name='$nom' AND firstname='$prenom' AND mdp='$mdp'");
		 while($records=$result->fetch()){
         $id=$records['id'];
        $output="";
		if (isset($_POST['titre'])){
			$titre=apostrophe($_POST['titre']);
			$message=apostrophe($_POST['message']);
			$objet=apostrophe($_POST['objet']);
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
	$insert="INSERT INTO training VALUES(null,'$objet','$file_name','$titre','$message',$id,now())";
	mysqli_query($con,$insert);
	
}

		 }


 ?>