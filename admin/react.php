<?php 
   include('../conn.php');
   $query1="select c.id, nom, message, qualite_demande, photo, notif_text 
               from comment as c
			     INNER JOIN members 
				    ON c.user_id=members.id 
					   INNER JOIN notif 
					     ON c.notif_id=notif.id";
   $row=mysqli_query($con, $query1);
   $output="";
   while($res=mysqli_fetch_array($row)){
	 $output.="
     <tr>
       <td>".$res['nom']."</td>
	   <td>".$res['message']."</td>
	   <td>".$res['qualite_demande']."</td>
	   <td style='width:40%;'>".$res['notif_text']."</td>
	   <td style='width:15%;'><img class='rounded-circle' src='../uploads/".$res['photo']."' height='25%;'  width='25%;' class='img-profile'; alt='image'></td>
	   <td style='width:15%;'>
	      <div class='col-md-12'>
		    <div class='row'>
			  <div class='col-md-6'>
			    <button id=".$res['id']." class='btn btn-info approved' style='font-style:italic; text-transform:capitalize;'>Repondre</button>
			  </div>
			  
			  <div class='col-md-6'>
			     <button id=".$res['id']." class='btn btn-danger rejected' style='font-style:italic; text-transform:capitalize;'>effacer</button>
			  </div>
			</div>
		  </div>
	   </td>
     </tr>
   "; 
   }
   echo $output;
?>		