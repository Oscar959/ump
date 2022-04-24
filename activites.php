<?php include("header.php");?>
<?php include("conn.php");?>


<!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
        <div class="container">
  
          <div class="row">
  
        
  
        </div>
      </section><!-- End Counts Section -->
  <!-- ======= Doctors Section ======= -->


	   <div class="card border-success text-center" style="font-family: 'Nunito', sans-serif; margin:2rem;text-align:justify; box-shadow: 0 5px 25px 0 rgba(214, 215, 216, 0.6); margin:1rem; border-radius:0.5rem;">
			<div class="card-header bg-transparent">
			  <h2 class="text-success card-title" style="font-family: 'Nunito', sans-serif; text-align:center">Nos récentes activités</h2>
			</div>
		
			<div class="card-body text-success"  style="font-family: 'Nunito', sans-serif;">
				<?php $res=mysqli_query($con, "SELECT * FROM training ORDER BY id DESC"); 
				$output='';
				while($row=mysqli_fetch_array($res)){
				  $output .='	
						<div class="card-body">
							<div class="container">
							  <div class="box text-center" style="text-align:justify;">
								   <h4 class="card-title text-secondary text-center">'.$row["purpose"].'</h4>
								   <p class="card-title text-secondary text-center text-align-justify">'.$row["def"].'</p>
								   <p class="card-title text-secondary text-center">'.$row["text_train"].'</p>
									<img src="uploads/'.$row["photo"].' "  width ="250px" alt="image">
									<p class="card-title text-secondary  text-center">'.$row["date_pub"].'</p>
							  </div>
							</div>
						</div>
						<hr>
				  ';
				}
				echo $output;
				?> 
				
			</div>
	   </div>	

















<?php include("footer.php");?>