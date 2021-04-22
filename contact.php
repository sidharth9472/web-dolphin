
<?php include 'link_header.php' ?>
<?php include 'header.php' ?>
   
	<!--Bootsrap 4 CDN-->
<style>
.contact
{
	background-image: url(images/contact3.jpg);
	background-size: cover;
	
}
.card-header
{
	margin-top: auto;
	margin-bottom: auto;

}

.card{
	position: relative;
height: 590px;
margin-bottom:20px; 
margin-top: 10px;
width: 350px;
box-shadow:  rgba(0,0,0,0.7) !important;
background-color: #273c75;
border-radius: 20px;

}

.login_btn{
color: black;

width: 100px;
}

.login_btn:hover{
color: black;
background-color: white;
}
  
</style>
<section>
	<div class="container-fluid">
		<div class="contact">
			
			<div class="container">
				<div class="card">
			        <div class="card-header">

				         <center><h1 style="color: #f1c40f;">Contact Us</h1>
					     <p style="color: white;">We will contact you soon.</p></center>
			        </div>
			     <div class="card-body">
				    <form method="POST" action="save-contact.php">
					   <div class="input-group form-group">
						<br>
						   <input type="text" name="fullname" class="form-control" placeholder="Full Name">
						 </div><br>
						<div class="input-group form-group">
							
							<input type="Email" name="email" class="form-control" placeholder="Email">
						</div>
						<br>

						<div class="input-group form-group">
							
							<input type="subject" name="mobile" class="form-control" placeholder="Mobile no ">
						</div>
						<br>
	                    
						<div class="input-group form-group">
						<textarea name="message" rows="4" cols="50" class="form-control" placeholder="Write your message  "></textarea>
	                    </div><br>
						
						<div class="form-group">
							<input type="submit" name="send"  class="btn btn-warning float-left login_btn">
						</div><br>
                    </form>
			     </div>
		     </div>
				
			</div>
		</div>
			
			
		

		    
	     
	</div>

	
</section>

<?php include 'foooter.php' ?>		
		



