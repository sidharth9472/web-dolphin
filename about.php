<?php include 'link_header.php'?>
<?php include 'header.php'?>
<style>
.dark
{
	background-color: #16a085;
}
.test-anim
{
  border-radius: 18px
  box-shadow: 0 2px 4px rgba(0 ,0 ,0.2);
}
.text-item h1
{
  text-align: center;
  border-radius: 5px;
  
  background-image:url(images/pro2.jpg);
  color: #fff;
  line-height: auto;

  font-family: sans-serif;
  font-weight:700;
 
  margin: 10px;
  

}
.serivcebg
{
	display: flex;
	justify-content: center;
	align-items: center;
	min-height: 100vh;
	/*min-width: 100vh;*/
	/*background: linear-gradient(#0f4675 ,#0f4675 50% ,#fff 50% ,#fff 100%);*/
	background-image: url(images/aabb2.jpg);
	background-size: cover;
	

}

.boxing
{
	display: flex;
	flex-wrap: wrap;
	justify-content: space-between;

}
.container .box
{
  position: relative;
  width: 300px;
  background-color: #bdc3c7;
  padding: 100px 40px 60px;
  box-shadow: 0 15px 45px rgba(0 ,0 ,0.1);
}
.container .box:before
{
	content: " ";
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	background: #2c3e50;
	transform: scaleY(0);
	transform-origin: top; 
	transition: transform 0.5s;
}
.container .box:hover:before
{
	transform: scaleY(1);
	transform-origin: bottom; 
	transition: transform 0.5s;
}
.container .box h1
{
	position: absolute;
	left: 40px;
	top: 60px;
	z-index: 1;
	opacity: 0;
	transition: 0.5;
}
.container .box:hover h1
{
	opacity: 1;
	color: #f39c12;
	transform: scaleY(-40px);
}
.container .box p
{
	position: relative;
	z-index: 2;
	color: #555;
	transition: 0.5;

}
.container .box:hover p
{
	color: #fff;
}
.container .box button
{
	position: relative;
	opacity: 0;

}
.container .box:hover button
{

 opacity: 1;
}
.table
{
	width: 100%;
	border-collapse: collapse;
	border: 2px solid #c8d6e5;

}
.table td, .table th
{
	border: 1px,solid #000;
	text-align: left;

}
.text .ourvision
{
	background:  linear-gradient(45deg, #10a3e9, #2ecc71,#16a085);
}
.servicecl
{
	background-color: #f1f1f1;
}

.innerpara
{
	box-shadow: 0 15px 45px rgba(0 ,0 ,0.1);
	padding: 20px;
	font-size: 17px;
	font-family: sans-serif;
	height: auto;
		background-color:#c8d6e5;
	
}
@media (max-width:1200px) {
  .innerpara {
  	font-size: 12px;
  	min-height: 600px;
   
  }
  

}
@media (max-width: 770px) {
  .box {
   width:50%;
  
   margin-left: 20px;
   margin-bottom: 10px;
   margin-top: 20px;
  }

}
@media (max-width: 820px)
{
	.servicebg
	{
		
	}
}
</style>



<section>
<section>
<div class="container-fluid ">

	<div class="container">
		 <div class="text">
		 	<div class="text-item">
		 		
		 		<h1 style="font-size: 60px;">ABOUT US</h1>

		 	</div>
		 </div>
	</div>	
</div>
</section>		


<section>
 <div class="serivcebg">
 	

	<div class="container boxing">
		<div class="box ">
			<h1>Our Vision</h1>
			<br>
			<p style="text-align:justify;">
				A pioneer of water treatment with a legacy spanning over five decades, Dolphin water solutions is today considered a premier company in water and environment management, with sales, production and service footprints across the world. 
			</p>
			<button type="button" class="btn btn-outline-warning"><a href="#Our-vision">Read More</a></button>
			
		</div>

		<div class="box">
			<h1>Conserving</h1>
			<br>
			<p> <span style="color:#f39c12; text-align:justify;"> Natural Resources</span>

				<br>
				Complementing engineered water treatment, a wide range of customised chemical treatment programmes,boiler and cooling water treatments and fireside programmes ensure optimum plant performance thatreflects in the overall efficiency 
			</p>
			<button type="button" class="btn btn-outline-warning"><a href="#Conserv">Read More</a></button>

			
		</div>
		<div class="box">
			<h1>Industry</h1>
			<br>
			<p>
				The sphere of our influence is not limited to water solutions. Over the years, we have
                 innovatively applied Dolphin water solutions and membrane processes for nonwater applications in many    industries for product purification and recovery, thus
                 generating value for customers. 
			</p>
			<button type="button" class="btn btn-outline-warning"><a href="#industi">Read More</a></button>
			
		</div>		 
	</div>
 </div>		
</section>
<!--- table for  our services  --->
<section>
	<div class="container">
		<div class="text">
				<div class="text-item1">
					<h1><span style="color:#2980b9;">Working towards restoring the planet.<br> <h3>Across different segments.</h3> </span></h1>
					
				</div>
		<table class="table">
			<thead>
				<th> Sector Served -<span style="color: #e67e22;">(Industries)</span></th>
				<th>Core Compentencies-<span style="color: #e67e22;">(The Widest Range)</span> </th>
			</thead>
			<tbody>
				<tr>
					<td>Automotive</td>
					<td>Pretreatment </td>
				</tr>
				<tr>
					<td>Brewery & Disllery</td>
					<td>Drinking Water Purification</td>
				</tr>
				<tr>
					<td>Cement</td>
					<td>Water Supply & Distribution Schemes</td>
				</tr>
				<tr>
					<td>Chemical</td>
					<td>Sea Water Intake & Desalination</td>
				</tr>
				<tr>
					<td>Construction</td>
					<td>Process Water & Liquid Treatment</td>
				</tr>
				<tr>
					<td>Fertiliser</td>
					<td>High Purity Water Generation & Distribution</td>
				</tr>
				<tr>
					<td>Mineral & Mining</td>
					<td>Waste Water Recycle & Zero Discharge</td>
				</tr>
				<tr>
					<td>Refinery & Petrochemical</td>
					<td>Boiler & Cooling Water Chemicals</td>
				</tr>
				<tr>
					<td>Steel</td>
					<td>Speciality Process Chemicals</td>
				</tr>
				<tr>
					<td>Pulp & Paper</td>
					<td>Polyelectrolytes </td>
				</tr>
					<td>and many more..</td>
					<td>Recovery of energy from waste </td>
				</tr>
			</tbody>
		</table>
<br>
<br>
	</div>
</section>
<hr>
<!----- tables ends here ---->
<!--- from every part of the globe ---->




<section>
	<div class="container-fluid">
		<div class=" container">
			<div class="text">
				<div class="text-item1">
					<h1><span style="color:#2980b9;">Together we are renewing the environment </span></h1>
					<p><span style="color:#000;  font-size: 20px;">From every part of the world.</span></p>
				</div>
				
			</div>
			
				<div class="row">
					
						<div class= "col-md-8">
							<img src="images/fromevery.png" class="img-fluid">
						</div>
						<div class="col-md-4">
							<img src="images/dolsols.png" class="img-fluid">
							<img src="images/dolsols2.png" class="img-fluid">

						</div>
						
				</div>

			</div>
		</div>
		
</section>


<!--- from every part of the globe ---->
<!---- read more starts here   ---->


<section>
	
	<div class="container-fluid servicecl">
      <div class="container ourvision"id="Our-vision">
      	<hr>
         <h2  style="text-align: center; color: #2980b9; font-size: 50px;">Our Vision</h2>
         <hr>      
        <div class="text" >
          <div class="row innerpara">
          	
          	<div class="col-md-4">
          		<img src="images/ourVision.png"  class="img-fluid">
          	</div>
          	<div class="col-md-8">
          		<p style="text-align:justify;" >
          			To be the leader in our business which is so vital to people's lives and the environment.'A
                    pioneer of water treatment with a legacy spanning over five decades, Dolphin water solutions
                    is today considered a premier company in water and environment management, with sales,
                    production and service footprints across the world. We are one of very few companies
                    worldwide with a complete range of water and environmental solutions. This enables us to
                    offer total solutions for all sectors - infrastructure, industry, institutions, homes and
                    communities.We serve our markets with a sustained focus on customer satisfaction,
                    technological innovation and dedicated service. Our capability to deliver state-of-the-art
                    technologies with complete technical support makes us a partner you can depend on.

          		</p>
          	</div>
             

          </div>
          
        
      </div>
   </div>
<br>
        <div class="container ourvision">
        	<hr>
         <h2  id="Conserv" style="text-align: center; color: #2980b9; font-size: 50px;">Conserving Natural Resource</h2>
           <hr>    
        <div class="text">
          <div class="row innerpara ">
          	
          	<div class="col-md-4">
          		<img src="images/conser.png"  class="img-fluid">
          	</div>
          	<div class="col-md-8 ">
          		<p style="text-align:justify;" >
          			Complementing engineered water treatment, a wide range of customised chemical treatment programmes,
                     boiler and cooling water treatments and fireside programmes ensure optimum plant performance that
                     reflects in the overall efficiency. Water quality monitoring products ensure accurate analysis of water,
                     essential for maintenance of boilers, cooling towers, softeners and demineralizes. These are available as
                     individual outfits, combination kits and refills.
          		</p>
          	</div>
             

          </div>
          
        
      </div>
   </div>
   <br>

    <div class="container ourvision">
    	<hr>
         <h2  id="industi"style="text-align: center; color: #2980b9; font-size: 50px;"> Sustainable Indudtry</h2>
         <hr>     
        <div class="text">
          <div class="text-item">
          
          	 <div class="row innerpara">
          	
          	<div class="col-md-4">
          		<img src="images/indust.png"  class="img-fluid">
          	</div>
          	<div class="col-md-8">
          		<p  style="text-align:justify;">
          			To be the leader in our business which is so vital to people's lives and the environment.'A
                    pioneer of water treatment with a legacy spanning over five decades, Dolphin water solutions
                    is today considered a premier company in water and environment management, with sales,
                    production and service footprints across the world. We are one of very few companies
                    worldwide with a complete range of water and environmental solutions. This enables us to
                    offer total solutions for all sectors - infrastructure, industry, institutions, homes and
                    communities.We serve our markets with a sustained focus on customer satisfaction,
                    technological innovation and dedicated service. Our capability to deliver state-of-the-art
                    technologies with complete technical support makes us a partner you can depend on.

          		</p>
          	</div>
             

          </div>
          	
          </div>
          
        
      </div>
   </div>
 </div>
</div>
</section>
<br>
<!---- read more ends here --->

<!---- footer  ----->
<?php include 'foooter.php'?>