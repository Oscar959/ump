<?php
include("header.php");
?>
     <!-- ======= Appointment Section ======= -->
    <section id="appointment" class="" style="margin:1rem; margin-top:5rem;">
      <div class="container">

        <div class="section-title">
          <h2 style="text-align:center; font-style:italic;text-transform:capitalize;font-family: 'Nunito', sans-serif;">écrivez nous pour une démande de service à L'UMP</h2>
          <p style="text-align:center; font-style:italic;">Cher visiteur nous vous demendons de nous écrire tout en remplissant le formulaire pour un rendez-vous avec le cmomité directeur de l'UMP.
		  Remplissez le formulaire et vous serez contacté par votre email ou numéro de téléphone pour le rendez-vous, Merci de nous faire confiance !</p>
        </div>
         <div class="alert alert-success  alert-dismissable col-lg-4" style="display: none">
			<button type="button" class="close">×</button>
			<h4>Reussie</h4> 
			<p style="text-align:justify">Votre demnde de rendez-vous à été soumise avec succès. L'UMP vous remercie de la confiance que vous lui faites</p>
		</div>
        <form  id="form">
		  <h4 style="text-align:center; margin:0.5rem; font-family: 'Nunito', sans-serif; " class="text-primary" >Remplissez ce formulaire</h4>
          <div class="row">
            <div class="col-md-6 form-group">
			  <small> Votre nom</small>
              <input type="text" name="nom" class="form-control" id="nom" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
            </div>
            <div class="col-md-6 form-group mt-3 mt-md-0">
			<small> Votre email</small>
              <input type="email" class="form-control" name="email" id="email" data-rule="email" data-msg="Please enter a valid email">
            </div>
			
            <div class="col-md-6 form-group mt-3">
			<small> Votre téléphone</small>
              <input type="phone" class="form-control" name="phone" id="phone" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              
            </div>
			
			 <div class="col-md-6 form-group mt-3">
			  <small> Date de rendez-vous</small>
              <input type="date" name="date" class="form-control" id="date" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              
            </div>
          </div>
       
           
		   
          <div class="form-group mt-3">
            <textarea class="form-control" name="message" id="message" rows="5" placeholder="Votre message"></textarea>
            
          </div>
          <div class="text-center" style="margin:1rem;"><button type="submit" id="sent" name="sent" class="btn btn-primary">Proposer un rendez-vous</button></div>
        </form>
    </section><!-- End Appointment Section -->
	<?php include("footer.php");?>
  <!-- Vendor JS Files -->>
  <script src="assets/vendor/bootstrap/js/jquery.min.js"></script>
  <!-- Template Main JS File -->
  <script>
	  $(document).ready(function() {
		$('#form').on('submit', function(e){
			e.preventDefault();
			  if($('#nom').val()!= '' && $('#email').val()!=''  && $('#phone').val()!=''  && $('#date').val()!=''  && $('#message').val()!=''){
				  var form_data=$(this).serialize();
				insert_data();
				function insert_data(){
				 $.ajax({
				  url:"insert.php",
				  method:"POST",
				  data:form_data,
				  success:function(data){
					  $(".alert").show("slow");
					  $(".alert").delay(10000).hide(10000);
					  $("#form")[0].reset();
					}  
				});  
				}
				  
			  }else{
				  alert("remplissez les deux champs");
			  }
		  });
	  });
 
  </script>