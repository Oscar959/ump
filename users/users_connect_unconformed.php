<?php
include('../connect.php');
include('../conn.php');
session_start();	
if(!($_SESSION['nom']) && !($_SESSION['prenom']) && !($_SESSION['mdp'])){
	header('location:users_connect_login.php');
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

    <title>SB Admin 2 - Cards</title>

    <!-- Custom fonts for this template-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../admin/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-secondary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3"><?php echo $_SESSION['nom'];?><sup>(non)</sup></div>
            </a>


            

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                   

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        

                        
                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION['nom'] ?></span>
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Se déconnecter
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Bienvenu sur UMP</h1>
                    </div>

                    <div class="row">

                        

                        <div class="col-lg-6">
                            <!-- Collapsable Card Example -->
                            <div class="card shadow mb-4">
                                <!-- Card Header - Accordion -->
                                <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse"
                                    role="button" aria-expanded="true" aria-controls="collapseCardExample">
                                    <h6 class="m-0 font-weight-bold text-primary" style="font-style:italic">Bonjour cher <strong class="text-gray-500"><?php echo $nom=$_SESSION['nom'] ?></strong> candidat membre de l'UMP,</h6>
                                </a>
                                <!-- Card Content - Collapse -->
                                <div class="collapse show" id="collapseCardExample">
                                    <div class="card-body text-secondary" style="font-style:italic">
									    Votre raison dans cette page peuvent etre soit nous avons reussi votre demande d'inscription mais pas confirmé ou soit vous etes banis de 
                                        chez les admnistrateurs. Si vous avez créé votre compte, rassurez-vous que nous avons reussi 
										ta demande d'inscription en tant que membres de notre Organisation.
                                        Mais jusque là <strong>ta demande est toujours en cours de traitement</strong> chez l'admnistrateur. 
										Nous sommes une organisation serieuse et nous verifions tous avant que vous 
										puissiez vous adherez a notre organisation. Au cas ou ça tarde, n'hesitez pas d'écrire à
										l'admnistrateur juste en cliquant le titre <strong class="font-weight-bold text-primary"> Ecrivez nous pour toutes réclamations</strong>
										, en mentionant correctement votre probleme.
										Merci de nous faire confiance !
                                    </div>
                                </div>
                            </div>

                        </div>
						
						<div class="alert alert-success  alert-dismissable col-lg-4" style="display: none">
							<button type="button" class="close">×</button>
							<h4>Reussie</h4> 
							<p style="text-align:justify">Votre demnde de rendez-vous à été soumise avec succès. L'UMP vous remercie de la confiance que vous lui faites</p>
						</div>
						
						<div class="col-lg-6">
                            <!-- Collapsable Card Example -->
                            <div class="card shadow mb-4">
                                <!-- Card Header - Accordion -->
                                <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse"
                                    role="button" aria-expanded="true" aria-controls="collapseCardExample">
                                    <h6 class="m-0 font-weight-bold text-primary" style="font-style:italic">Ecrivez nous pour toutes réclamations</h6>
                                </a>
                                <!-- Card Content - Collapse -->
                                <div class="collapse" id="collapseCardExample">
                                    <div class="card-body text-secondary" style="font-style:italic">
                                        <form  id="form">
										  <div class="row">
											<div class="col-md-12 form-group">
											  <small class="fst-italic font-weight-bold"> Votre nom(Laissez-le ainsi)</small>
											  <input type="text" name="nom" class="form-control"value="<?php echo $nom=$_SESSION['nom'] ?>" id="nom" placeholder="Votre nom" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
											  <div class="validate"></div>
											</div>
											
										  <div class="col-md-12 form-group mt-3">
										    <small class="fst-italic font-weight-bold">Votre message</small>
											<textarea class="form-control" name="message" id="message" rows="3" placeholder="Votre reclamation"></textarea>
											<div class="validate"></div>
										  </div>
										  </div>
										  <div class="text-center" style="margin:1rem;"><button type="submit" id="sent" name="sent" class="btn btn-primary" style="font-style:italic">Proposer un rendez-vous</button></div>
                                      </form>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
		    
            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade text-primary" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Voulez-vous quitter?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Cliquez sur déconnection pour quitter et sur annuler pour rester.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Annuler</button>
                    <a class="btn btn-primary" href="deco.php">Se déconnecter</a>
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
	 <script>
	   $(document).ready(function(){
		$('#form').on('submit', function(e){
			e.preventDefault();
			  if($('#nom').val()!= '' && $('#message').val()!=''){
				  var form_data=$(this).serialize();
				  insert_data();
				function insert_data(){
				 $.ajax({
				  url:"reclamation.php",
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

</body>

</html>