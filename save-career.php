<?php
   $file_name = $_FILES["fileToUpload"]["name"];
   $target_dir = "admin/upload/cv/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
      include "config.php";
      $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
      // if($check !== false) {
      //   echo "File is an image - " . $check["mime"] . ".";
      //   $uploadOk = 1;
      // } else {
      //   echo "File is not an image.";
      //   $uploadOk = 0;
      // }
    }

      // Check if file already exists
      if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
      }

    // Check file size
    if ($_FILES["fileToUpload"]["size"] > 20971520) {
      echo "Sorry, your file is too large.";
      $uploadOk = 0;
    }

    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" && $imageFileType != "pdf" ) {
      echo "Sorry, only JPG, JPEG, PNG,pdf & GIF files are allowed.";
      $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
      echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
      if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
      } else {
        echo "Sorry, there was an error uploading your file.";
      }
    }
   
  $name = mysqli_real_escape_string($conn, $_POST['name']);
  $phone = mysqli_real_escape_string($conn, $_POST['phone']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $designation = mysqli_real_escape_string($conn, $_POST['designation']);
 
 

  $sql = "INSERT INTO career(`name`,`phone_no`,`email`,`designation`,`image`) VALUES ('{$name}','{$phone}','{$email}','{$designation}','{$file_name}')";
   
   
   if(mysqli_query($conn, $sql)){
    header("Location:{$hostname}/career.php");
     echo "<div class='alert alert-danger'>Submitted.</div>";
  }else{
     echo "<div class='alert alert-danger'>Query Failed.</div>";
  }
   
?>
