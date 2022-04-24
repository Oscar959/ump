  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact" >
            <h3>UMP</h3>
            <p style="font-family: 'Nunito', sans-serif;">
              N°137 Avenue des Aveugles <br>
              Terre Jaune/ Mont-Ngafula<br>
              Kinshasa/Rdc <br><br>
              <strong>Phone:</strong> (+234) 813329813/ 850956941<br>
              <strong>Email:</strong> umpdrc27avnbp@gmail.com<br>
			  <strong>Email:</strong> nzalapierre2@gmail.com<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4 style="font-family: 'Nunito', sans-serif;">Liens Rapides</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="index.php">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="docteur.php">Doctor</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="service.php">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="appointment.php">Rendez-vous</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="consult">Consultation</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4 style="font-family: 'Nunito', sans-serif;">Nos Objectifs</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Promouvoir sans discrimination</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Soulager les populations vulnérables</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Faciliter l'accès aux soins</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Promouvoir la recherche active</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Influencer positivement à la promotion</a></li>
			  <li><i class="bx bx-chevron-right"></i> <a href="#">Influencer le sens du partenariat</a></li>
			  <li><i class="bx bx-chevron-right"></i> <a href="#">Réalisations des bilans paracliniques</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4 style="font-family: 'Nunito', sans-serif;">Réjoignez notre Newsletter</h4>
            <p>Soyez regulierement informés des nos campagnes en inscrivant votre email</p>
            <form id="form-news">
              <input type="email" name="email" id="email"><input type="submit" value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>Ump</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/ -->
          Designed by <a href="">Power Team</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/bootstrap/js/jquery.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script>
    $(document).ready(function(){
      $('#form-news').on('submit', function(e){
			   e.preventDefault();
         if($('#email').val()!= ''){
            $.ajax({
              url:"insert_news.php",
              method:"POST",
              data:new FormData(this),
              cache: false,
              contentType: false,
              processData:false,
              success:function(data){
                alert("Merci de votre abonnement");
                $("#form-news")[0].reset();
              }  
            });
         }else{
           alert("Veuillez introduire l'email");
         }
      });
    });
  </script>

</body>

</html>