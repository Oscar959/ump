<?php
    include("../conn.php");
    if(isset($_POST['id']) ){
		$id=$_POST['id'];
    $file_name=$_FILES['file']['name'];
	$file_tmp=$_FILES['file']['tmp_name'];
	$file_size=$_FILES['file']['size'];
	$file_error=$_FILES['file']['error'];
	$file_type=$_FILES['file']['type'];
	  
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
					
        $request="UPDATE members set photo='$file_name' where id='$id'";
		$res=mysqli_query($con, $request);
		
}
?>