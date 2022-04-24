<?php 
   include('../conn.php');
   $query1="select* from members where statut='3'";
   $row=mysqli_query($con, $query1);
   $output="";
   while($res=mysqli_fetch_array($row)){
	 $output.="
     <tr>
       <td>".$res['nom']."</td>
       <td>".$res['prenom']."</td>
	   <td>".$res['profession_actuelle']."</td>
       <td>".$res['qualite_demande']."</td>
	   <td>
	      <div class='col-md-12'>
		    <div class='row d-flex '>
			  <div class='col-md-6 p-2'>
			    <button id=".$res['id']." class='btn btn-info approved' style='font-style:italic; text-transform:capitalize;'>Accepter</button>
			  </div>
			  
			  <div class='col-md-6 p-2'>
			     <button id=".$res['id']." class='btn btn-danger rejected' style='font-style:italic; text-transform:capitalize;'>Rejeter</button>
			  </div>
			</div>
		  </div>
	   </td>
     </tr>
   "; 
   }
   echo $output;
?>		