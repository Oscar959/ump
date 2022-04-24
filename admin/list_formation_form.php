<?php 
   include('../conn.php');
   $query1="select* from training";
   $row=mysqli_query($con, $query1);
   $output="";
   while($res=mysqli_fetch_array($row)){
	 $output.="
     <tr ".$res['id'].">
       <td data-target='purpose' id='titre'>".$res['purpose']."</td>
       <td data-target='def'>".$res['def']."</td>
	   <td data-target='text_train'>".$res['text_train']."</td>
	   <td>
	      <div class='col-md-12'>
		    <div class='row'>
			  <div class='col-md-3'>
			    <button id=".$res['id']." class='btn btn-info edited' style='font-style:italic; padding:2px; margin:0.5rem;  text-transform:capitalize;'><i class='fa fa-pen-to-square'></i></button>
			  </div>
			  
			  
			  <div class='col-md-3'>
			    <button id=".$res['id']." class='btn btn-info deleted' style='font-style:italic; padding:2px; margin:0.5rem;  text-transform:capitalize;'><i class='fa fa-trash'></i></button>
			  </div>
			</div>
		  </div>
	   </td>
     </tr>
   "; 
   }
   echo $output;
?>		