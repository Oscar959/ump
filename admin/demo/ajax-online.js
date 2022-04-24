    
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
		
	  setInterval(function(){
		connect_select();  
	  }, 2000);	