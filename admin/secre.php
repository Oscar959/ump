<?php 
   include('../conn.php');
   $query1="select* from members where statut='0'";
   $row=mysqli_query($con, $query1);
   $output="";
   while($res=mysqli_fetch_array($row)){
	 $output.="
     <tr>
       <td>".$res['nom']."</td>
       <td>".$res['prenom']."</td>
	   <td>".$res['profession_actuelle']."</td>
	   <td><a href='download.php?file=".$res['cv']."'>cv<i class='fa fa-download'></i></a></td>
	   <td><a href='download.php?files=".$res['lettre']."'>lettre de motivation<i class='fa fa-download'></i></a></td>
       <td>".$res['qualite_demande']."</td>
	   <td>
	      <div class='col-md-12'>
		    <div class='row'>
			  <div class='col-md-6'>
			    <button id=".$res['id']." class='btn btn-info approved responsive' style='font-style:italic; padding:10px; margin:0.5rem; margin-left:0.5rem;  text-transform:capitalize;'>Accepter</button>
			  </div>
			  
			  <div class='col-md-3'>
			     <button id=".$res['id']." class='btn btn-danger rejected responsive' style='font-style:italic; padding:10px; margin:0.5rem; text-transform:capitalize;'>Rejeter</button>
			  </div>
			</div>
		  </div>
	   </td>
     </tr>
   "; 
   }
   echo $output;
?>		