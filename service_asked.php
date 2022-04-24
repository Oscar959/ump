<?php
include("header.php");
?>
     <!-- ======= Appointment Section ======= -->
    <section id="appointment" class="" style="margin:1rem; margin-top:5rem;">
      <div class="container">

        <div class="section-title">
          <h2 style="text-align:center; font-style:italic;text-transform:capitalize;font-family: 'Nunito', sans-serif;">écrivez nous pour une démande de service à L'UMP</h2>
          <p style="text-align:center; font-style:italic;">L'UMP/ONGD vous offre nombreux services à domicile, dans les milieus éducatifs, Hospitaliers et dans son siège
		social. ces différends services sont tenus par des spécialistes, géneralistes et différents experts en la matière. Vous pouvez nous contacter en cas 
	de besoin en remplissant ce formulaire de demande de service.</p>
        </div>
        
        <form  id="form">
		  <h4 style="text-align:center; margin:0.5rem; font-family: 'Nunito', sans-serif; " class="text-primary" >Remplissez ce formulaire</h4>
          <div class="row">
            <div class="col-md-6 form-group">
			  <small> Organe Démandeur</small>
              <input type="text" name="demande" class="form-control" id="demande" >
            </div>
            <div class="col-md-6 form-group mt-3 mt-md-0">
			<small> Type d'activités </small>
              <input type="text" class="form-control" name="type" id="type" >
            </div>
			
            <div class="col-md-6 form-group mt-3">
			  <small> Date et Durée pour la réalisation</small>
              <input type="text" name="duree" class="form-control" id="duree"> 
              
            </div>
			
			 <div class="col-md-3 form-group mt-3">
			  <small> Lieu de réalisation</small>
              <input type="text" name="lieu" class="form-control" id="lieu" >
            </div>

			<div class="col-md-3 form-group mt-3">
			  <small> Votre contact</small>
              <input type="text" name="contact" class="form-control" id="contact" >
            </div>

          </div> 
		   
          <div class="form-group mt-3">
            <small> Déscription de l'activité</small>
            <textarea class="form-control" name="message" id="message" rows="5" placeholder="Déscription de l'activité"></textarea>
            
          </div>
          <div class="text-center" style="margin:1rem;"><button type="submit" id="sent" name="sent" class="btn btn-primary"><i class="fa fa-paper-plane"></i></button></div>
        </form>

		<div class="alert alert-success  alert-dismissable col-lg-4" style="display: none">
			<button type="button" class="close">×</button>
			<h4>Reussie</h4> 
			<p style="text-align:justify">Votre démande de rendez-vous à été soumise avec succès. L'UMP vous remercie de la confiance que vous lui faites</p>
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
			  if($('#demande').val()!= '' && $('#type').val()!=''  && $('#duree').val()!=''  && $('#lieu').val()!=''  && $('#contact').val()!='' && $('#message').val()!=''){
				  var form_data=$(this).serialize();
				insert_data();
				function insert_data(){
				 $.ajax({
				  url:"insert_asked.php",
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
				  alert("Remplissez tous les champs");
			  }
		  });
	  });
 
  </script>