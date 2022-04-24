<?php
include("header.php");
?>
     <!-- ======= Appointment Section ======= -->
    <section id="appointment" class="" style="margin:1rem; margin-top:5rem;">
      <div class="container">

        <div class="section-title">
          <h3 style="text-align:center; font-style:italic;text-transform:capitalize; font-family: 'Nunito', sans-serif; ">écrivez nous pour un rendez vous de consultation chez vous.</h3>
          <p style="text-align:justify; font-style:italic; font-family: 'Nunito', sans-serif; ">Cher visiteur nous vous demendons de nous écrire tout en remplissant le formulaire pour un rendez-vous de consultationchez vous.
		  Remplissez le formulaire et vous serez contacté par votre email ou numéro de téléphone pour le rendez-vous de consultation. L'UMP vous remercie de lui faire confiance !</p>
        </div>
        
		<div class="alert alert-success  alert-dismissable col-lg-4" style="display: none">
					<button type="button" class="close">×</button>
					<h4>Reussie</h4> 
					<p style="text-align:justify; font-family: 'Nunito', sans-serif; ">Votre demnde de rendez-vous à été soumise avec succès. L'UMP vous remercie de la confiance que vous lui faites</p>
		</div>
		
		
        <form id="form">
		  <h4 style="text-align:center; margin:0.5rem; " class="text-primary">Remplissez ce formulaire</h4>
          <div class="row">
            <div class="col-md-6 form-group mt-3">
			  <small> Votre nom</small>
              <input type="text" name="nom" class="form-control" id="nom" placeholder="Votre nom" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
			
			<div class="col-md-6 form-group mt-3">
			<small> Votre prenom</small>
              <input type="text" name="prenom" class="form-control" id="prenom" placeholder="Votre prénom" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
			
            <div class="col-md-4 form-group mt-3">
			<small> Votre email</small>
              <input type="email" class="form-control" name="email" id="email" placeholder="Votre email" data-rule="email" data-msg="Please enter a valid email">
              <div class="validate"></div>
            </div>
			
            <div class="col-md-4 form-group mt-3">
			<small> Votre téléphone</small>
              <input type="phone" class="form-control" name="phone" id="phone" placeholder="Votre téléphone" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
			
			 <div class="col-md-4 form-group mt-3">
			 <small> Date de rendez-vous</small>
              <input type="date" name="date" class="form-control" id="date" placeholder="Date de rendez-vous" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
			
			<div class="col-md-6 form-group mt-3">
				<textarea class="form-control" name="adresse" id="adresse" rows="3" placeholder="Votre adresse de résidence"></textarea>
				<div class="validate"></div>
            </div>
           
		   
          <div class="col-md-6 form-group mt-3">
            <textarea class="form-control" name="message" id="message"  rows="3" placeholder="Votre message"></textarea>
            <div class="validate"></div>
          </div>
          </div>
       
          <div class="text-center " style="margin:1rem;font-family: 'Nunito', sans-serif; "><button type="submit" name="sent" class="btn btn-primary" >Proposer un rendez-vous</button></div>
        </form>

      
    </section><!-- End Appointment Section -->
   <?php include("footer.php") ?>


  <script src="assets/vendor/bootstrap/js/jquery.min.js"></script>
    <script>
	  $(document).ready(function() {
		$('#form').on('submit', function(e){
			e.preventDefault();
			  if($('#nom').val()!= ''  && $('#prenom').val()!='' && $('#email').val()!=''  && $('#phone').val()!=''  && $('#date').val()!=''  && $('#adresse').val()!='' && $('#message').val()!=''){
				  var form_data=$(this).serialize();
				   insert_data();
				function insert_data(){
				 $.ajax({
				  url:"consultation.php",
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

   
