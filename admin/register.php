<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Register</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
	<style>
     .form-message{
			margin-top:1rem;
			text-align:center;
			background-color:rgba(231,235,249,1);
			font-size:1.5rem;
			display:none;
	 }
	.form-message p{
			margin:0;
			color:blue;
			font-size:1.3rem;
			font-style:italic;
			text-transform:capitalize;
	}
	.form-message p span{
			color:#980e8e;
			font-size:1rem;
		}
  </style>

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                            </div>
							<div class="col-lg-12 form-message">
							</div><br><br>
                            <form class="user" id="form">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" id="exampleFirstName" name="nom"
                                            placeholder="Votre Nom">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" id="exampleLastName" name="ps"
                                            placeholder="Votre Postnom">
                                    </div>
                                </div>
								<div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="exampleInputEmail" name="prenom"
                                        placeholder="Votre Prenom">
                                </div>
								
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user" id="exampleInputEmail" name="mail"
                                        placeholder="Email Address">
                                </div>
								
								<div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" name="gender"
                                            id="exampleInputPassword" placeholder="Votre sexe">
                                    </div>
                                     <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="date" class="form-control form-control-user" name="date"
                                            id="exampleInputPassword" placeholder="date de naissance">
                                     </div>
                                </div>
								
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user" name="mdp"
                                            id="exampleInputPassword" placeholder="Password">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="file" class="form-control-file"
										    name="photo" id="file">
											<small>Photo de profil</small>
                                    </div>
                                </div>
					
                                <button type="submit" id="v" name="send" class="btn btn-primary btn-user btn-block">
                                    Register Account
                                </button>
                                <hr>
                                <a href="index.html" class="btn btn-google btn-user btn-block">
                                    <i class="fab fa-google fa-fw"></i> Register with Google
                                </a>
                                <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                    <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                                </a>
								 
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="forgot-password.php">Forgot Password?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="login.php">Already have an account? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
	<script>
	$(document).ready(function(){
	  $('#form').on('submit', function(e){
		e.preventDefault();
		$.ajax({
			type:"post",
			url:"confAdm.php",
			data: new FormData(this),
			dataType:"json",
			cache: false,
			contentType: false,
			processData:false,
			success:function(response){
				$(".form-message").css("display", "block");
				if(response.status==1){
					$("#form")[0].reset();
					$(".form-message").html('<p>' +response.message+'</p>');
				}else{
					$(".form-message").css("display", "block");
					$(".form-message").html('<p>' +response.message+'</p>');
				}
			}
			
		});
	  });
	  // file validation before to be stored to the database
	  $("#file").change(function(){
		var file = this.files[0];
        var	fileType= file.type;
        var match=['image/jpeg','image/jpg','image/png'];
		if(!((fileType==match[0]) ||(fileType==match[1]) || (fileType==match[2]))){
			alert("Desolé, introduis une photo avec l'extension jpeg, jpg, png. Merci!");
		    $("#file").val('');
			return false;
		}
	  });
	  
	});
	</script>

</body>

</html>