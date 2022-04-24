<?php
include('../connect.php');
include('../conn.php');
session_start();	
if(!($_SESSION['name']) && !($_SESSION['firstname']) && !($_SESSION['mdp'])){
	header('location:login.php');
}
$nom=$_SESSION['name'];
$prenom=$_SESSION['firstname'];
$mdp=$_SESSION['mdp'];
$result=$connect->query("select* from admin where name='$nom' and firstname='$prenom' and  mdp='$mdp'");
while($row=$result->fetch()){
	$nom=$row['name'];
	$prenom=$row['firstname'];
	$mdp=$row['mdp'];
	

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Ajouter un communiqué</title>

    <!-- Custom fonts for this template-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
      
         <?php include("nav.php")?>


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

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter count"></span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerts Center
                                </h6>
                                <div id="dropdown-menu">
									
							    </div>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                            </div>
                        </li>

                        <?php include("connectees.php"); ?>
                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $row['name'];?>
								<?php echo $row['firstname'];?></span> 
                                <?php echo '<img src="../uploads/'.
						           $row['photo'].'" width="150px;" height="50px;" class="img-profile rounded-circle"; alt="image">'?> 
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
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
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1" style="font-style:italic">
                                               NOMBRES DES MEMBRES (UMP)</div>
											   <?php
													$resul=$connect->query("SELECT COUNT(id) as total FROM members");
													 while($recor=$resul->fetch()){	 
												?>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800" style="font-style:italic"><?php echo $recor['total'] ?></div>
                                        </div>
										       <?php		
											  }
											 ?>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1" style="font-style:italic">
                                                NOMBRES D'ADMNISTRATEUR(UMP)</div>
												<?php
													$resul=$connect->query("SELECT COUNT(id) as total FROM admin");
													 while($recor=$resul->fetch()){	 
												?>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800" style="font-style:italic"><?php echo $recor['total'] ?></div>
                                        </div>
										     <?php		
											  }
											 ?>
                                        <div class="col-auto">
                                            <i class="fas fa-user fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                         <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1" style="font-style:italic">
                                                LES DEMANDES REPONDUES</div>
												<?php
													$resul=$connect->query("SELECT COUNT(id) as total FROM members where statut='1'");
													 while($recor=$resul->fetch()){	 
												?>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800" style="font-style:italic";><?php echo $recor['total'] ?></div>
                                        </div>
                                        <div class="col-auto">
										   <?php		
											  }
											 ?>
                                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1" style="font-style:italic">
                                                LES DEMANDES NON REPONDUES</div>
												<?php
													$resul=$connect->query("SELECT COUNT(id) as total FROM members where statut='0'");
													 while($recor=$resul->fetch()){	 
												?>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800" style="font-style:italic";><?php echo $recor['total'] ?></div>
                                        </div>
                                        <div class="col-auto">
										   <?php		
											  }
											 ?>
                                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
					<div class="row">
                        <div class="col-lg-6">
                            <!-- Collapsable Card Example -->
                            <div class="card shadow mb-4">
                                <!-- Card Header - Accordion -->
                                <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse"
                                    role="button" aria-expanded="true" aria-controls="collapseCardExample">
                                    <h6 class="m-0 font-weight-bold text-primary" style="font-style:italic">Bonjour cher Admnistrateur <strong class="text-gray-500"><?php echo $nom=$_SESSION['name'] ?></strong> membre de l'UMP,</h6>
                                </a>
                                <!-- Card Content - Collapse -->
                                <div class="collapse show" id="collapseCardExample">
                                    <div class="card-body text-secondary" style="font-style:italic">
                                        Bienvenu sur la page des ajouts des services et activités. 
                                        Vous avez la possibilités d'ajouter <strong>des communiqués, des formations et des activités pour le poublic. </strong>
										Nous vous rappelons de bien veiller à votre orthographe et si possible faites vous aider par une personne ayant des compétences dans la matière vu que
										ces informations  sont destinées au public. 
										Cliquez sur le titre en bas  <strong class="font-weight-bold text-primary">Publiez une activité, une formations pour le public 
                                        </strong>pour écrire une information pour le public. 
										Merci de nous faire confiance !
										UMP c'est notre affaire à tous !
                                    </div>
                                </div>
                            </div>

                        </div>
						
						
						<div class="col-lg-6">
						   
                            <!-- Collapsable Card Example -->
                            <div class="card shadow mb-4">
                                <!-- Card Header - Accordion -->
                                <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse"
                                    role="button" aria-expanded="true" aria-controls="collapseCardExample">
                                    <h6 class="m-0 font-weight-bold text-primary" style="font-style:italic">Publiez une activités, une formations pour le public</h6>
                                </a>
                                <!-- Card Content - Collapse -->
                                <div class="collapse" id="collapseCardExample">
                                    <div class="card-body text-secondary" style="font-style:italic">
                                        <form id="form" enctype="multipart/form-data">
										  <div class="row">
											<div class="col-md-12 form-group">
											<label class="font-weight-bold">Le titre de la formation</label>
											  <textarea class="form-control" name="titre" id="titre" rows="1" placeholder="Le titre de la formation"></textarea>
											</div>
											
											<div class="col-md-12 form-group ">
											    <label class="font-weight-bold">Definition ou objectif</label>
												<textarea class="form-control" name="objet" id="objet" rows="3" placeholder="Definition ou objectif"></textarea>
											  </div>
											  
											  <div class="col-md-12 form-group ">
											    <label class="font-weight-bold">Votre commentaire</label>
												<textarea class="form-control" name="message" id="message" rows="3" placeholder="Votre reclamation"></textarea>
											  </div>
											  
											   <div class="col-md-12 form-group ">
											    <label class="font-weight-bold">La photo liée à l'activité</label>
												<input type="file" name="photo" id="photo" class="form-control-file">
											  </div>
											  
										  </div>
										  <div class="text-center" style="margin:0.5rem;"><button type="submit" id="sent" name="sent" class="btn btn-primary" style="font-style:italic">Publier</button></div>
                                      </form>
                                    </div>
                                </div>
                            </div>
							
							<div class="alert alert-info  alert-dismissable col-lg-8" style=" text-align:justify; display:none; font-style:italic;"">
								<button type="button" class="close">×</button>
								<h4>Reussie</h4> 
								<p>L'information est arrivé au public et à la page d'activités</p>
							</div>

                        </div>
						

                       <div class="col-lg-12">
					   
					    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <!-- Card Header - Accordion -->
                                <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse"
                                    role="button" aria-expanded="true" aria-controls="collapseCardExample">
                                    <h4 class="m-0 font-weight-bold text-primary" style="font-style:italic">Les demandes non repondues de la formation</h4>
                                </a>
								<div class="card-body">
						 
							<!-- Card Content - Collapse -->
                           <div class="collapse show" id="collapseCardExample">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped" style="font-style:italic; text-transform:capitalize;">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th>titre</th>
                                            <th>Objectif</th>
											<th>Contenu</th>
											<th>action</th>
											
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>titre</th>
                                            <th>Objectif</th>
											<th>Contenu</th>
											<th>action</th>
											
                                        </tr>
                                    </tfoot>
                                    <tbody id="show" style="text-transform:none;">
																   
                                    </tbody>
                                </table>
                            </div>
						 </div>
                        </div>
                        </div>
                        
                    </div>
					   </div>

                       
                    </div>
                </div>
                <!-- /.container-fluid -->
				<!-- Begin Page Content -->
               
                <!-- /.container-fluid -->
            
            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto text-primary">
                        <span>Copyright &copy; Your Website <?php echo date('Y')?></span>
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
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel text-secondary">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body text-secondary"> Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="deco.php">Logout</a>
                </div>
            </div>
        </div>
    </div>
	
	
	<!-- Logout Modal-->
    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-secondary" id="exampleModalLabel "></h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body text-secondary">
                     <form id="form" enctype="multipart/form-data">
                        <div class="row">
						  <div class="col-md-12 form-group">
							<label class="font-weight-bold">Le titre de la formation</label>
							<textarea class="form-control" name="titre" id="titre" rows="1" placeholder="Le titre de la formation"></textarea>
						  </div>
											
						  <div class="col-md-12 form-group ">
						    <label class="font-weight-bold">Definition ou objectif</label>
							<textarea class="form-control" name="objet" id="objectif" rows="3" placeholder="Definition ou objectif"></textarea>
						  </div>
											  
						  <div class="col-md-12 form-group ">
							<label class="font-weight-bold">Votre commentaire</label>
							<textarea class="form-control" name="message" id="text_train" rows="3" placeholder="Votre reclamation"></textarea>
						  </div>
											  
						 <div class="col-md-12 form-group ">
						    <label class="font-weight-bold">La photo liée à l'activité</label>
							<input type="file" name="photo" id="photo" class="form-control-file">
						 </div>
											  
					   </div>
                     </form>
				</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Annuler</button>
                   <div class="text-center" style="margin:0.5rem;"><button type="submit" id="sent" name="sent" class="btn btn-primary" style="font-style:italic">Publier</button></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
+
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>
    <script>
	  $(document).ready(function(){
		  $('#form').on('submit', function(e){
			e.preventDefault();
			  if($('#titre').val()!= '' && $('#message').val()!='' && $('#objet').val()!=''  && $('#photo').val()!=''){
				 $.ajax({
				  url:"comment_form.php",
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
				  alert("Remplissez les trois champs");
			  }
		  });
		  
		  
	   show();
	   function show() {
		$.ajax({
			url:"list_formation_form.php",
			method:"POST",
			success:function(data){
				$("#show").html(data);
			}
		});
		
      }
	  
	  $(document).on('click', '.edited', function(){
		 var id= $(this).attr("id");
		 $("#action").val("update");
		 $('.modal-title').text("Modification des informations");
		 $("#insert").val("update");
		 $("#editModal").modal("show");
		 
		 //var titre = $(this).data('id').children('td[data-target=purpose]').text();
		 alert(id);
		/* var objectif = $('#' + id).children('td[data-target=def]').text();
		 var text_train = $('#' + id).children('td[data-target=text_train]').text();
		 alert(titre);
		 $("#titre").val(titre);
		 $("#objectif").val(objectif);
		 $("#text_train").val(text_train);
		 $("#editModal").modal("toggle");*/
		 
		 
		 
		 //$("#editModal").modal("show");
	/*	 $.ajax({
			 url:"list_formation_approved.php",
			 type:"POST",
			 data:{id:id},
			 success:function(data){
				 show();
			 }
		 });*/
	 });
	 
		connect_select();  
		function connect_select(){
			var action= "fetch";
			//alert(action);
			$.ajax({
				url:"connect_select.php",
				method:"POST",
				data:{action:action},
				dataType:"json",
				success:function(data){
				   $("#good").show("slow");
				   $("#good").html(data.notification);
                   if(data.unseen_notification > 0){
					 $('.counter_connected').html(data.unseen_notification);
			     }				   
				}
			});
		}
	    function load_unseen_notification(view=''){
		 $.ajax({
			 url:"fetch.php",
			 method:"POST",
			 data:{view:view},
			 dataType:"json",
			 success:function(data){
				 $('#dropdown-menu').html(data.notification);
				 if(data.unseen_notification > 0){
					 $('.count').html(data.unseen_notification);
				     var audio = new Audio("audio/fais_dodo.mp3");
				     audio.play();
					 setTimeout(function(){
						audio.pause();
						audio.currentTime=0;
					},10000);
			 }
		   }
		 });
	  }
	  load_unseen_notification();
	  
	  $(document).on('click', '.dropdown-toggle', function(){
		 $('.count').html('');
		 load_unseen_notification('yes');
	  });
	  setInterval(function(){
		load_unseen_notification()  
	  },1000);
	  });
	 
	</script>

</body>

</html>
<?php
}
?>