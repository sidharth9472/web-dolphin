<?php include 'link_header.php'?>
<?php include 'header.php'?>

<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="images/logo.jpg" type="image/x-icon">
<title>Dolphin water solution.in</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!--style.css-->

    <title>Dolphin Water solution.in</title>
  </head>
  <style>
    .btn{
      background: #e06b09;
      color: white;
    }
    .col-md-6 img
   {
    display: inline-block;
    width: 50px;
    height: 50px;
    margin-top: 10px;
    cursor: pointer;
    border: 1px solid red;
   }
   
  </style>
 <body>
  <br>
  <br>
  <aside>
<div class="container ">
  <div class="row">

 <?php  
   include "config.php";

      $pid = $_GET['id'];
 
      $query= "SELECT  `product_name`, `tittle`, `sub_tittle`, `short_details`, `description`, `short_description`, `price`, `current_price`, `image`, `image1`, `image2` FROM `product_details` WHERE id ='{$pid}'";

      $queryfire=mysqli_query($conn, $query) or die("query failled");
       $num=mysqli_num_rows($queryfire);

    if ($num > 0) {
      while ($details=mysqli_fetch_array($queryfire)) {
       
        //print_r($cate);?>


    <div class="col-md-4">
      <div>
        <img class="pro-image" src="admin/<?php echo $details['image']; ?>" style="width: 100%; ">
        <div class="row">
             <div class="col-md-6">
              
              <img class="img-fluid" onclick="changeImage(this)" src="admin/<?php echo $details['image1']; ?>">
              <img class="img-fluid" onclick="changeImage(this)" src="admin/<?php echo $details['image2']; ?>">
            </div>
            
            
        </div>
      </div>
    </div>
    <div class="col -col-md-6" style="font-family: sans-serif;">
      <div>
        <h1 style="color: #e06b09"><?php echo $details['product_name']; ?></h1>
        <p><?php echo $details['tittle']; ?></p>
        <h4><b><?php echo $details['sub_tittle'];?></b></h4>
      </div>
      <div>
        <p><?php echo $details['short_details']; ?></p>
      </div>
      <div>
        <!-- Button trigger modal -->
<button  class="btn"><a href="contact.php" style=" color: #fff;">Ask for Quotes</a>
  
</button>



      </div>
    </div>
   
    <div class=" col-md-2" style="text-align: end;">
    <div>
      <h4 ><del>₹-<?php echo $details['price']; ?></del></h4>
      <h3 style="color: #e06b09;">₹ <?php echo $details['current_price']; ?></h3>
    </div>
    </div>
  </div>
</div>
</aside>
<br>
<br>
<section>
  <div class="container">
  <ul class="nav nav-tabs" style="font-size: 19px; ">
  <li class="nav-item">
    <a class="nav-link active" href="#" style="border-bottom:2px; border-color: #e06b09;" >DESCRIPTION</a>
  </li>
</ul>
<br>
<br>
<div>
  <h2>Features :-</h2>
  <ol>
   <li><?php echo $details['description']; ?></li>
  </ol>
  </div>
  <br>
  <br>
  <div>
    <h2>Specification:-</h2>
    <ul>
     <ol><?php echo $details['short_description']; ?></ol>
    </ul>

    <?php
      }
    }


  ?>
  </div>


</div>
</section>

<?php include 'foooter.php'?>