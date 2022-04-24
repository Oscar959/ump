<?php
require('../conn.php');
	$response=array(
	'status'=> 0,
	'message' => 'echec enregistrement'
	);
$uploadDir="../uploads/";
$errorEmpty= false;
$errorEmail= false;

if (isset($_POST['nom'])  ||isset($_POST['ps'])  ||isset($_POST['prenom'])  || isset($_POST['mail']) || isset($_POST['gender'])|| isset($_POST['date'])|| isset($_POST['mdp']) 
	|| isset($_FILES ['photo']['name']) ){
	//je recupere les variables en provenance du formulaire
	$nom=$_POST['nom'];
	$ps=$_POST['ps'];
	$prenom=$_POST['prenom'];
	$mail=$_POST['mail'];
	$gender=$_POST['gender'];
	$date=$_POST['date'];
	$mdp=md5($_POST['mdp']);
	  
	if(!empty($nom) && !empty($ps) && !empty($prenom) && !empty($mail) && !empty($gender) && !empty($date)&& !empty($mdp) && !empty($_FILES['photo']['name']) ){
	   if(!filter_var($mail, FILTER_VALIDATE_EMAIL)){ 
          $response['message']="invalid email"; 
		  $errorEmail= true;	   
	   }else{
		   if($errorEmpty ==false && $errorEmail == false){
			    $uploadStatus=1;
				//upload file
				$uploadFile= '';
				if(!empty($_FILES['photo']['name'])){
					$filename= basename($_FILES['photo']['name']);
					$targetFilePath= $uploadDir . $filename;
					//$fileType= pathinfo($targetFilePath, PATHINFO_EXTENSION);
                  if(file_exists($targetFilePath)) {
					$response['message'] = "sorry le fichier existe deja" ;
					$uploadStatus=0;
				  }else {
					  if(($_FILES['photo']['size'] > 2097152)){
						$response['message'] = "sorry le fichier est trop lourd";
					    $uploadStatus=0;  
					  }
				  }					
				}
				if($uploadStatus==1){
					$checky= "SELECT * FROM admin WHERE mail LIKE '%".$mail."%' OR mdp LIKE '%".$mdp."%' ";
					$r = mysqli_query($con, $checky);
					if(mysqli_num_rows($r)==1){
						$response['message']="Desolé le mail ou le mode de passe existe dejà";
					}else{
						if(move_uploaded_file($_FILES['photo']['tmp_name']
						     ,$targetFilePath)){
							 $uploadFile=$filename; 
							 $uploadStatus=1;  							 
						  }else{
							  $response['message']="Desolé il y eu erreur";
							  $uploadStatus=0;  							 
						  }
						$quer= "INSERT INTO admin (id,name,middlename,firstname,gender,dob,mail,mdp,photo,date_inscr) VALUES (NULL,'$nom','$ps', '$prenom','$gender','$date', '$mail', '$mdp', '$uploadFile', NOW())" ;
						 if(mysqli_query($con, $quer)){
						  $response['message']="Vous etes enregistré avec succes";
						  $response['status'] = 1;
						}
					}
					
				}
		   }
	   }
		
	}else{
		$response['message']="Entrez les informartions";
		$errorEmpty= true;
	}
	
	
	
	
	
	//$response['message']="nom";
}
echo json_encode($response);  
?>



