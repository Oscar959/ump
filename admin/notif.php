<!DOCTYPE html>
 <html>
    <head>
		<title>Power team</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">

		<title>SB Admin 2 - Register</title>

			<!-- Custom fonts for this template-->
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" type="text/css">
		<link
			href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
			rel="stylesheet">

		<!-- Custom styles for this template-->
		<link href="css/sb-admin-2.min.css" rel="stylesheet">
		<!-- Custom styles for this page -->
		<link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
		<link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
		<link href='vendor/bootstrap/js/jquery.iphone.toggle.css' rel='stylesheet'>
		  <style>
		  @import url('https://fonts.googleapis.com/css2?family=Nunito:wght@200&display=swap');
			 .p-2{
				  text-align:justify;
				  margin:1rem;
				  font-family: 'Nunito', sans-serif;
				  
			  }
			  p,h1,h2,h3,h4,h5,h6,li, ul, ol,a{
				  font-family: 'Nunito', sans-serif;
			  }
		  a{
			  color:#000;
		  }
		  .count{
			  background:red;
			  color:#fff;
			  margin:1rem;
		  }
	      
		  </style>	  	  
	</head>
	
	<body>
	   <div class="container">
	    <h2 align="center">Notification system</h2><br />
		<nav class="navbar navbar-inverse">
		  <div class="container-fluid">
		    <div class="navbar-header">
			  <a class="navbar-brand" href="#">Mon essai sur les notif</a>
			</div>
			<ul class="nav navbar-nav navbar-right">
			  <li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="label label-pill label-danger count"></span>Notification</a>
			   <ul class="dropdown-menu" id="dropdown-menu"></ul>
			  </li>
			</ul>
		  </div>
		</nav>
		<br>
		<form method="POST" id="form" >
		  <div class="form-group">
		    <label><strong>Object</strong></label>
			<input type="text" name="subject" id="subject" class="form-control">
		  </div>
		  
		   <div class="form-group">
		    <label><strong>Ecrivez le message</strong></label>
			<textarea type="text" name="comment" id="comment" rows="5" class="form-control text-justify"></textarea>
		  </div>
		  
		   <div class="form-group">
			<input type="submit" name="post" class="btn btn-info" value="Publier" id="soundBtn">
			<span align="right"><button class="btn btn-info text-white"><a href="index.php" class="text-white">Quitter </a></button></span>
		   </div>
		  
		   
		  <div class="alert alert-success  alert-dismissable col-lg-4 pull-center " style="display: none">
			<button type="button" class="close">×</button>
			<h4>Reussie</h4> Le news à eté publié avec success!
		  </div>
		</form>
	   </div>
	</body>
	</html>
	
	<!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>
	<script src="vendor/bootstrap/js/jquery.iphone.toggle.js"></script>
	<script>
	$(document).ready(function(){
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
	  
		$('#form').on('submit', function(e){
			e.preventDefault();
		  if($('#subject').val()!= '' && $('#comment').val()!=''){
			  var form_data=$(this).serialize();
			  $.ajax({
				  url:"insert.php",
				  method: "POST",
				  data:form_data,
				  success:function(data){
					  $(".alert").show("slow");
					  $(".alert").delay(2000).hide(2000);
					  $("#form")[0].reset();
					  load_unseen_notification();
					}  
			  });
		  }else{
			  alert("remplissez les deux champs");
		  }
	  });
	  
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