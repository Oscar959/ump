<?php include("header.php") ?>


<!-- ======= Contact Us Section ======= -->
 <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">
        </div>
		 <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">
        </div>
 <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2 style="text-align:center;">Contatez nous</h2>
        </div>
 
 
 
        <div class="row">
          <div class="col-lg-12" data-aos="fade-up" data-aos-delay="300" >
            <form id="form-contact" class="php-email-form" style="border-radius:0.5rem; border:0.2rem solid #ddd; padding:1rem;" >
              <div class="row">
                <div class="col-lg-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" >
                </div>
                <div class="col-lg-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" >
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" >
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" id="message" rows="5" placeholder="Message" ></textarea>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      <div class="alert alert-success  alert-dismissable col-lg-4" style="display: none">
			<button type="button" class="close">x</button>
			<h4>Reussie</h4> 
			<p style="text-align:justify">Votre demande est soumis avec succès. Nous allons prendre votre message en consideration et nous vous contacteront en cas de bésoin. Merci !</p>
		</div>
 </div>
  </div>
      </div>
	   </section>
    </section><!-- End Contact Us Section -->








<?php include("footer.php") ?>


<script src="assets/vendor/bootstrap/js/jquery.min.js"></script>
<script>
  $(document).ready(function(){
    $('#form-contact').on('submit', function(e){
			e.preventDefault();
			  if($('#name').val()!= ''  && $('#email').val()!='' && $('#subject').val()!=''  && $('#message').val()!='' ){
				 $.ajax({
				  url:"insert_contact.php",
				  method:"POST",
				  data:new FormData(this),
				  cache: false,
				  contentType: false,
				  processData:false,
				  success:function(data){
					  $(".alert").show("slow");
					  $(".alert").delay(10000).hide(10000);
					  $("#form-contact")[0].reset();
					}  
				});  				  
			  }else{
				  alert("Remplissez tous les champs");
			  }
		  });
     });
</script>