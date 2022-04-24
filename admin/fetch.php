<?php
session_start();
include('../connect.php');
include('../conn.php');
if(!($_SESSION['name']) && !($_SESSION['firstname']) && !($_SESSION['mdp'])){
		header('location:login.php');
	
}
//	$mdp=$_SESSION['mdp'];
//    $firstname=$_SESSION['firstname'];
//	$query=mysqli_fetch_array(mysqli_query($con, "SELECT * FROM members WHERE firstname='$firstname' AND mdp='$mdp' ") );
//	$id=$query['id'];
	//echo $id;


if(isset($_POST["view"])){
	if($_POST['view'] != ''){
		$update_query="UPDATE notif SET notif_status=1 WHERE notif_status=0";
		mysqli_query($con, $update_query);
	}
	$query= "select n.id, subject, notif_text, photo 
				from notif as n 
					inner join admin as a 
						on n.admin_id=a.id 
							ORDER BY n.id DESC LIMIT 5";
	$result= mysqli_query($con, $query);
	$output='';
	if(mysqli_num_rows($result)>0){
		while($row=mysqli_fetch_array($result)){
			$output.=' 
				<a class="dropdown-item d-flex align-items-center" href="#">
                   <div class="dropdown-list-image mr-3">
                       <img class="rounded-circle" src="../uploads/'.$row['photo'].'" height="50px;" class="img-profile"; alt="image">
                       <div class="status-indicator bg-success"></div>
                   </div>
                   <div class="font-weight-bold">
                      <div class="text-truncate" style="font-family:; font-size:1rem; font-style:italic">'.$row["subject"].'</div>
                      <div class="small text-gray-1000  p-1" style="font-family:; font-size:0.9rem; font-style:italic">'.$row["notif_text"].'</div>
                   </div>
                </a>
				';
		}
	}else{
		$output .='<li class="p-2 text-center"><a href="#" class="text-bold text-italic">Pas des notifications trouvées</a></li>';
	}
	$query1="SELECT * FROM notif WHERE notif_status=0";
	$result1= mysqli_query($con, $query1);
	$count= mysqli_num_rows($result1);
	$data= [
	   'notification'         =>$output,
	   'unseen_notification'  =>$count 
	];
	echo json_encode($data);
}

?>