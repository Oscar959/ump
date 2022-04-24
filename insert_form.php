<?php
function apostrophe($data){
		 $cut=explode("'",$data);
		 $ready=implode('\\\'',$cut);
		 return $ready;
}
include("conn.php");
if(isset($_POST['nom'])){
	$nom=apostrophe($_POST['nom']);
	$prenom=apostrophe($_POST['prenom']);
	$email=apostrophe($_POST['email']);
	$phone=apostrophe($_POST['phone']);
	$date=apostrophe($_POST['date']);
	$id=apostrophe($_POST['training']);
	$file_name=$_FILES['photo']['name'];
			$file_tmp=$_FILES['photo']['tmp_name'];
			$file_size=$_FILES['photo']['size'];
			$file_error=$_FILES['photo']['error'];
			$file_type=$_FILES['photo']['type'];
			  
			  if(is_uploaded_file($file_tmp)){
					if($file_size < 2097152){
						if($file_type= 'image/jpg'){
							if(move_uploaded_file($file_tmp, "uploads/$file_name")){
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
	$insert="INSERT INTO `membres_form` (`id`, `nom`,`prenom`, `email`, `telephone`, `date_argent`,`photo`,`training_id`,`statut`,`date_pub`) 
				VALUES (NULL, '$nom', '$prenom', '$email', '$phone', '$date', '$file_name','$id','0', NOW())";
	$result=mysqli_query($con, $insert);
}
?>
