<?php include 'link_header.php'?>
<?php include 'header.php'?>

<!DOCTYPE html>
<html>
<head>
  <title>Dolphin water solution.in</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>

<div class="container-fluid" style="background-color: #ecf0f1; ">
  <div class="container">
  <?php
     include "config.php";
      $gid = $_GET['id'];
 
      $query= "SELECT `title`, `sub_tittle`, `short_details`, `description`, `image` FROM `blog` WHERE id ='{$gid}'";

      $queryfire=mysqli_query($conn, $query) or die("query failled");
       $num=mysqli_num_rows($queryfire);

    if ($num > 0) {
      while ($details=mysqli_fetch_array($queryfire)) {
       
   ?>
  <div>
    <img src="admin/<?php echo $details['image']; ?>" style="width: 100%; height: 300px; margin: 20px;" class="img-fluid" >
  </div>
  <div>
    <h1 style="text-align: center; color: #30336b; font-size: 40px;" ><?php echo $details['title']; ?></h1><hr style="background-color: #2c3e50; height:6px;">
  </div>
  <div>
    <h3 style="text-align: justify; color: #30336b; font-size: 30px;" ><?php echo $details['sub_tittle']; ?></h3><br>
    <p style="font-size: 20px; text-align:justify;">
      <?php echo $details['description']; ?>
    </p>
  </div>
  <?php
  }
  } ?>
</div>
</div>

</body>
</html>