<?php include 'link_header.php'?>
<?php include 'header.php'?>
<style>
	.pt-100 {
	padding-top: 100px;
}

.pb-100 {
	padding-bottom: 100px;
}

.ptb-100 {
	padding: 100px 0px;
}

.pt-70 {
	padding-top: 70px;
}

.pb-70 {
	padding-bottom: 70px;
}

.ptb-70 {
	padding: 70px 0px;
}

p {
	font-size: 20px;
  font-family: sans-serif;
	margin: 0px;
	padding: 0px;
}

h1,
h2,
h3,
h4,
h5,
h6 {
	margin: 0;
	padding: 0;
	color: #282936;
}

#services .title {
	font-size: 46px;
	color: #000000;
	font-weight: 600;
}

#services .title span {
	font-size: 46px;
	color: #FF5722;
	font-weight: 600;
}

#services .btn-primary {
	color: #fff;
	background-color: #FF5722;
	border: none;
	font-size: 14px;
	letter-spacing: 1px;
	text-transform: uppercase;
	padding: 12px 20px;
	min-width: 150px;
	transition: all 0.5s ease;
	-moz-transition: all 0.5s ease;
	-webkit-transition: all 0.5s ease;
	-ms-transition: all 0.5s ease;
	-o-transition: all 0.5s ease;
}

.btn-primary:hover {
	-webkit-box-shadow: 0 5px 9px -4px rgb(0 0 255 / 65%);
	box-shadow: 0 5px 9px -4px rgb(0 0 255 / 65%);
}

.card-items .card {
	position: relative;
	display: -ms-flexbox;
	display: flex;
	-ms-flex-direction: column;
	flex-direction: column;
	min-width: 0;
	word-wrap: break-word;
	background-color: #fff;
	background-clip: border-box;
	border: none;
	border-radius: .25rem;
	box-shadow: 0 2px 48px 0 rgba(0, 0, 0, 0.08);
	margin-bottom: 30px;
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
	background-color:#9decff66;
	
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
</style>

    <section id="services" class="bg-light pt-100 pb-70">
       <div class="container">
          <div class="row align-items-center">
             <div class="col-lg-5">
                <h2 class="title">What <span>Service</span> We
                   Offer
                </h2>
            <p class=" mt-3 ">Satisfaction of customers is paramount and to ensure this, we offer
              a complete range of technical services. These deliver economic
              benefit and convenience of total solutions, with single point
              responsibility.</p>
           <ul style="font-size:18px; font-family: sans-serif;  ">
           	<li>Water and environmental consultancy</li>
           	<li>Plant and process audits</li>
           	<li>Surveys, feasibility and pilot plant studies</li>
           	<li>Plant rehabilitaon, retrofing and automaon</li>
           	<li>Operaon and maintenance</li>
           	<li>Plants on rental basis</li>
           	<li>Operator training</li>
           	<li>Supply of consumables and spares</li>
           </ul>
            <a class="btn btn-primary my-5" href="contact.php">Contact Us </a>
         </div>
         <div class="col-lg-7">
            <div class="row card-items">
               <div class="col-lg-6 col-sm-6">

                  <div class="card">
                  	<img src="images/service1.png" height="200px" alt="1">
                  </div>
               </div>
               <div class="col-lg-6 col-sm-6">
                  <div class="card">
                  	<img src="images/service2.png" height="200px" alt="1">
                  </div>
               </div>
               <div class="col-lg-6 col-sm-6">
                  <div class="card">
                  	<img src="images/water-testkits-refil.png" height="200px"  alt="1">
                  </div>
               </div>
               <div class="col-lg-6 col-sm-6">
                  <div class="card">
                  	<img src="images/service3.png" height="200px" alt="1">
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>

<!---- read more section ---->
<!---- services php page ----->
<div class="container ourvision">

   <?php   
     include "config.php";


     $query="SELECT  `heading`, `title`, `description`, `image_1`, `image_2` 
            FROM `services` order by id ASC ";
          $queryfire=mysqli_query($conn, $query);

         $num=mysqli_num_rows($queryfire);

    if ($num > 0) {
      while ($product=mysqli_fetch_array($queryfire)) {
        
        //print_r($product);?>
  
  <hr>
   <h2 id="Our-vision" style="text-align: center; color:
    #2980b9; font-size: 50px;"><?php echo $product['heading']; ?></h2>
         <hr>      
        <div class="text" >
          <div class="row innerpara">
            
            <div class="col-md-4">
              <img src="admin/<?php echo $product['image_1']; ?>" width="400px" class="img-fluid">
              <hr>
              <img src="admin/<?php echo $product['image_2']; ?>" width="400px" class="img-fluid">
            </div>
            <div class="col-md-8">
                 <h3> <?php echo $product['title']; ?></h3>
                <hr>
              <p style="text-align:justify; font-size:18px; font-family:">
               
                    <?php echo $product['description']; ?>

              </p>
            </div>
             

          </div>
          
        
      </div>
      <?php
      }
    }
    ?>
        
  </div>





<br><br>

<!---- read more section ---->
<!---- script ---->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!--- script end ---->

<?php include 'foooter.php'?>