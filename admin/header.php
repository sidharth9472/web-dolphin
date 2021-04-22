<?php
  include "config.php";
  session_start();
  if(!isset($_SESSION["username"])){
    header("Location: {$hostname}/admin/");
  }
 
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
        
       
        <!-- font-awesome link -->
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>ADMIN Panel</title>
        <!-- Custom stlylesheet -->
        <!---- html text editor ---->


        <!---- html text editor ---->
        <style>
       <?php include 'css/style.css'?>
      </style>
    </head>
               <!--Body  -->
    <body>
        <!-- HEADER -->
        <div id="header-admin">
            <!-- container -->
            <div class="container">
                <!-- row -->
                <div class="row">
                    <!-- LOGO -->
                    <div class="col-md-4">
                        <a href="post.php"><img class="logo" src="img/logo.jpg"></a>
                    </div>
                    <div class="col-md-4"></div>
                    <!-- /LOGO -->
                      <!-- LOGO-Out -->
                     
                    <div class=" col-md-4">
                        <a href="logout.php" class="admin-logout">Hello  <?php echo $_SESSION["username"]; ?> , logout</a>
                    </div>
                    <!-- /LOGO-Out -->
                </div>
            </div>
        </div>
        <!-- /HEADER -->
        <!-- Menu Bar -->
        <div id="admin-menubar">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                       <ul class="admin-menu">
                            <li>
                                <a href="product.php">Product</a>
                            </li>
                            <li>
                                <a href="users.php">Users</a>
                            </li>
                            <li>
                                <a href="services.php">Services</a>
                            </li>
                             <li>
                                <a href="all-cv.php">ALL-CV</a>
                            </li>
                            <li>
                                <a href="contact.php">Contact</a>
                            </li>
                             <li>
                                <a href="post.php">Career</a>
                            </li>
                             <li>
                                <a href="blog.php">Blog</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Menu Bar -->
        
       
        
        
