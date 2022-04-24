<?php
include("connect.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>UMP</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

   <!-- Template Main CSS File -->
   <link href="assets/css/style.css" rel="stylesheet">

   <!-- =======================================================
   * Template Name: Medilab - v4.7.1
   * Template URL: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/
   * Author: BootstrapMade.com
   * License: https://bootstrapmade.com/license/
   ======================================================== -->
   *{
	   text-align:justify;
   }
 </head>
 
 <body>
 
   <!-- ======= Top Bar ======= -->
   <div id="topbar" class="d-flex align-items-center fixed-top">
     <div class="container d-flex justify-content-between">
       <div class="contact-info d-flex align-items-center">
         <i class="bi bi-envelope"></i> <a href="mailto:sindaniespoir26@gmail.com">sindaniespoir@gmail.com</a>
         <i class="bi bi-phone"></i> +243 823261824
       </div>
       <div class="d-none d-lg-flex social-links align-items-center">
         <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
         <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
         <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
         <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
       </div>
     </div>
   </div>
 
   <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.php">UMP</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="index.php">Accueil</a></li>
          <li><a class="nav-link scrollto" href="service.php">Services</a></li>
          <li><a class="nav-link scrollto" href="docteur.php">Docteur</a></li>
          <li class="dropdown"><a href="#"><span>Organisations</span> <i class="bi bi-chevron-down"></i></a>
             <ul>
              <li class="dropdown"><a href="#"><span>Connection</span> <i class="bi bi-chevron-down"></i></a>
			    <ul>
					<li><a href="admin/login.php">Admin</a></li>
					<li><a href="users/users_connect_login.php">Members</a></li>
				</ul>
			  </li>
			  
			  <li class="dropdown"><a href="#"><span>Nous ecrire...</span> <i class="bi bi-chevron-down"></i></a>
					<ul>
						<li><a href="concern.php">A propos d'un probleme</a></li>
						<li><a href="consult.php">Pour une Consultaion</a></li>
						<li><a href="appointment.php">Pour un rendez vous avec le comité directeur</a></li>
					</ul>
			  </li>
              </li>
              <li><a href="#">Oraganisation 3</a></li>
              <li><a href="#">Oraganisation 4</a></li>
              <li><a href="#">Oraganisation 5</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="#appointment" class="appointment-btn scrollto"><span class="d-none d-md-inline">Proposer un</span> Rendez-vous</a>

    </div>
  </header><!-- End Header -->

     <!-- ======= Appointment Section ======= -->
    <section id="appointment" class="" style="margin:1rem; margin-top:5rem;">
      <div class="container">

        <div class="section-title">
          <h2 style="text-align:center; font-style:italic;text-transform:capitalize;">écrivez nous pour un rendez vous de consultation chez vous.</h2>
          <p style="text-align:justify; font-style:italic;">Cher visiteur nous vous demendons de nous écrire tout en remplissant le formulaire pour un rendez-vous de consultationchez vous.
		  Remplissez le formulaire et vous serez contacté par votre email ou numéro de téléphone pour le rendez-vous de consultation. L'UMP vous remercie de lui faire confiance !</p>
        </div>

        <form action="#" method="POST" role="form" class="">
		  <h4 style="text-align:center; margin:0.5rem; " class="text-primary">Remplissez ce formulaire</h4>
          <div class="row">
            <div class="col-md-6 form-group">
              <input type="text" name="nom" class="form-control" id="nom" placeholder="Votre nom" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-md-6 form-group mt-3 mt-md-0">
              <input type="email" class="form-control" name="email" id="email" placeholder="Votre email" data-rule="email" data-msg="Please enter a valid email">
              <div class="validate"></div>
            </div>
			
            <div class="col-md-6 form-group mt-3">
              <input type="phone" class="form-control" name="phone" id="phone" placeholder="Votre téléphone" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
			
			 <div class="col-md-6 form-group mt-3">
              <input type="date" name="date" class="form-control" id="date" placeholder="Date de rendez-vous" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
          </div>
       
           
		   
          <div class="form-group mt-3">
            <textarea class="form-control" name="message" rows="5" placeholder="Votre message (sugestion)"></textarea>
            <div class="validate"></div>
          </div>
          <div class="text-center" style="margin:1rem;"><button type="submit" name="sent" class="btn btn-primary">Proposer un rendez-vous</button></div>
        </form>

      
    </section><!-- End Appointment Section -->









    <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Medilab</h3>
            <p>
              A108 Adam Street <br>
              New York, NY 535022<br>
              United States <br><br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="index.html">Accueil</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="service.html">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Join Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>Medilab</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/ -->
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
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

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>