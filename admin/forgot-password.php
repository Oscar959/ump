<?php
require('../conn.php');
        $message="";
  
	    function send_password_reset($get_name,$get_email, $token){
			$to='power.team.official.website2022@gmail.com';
			$subject = 'You have a message from power team official website.';
			$message=  "<h2>Hello $get_name</h2>
					   <h3>You are receiving this mail because you have send a password reset request code for your account.</h3>
					   <h3>This the code that you need to enter in order to reset your password $token </h3>
					   <br/><br/>
					   <a href='http://localhost/power_project/includes/reset-password.php?token=$token&email=$get_email'>Click here in order to reset your password</a>;
					   ";
			$headers = "From: $get_email";
			$headers = "From: " . $get_email . "\r\n";
			$headers .= "Reply-To: ". $get_email . "\r\n";
			$headers .= "MIME-Version: 1.0\r\n";
			$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
			if(mail($to, $subject, $message, $headers)){
				$message="Message has been sent";
			}else{
				$message="Message could not be sent.";
			}
		}
		
if(isset($_POST['submit'])){
	$email=mysqli_real_escape_string($con, $_POST['email']);
	$token=rand(1000000,9999999);/*online we will add md5 lethod in order to get long and secured code, it will be like md5(rand(1000000,999999999))*/
    $checky= "SELECT * FROM admnin where Email='$email' LIMIT 1";
	$check_email=mysqli_query($con, $checky);
	
	if(mysqli_num_rows($check_email)>0){
		$row=mysqli_fetch_array($check_email);
		$get_name=$row['nom'];
		$get_email=$row['email'];
		$get_id=$row['id'];
		$update_otp= "UPDATE admnin SET user_otp='$token' WHERE id='$get_id' LIMIT 1 ";
		$update_otp_run=mysqli_query($con, $update_otp);
			if($update_otp_run){
				
				send_password_reset($get_name,$get_email, $token);
				$message='<div class="alert alert-primary text-center">Nous t\'avons écrit un email pour modifier votre mot de passe, veuillez verifiez votre boite email et copiez le code</div>';
			}else{
				$message='<div class="alert alert-danger text-center">Desolé quelque chose a mal marché veuillez reessayez, merci</div>';
			}
	}else{
		$message='<div class="alert alert-danger text-center">L\'email ne se trouve dans notre systeme, verifiez bien votre email et reessayez, merci</div>';
	}
	
}else{
	
}
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

  <!-- =======================================================
  * Template Name: Medilab - v4.7.1
  * Template URL: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <style>
  *{
	   text-align:justify;
   }
  </style>
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex justify-content-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope"></i> <a href="www.sindaniespoir26@gmail.com">sindaniespoir@gmail.com</a>
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
          <li><a class="nav-link scrollto active" href="#">Accueil</a></li>
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
				</li>
				
				<li class="dropdown"><a href="#"><span>Nous ecrire...</span> <i class="bi bi-chevron-down"></i></a>
					<ul>
						<li><a href="../consultation.hp">Pour une Consultaion</a></li>
						<li><a href="../appointment.php">Pour un rendez vous avec le comité directeur</a></li>
					</ul>
				</li>
				</ul>
          </li>
		  <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="../appointment.php" class="appointment-btn scrollto"><span class="d-none d-md-inline">Proposer un</span> Rendez-vous</a>

    </div>
  </header><!-- End Header -->
  <!-- ======= Hero Section ======= -->
   <section id="hero" class="d-flex align-items-center">
    <div class="container" style="margin-left:3rem;">
     
    </div>
  </section><!-- End Hero -->

<body class="">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">
               <div class="col-lg-12" data-aos="fade-up" data-aos-delay="200">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-password-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-2">Forgot Your Password?</h1>
                                    </div>
                                    <form method="POST">
									<?php echo $message ?>
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Enter Email Address..." name="email">
                                        </div>
                                        <input  class="btn btn-primary btn-user btn-block" type="submit" name="submit"value="send">
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="register.php">Create an Account!</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="centre.php">Already have an account? Login!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
           </div>
        </div>

    </div>

   <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>UMP</h3>
            <p>
              N° 137 Avenue des Aveuges <br>
              Terre Jaune, Mont-Ngafula<br>
              Kinshasa/RDC<br><br>
              <strong>Phone:</strong> +(243) 813 329 813/ 850 956 941<br>
              <strong>Email:</strong> umpdrc27avnbp@gmail.com<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
             <h4>Nos liens</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="index.php">Accueil</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="service.php">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="docteur.php">Docteur</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="appointment.php">Rendez-vous</a></li>
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
          &copy; Copyright <strong><span>UMP</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/ -->
          Designed by <a href="https://bootstrapmade.com/">POWER TEAM</a>
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

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/purecounter/purecounter.js"></script>
  <script src="../assets/vendor/aos/aos.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>

</body>

</html>