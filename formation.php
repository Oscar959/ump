<?php
include("header.php");
?>
     <!-- ======= Appointment Section ======= -->
    <section id="appointment" class="" style="margin:1rem; margin-top:5rem;">
      <div class="container">
        <form  id="form">
		  <h4 style="text-align:center; margin:0.5rem; font-family: 'Nunito', sans-serif; " class="text-primary" >Remplissez ce formulaire</h4>
          <div class="row">
            <div class="col-md-6 form-group">
			  <small> Votre nom</small>
              <input type="text" name="nom" class="form-control" id="nom">
            </div>
			
			<div class="col-md-6 form-group">
			  <small> Votre prenom</small>
              <input type="text" name="prenom" class="form-control" id="prenom">
            </div>
			
            <div class="col-md-4 form-group mt-md-0">
			<small> Votre email</small>
              <input type="email" class="form-control" name="email" id="email">
            </div>
			
            <div class="col-md-4 form-group">
			<small> Votre telephone</small>
              <input type="phone" class="form-control" name="phone" id="phone">
              
            </div>
			
			 <div class="col-md-4 form-group">
			  <small> Date de l'envoi de l'argent</small>
              <input type="date" name="date" class="form-control">
              
            </div>
			
			<div class="col-md-6 form-group mt-3">
			<small style="text-align:center;">Photo</small>
              <input type="file" class="form-control-file" name="photo" id="photo">
              
            </div>
			
			<div class="col-md-6 form-group mt-3">
			  <label class="font-weight-bold">Choisissez le titre de la formation</label>
				<?php
				include("connect.php");
				 $section=$connect->query("SELECT * FROM `training`") or die(print_r($connect->errorInfo()));
			    ?>
			    <select name="training" id="training" class="form-control font-weight-bold" style="font-style:italic" >
			    <?php
			    while($resultSect=$section->fetch()){
		        ?>
			    <option  value="<?php echo $resultSect['id'];?>"><?php echo $resultSect['purpose'];?></option>
			   <?php 	
			   }$section->closeCursor();
			    ?>
			  </select>
		   </div>
          </div>
       
           
		   
         
          <div class="text-center" style="margin:1rem;"><button type="submit" id="sent" name="sent" class="btn btn-primary">Soumettre la demande</button></div>
        </form>
		
		<div class="alert alert-success  alert-dismissable col-lg-4" style="display: none">
			<button type="button" class="close">×</button>
			<h4>Reussie</h4> 
			<p style="text-align:justify">Votre demande est soumise avec succès. L'UMP vous contactera pour vous fournir toutes les informations pour vous permettre de suivre la formation</p>
		</div>
	</div>
    </section><!-- End Appointment Section -->
	<?php include("footer.php");?>
  <!-- Vendor JS Files -->>
  <script src="assets/vendor/bootstrap/js/jquery.min.js"></script>
  <!-- Template Main JS File -->
  <script>
	  $(document).ready(function() {
		$('#form').on('submit', function(e){
			e.preventDefault();
			  if($('#nom').val()!= ''  && $('#prenom').val()!='' && $('#email').val()!=''  && $('#phone').val()!=''  && $('#date').val()!=''  && $('#photo').val()!=''){
				 $.ajax({
				  url:"insert_form.php",
				  method:"POST",
				  data:new FormData(this),
				  cache: false,
				  contentType: false,
				  processData:false,
				  success:function(data){
					  $(".alert").show("slow");
					  $(".alert").delay(10000).hide(10000);
					  $("#form")[0].reset();
					}  
				});  				  
			  }else{
				  alert("Remplissez tous les champs");
			  }
		  });
	  });
 
  </script>