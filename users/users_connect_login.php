<?php
session_start();
	  include('../connect.php');
	  include('../conn.php');
	  $erreur="";
		if(isset($_POST['nom']) ||isset($_POST['prenom']) || isset($_POST['mdp'])){
			$nom= trim(htmlspecialchars($_POST['nom']));
			$prenom=trim(htmlspecialchars($_POST['prenom']));
			$mdp= md5($_POST['mdp']);
				 if (!empty($nom) ||  !empty($prenom) ||   !empty($mdp)){
					 $result=" SELECT * FROM members where nom ='$nom' AND prenom ='$prenom' AND mdp ='$mdp' AND statut='1' AND is_advanced='1' ";
					 $res=mysqli_query($con, $result);
					  if(mysqli_num_rows($res)>0){
							$_SESSION['nom']=$nom;
							$_SESSION['prenom']=$prenom;
							$_SESSION['mdp']=$mdp;
							$erreur= '<script>setTimeout(function(){
										window.location.replace("../users_advanced/users_connect.php");
									 },2000);</script>';
					 }else if(mysqli_num_rows($res)==0){
						    $result1=" SELECT * FROM members where nom ='$nom' AND prenom ='$prenom' AND mdp ='$mdp' AND statut='0' AND is_advanced='0'";
							$res1=mysqli_query($con, $result1);
							  if(mysqli_num_rows($res1)>0){
									$_SESSION['nom']=$nom;
									$_SESSION['prenom']=$prenom;
									$_SESSION['mdp']=$mdp;
							$erreur= '<script>setTimeout(function(){
										window.location.replace("users_connect_unconformed.php");
									 },2000);</script>';
							
						 
					 }else if(mysqli_num_rows($res1)==0){
						    $query1=" SELECT * FROM members where nom ='$nom' AND prenom ='$prenom' AND mdp ='$mdp' AND statut='1' AND is_advanced='0'";
							$res2=mysqli_query($con, $query1);
							  if(mysqli_num_rows($res2)>0){
									$_SESSION['nom']=$nom;
									$_SESSION['prenom']=$prenom;
									$_SESSION['mdp']=$mdp;
							$erreur= '<script>setTimeout(function(){
										window.location.replace("users_connect.php");
									 },2000);</script>';
				 }else{
						 $erreur= '<script>
						               alert("Verifiez vos informations entrées, elles ne sont pas correctes, soit Vous n\'avez pas de compte, creez d\'abord avant de vous connecter");
								   </script>';
				 }
			}		
		  }
		}
	}
	?>




<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Connection Membres</title>
    <link href="../assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="../admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="../admin/css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">
  <link href="../assets/css/style.css" rel="stylesheet">
    <style>
	  p,h1,h2,h3,h4,h5,h6,li, ul, ol,a, body{
		  font-family: 'Nunito', sans-serif;
	  }
	 .mdp i{
		 position:absolute;
         bottom:239px;
		 color:#000;
		 left:365px;
		 font-size:20px;
		 cursor:pointer;
	 }
	 .active .mdp  i::before{
		 content:'\f070';
		 color:#5256ad;
	 }
	 @media (max-width:768px){
		.mdp i{
		 position:absolute;
         bottom:239px;
		 color:#000;
		 left:265px;
		 font-size:20px;
		 cursor:pointer;
	 }
	 .active .mdp  i::before{
		 content:'\f070';
		 color:#5256ad;
	 }
	}
	</style>
</head>

<body class="">
  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex justify-content-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope"></i> <a href="www.sindaniespoir26@gmail.com">umpdrc27avnbp@gmail.com</a>
        <i class="bi bi-phone"></i> (+234) 813329813
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

      <h1 class="logo me-auto"><a href="../index.php">UMP</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <a href="" class="logo me-auto"><img src="assets/img/logo.jpeg" alt="" class="img-fluid"></a>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="../index.php">Accueil</a></li>
          <li><a class="nav-link scrollto" href="../service.php">Services</a></li>
          <li><a class="nav-link scrollto" href="../docteur.php">Docteur</a></li>
           <li class="dropdown"><a href="#"><span>Organisations</span> <i class="bi bi-chevron-down"></i></a>
				<ul>
				  <li class="dropdown"><a href="#"><span>Connection</span> <i class="bi bi-chevron-down"></i></a>
					<ul>
						<li><a href="../admin/login.php">Admin</a></li>
					    <li><a href="users_connect_login.php">Members</a></li>
					</ul>
				  </li>
				</li>
				
				<li class="dropdown"><a href="#"><span>Nous ecrire...</span> <i class="bi bi-chevron-down"></i></a>
					<ul>
						<li><a href="../consult.php">Pour une Consultaion</a></li>
						<li><a href="../appointment.php">Pour un rendez vous avec le comité directeur</a></li>
					</ul>
				</li>
				</ul>
          </li>
		  <li><a class="nav-link scrollto" href="../contact.php">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="../appointment.php" class="appointment-btn scrollto"><span class="d-none d-md-inline">Proposer un</span> Rendez-vous</a>

    </div>
  </header><!-- End Header -->
  <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
        <div class="container">
  
          <div class="row">
  
        
  
        </div>
      </section><!-- End Counts Section -->
	  
    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Content de vous revoir!</h1>
										<?php echo $erreur;?>
                                    </div>
                                    <form class="user" method="post" action="#">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="nom"
                                                id="exampleInputEmail"
                                                placeholder="Entrer votre nom...">
                                        </div>
										
										 <div class="form-group">
                                            <input type="text" class="form-control" name="prenom"
                                                id="exampleInputEmail" 
                                                placeholder="Entrer votre prenom...">
                                         </div>
										
                                        <div class="form-group mdp">
                                            <input type="password" class="form-control" name="mdp"
                                                id="exampleInputPassword" placeholder="Votre mot de passse">
												<i class="fa fa-eye active"></i>
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Se souvenir de moi</label>
                                            </div>
                                        </div>
                                        <button type="submit"  class="btn btn-primary btn-user btn-block">
                                            Connecter
                                        </button>
                                        
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="forgot-password.php">Mot de passe oublié?</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="register_users.php">Créer un compte!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="../admin/vendor/jquery/jquery.min.js"></script>
    <script src="../admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../admin/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../admin/js/sb-admin-2.min.js"></script>
	 <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>
	<script>
	  let input= document.querySelector('.mdp input');
	  let show = document.querySelector('.mdp i');
	  show.onclick=function(){
		  if(input.type=== "password"){
			  input.type= "text";
			  show.classList.add('active');
		  }else{
			  input.type= "password";
			  show.classlist.remove('active');
		  }
	  }
	  
	</script>

</body>

</html>