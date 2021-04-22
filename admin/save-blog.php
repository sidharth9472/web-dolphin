<?php
 $target_dir = "upload/blog/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
      include "config.php";
      $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
      if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
      } else {
        echo "File is not an image.";
        $uploadOk = 0;
      }
    }

      // Check if file already exists
      if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
      }

    // Check file size
    if ($_FILES["fileToUpload"]["size"] > 500000) {
      echo "Sorry, your file is too large.";
      $uploadOk = 0;
    }

    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
      echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
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
   

  $tittle = mysqli_real_escape_string($conn, $_POST['tittle']);
  $sub_tittle = mysqli_real_escape_string($conn, $_POST['sub_tittle']);
  $short_details = mysqli_real_escape_string($conn, $_POST['short_details']);
  $desc = mysqli_real_escape_string($conn, $_POST['desc']);

 
  

  $sql = "INSERT INTO `blog` ( `title`, `sub_tittle`, `short_details`, `description`, `image`) VALUES ('{$tittle}','{$sub_tittle}','{$short_details}','{$desc}','{$target_file}')";

  if(mysqli_query($conn, $sql)){
      
    header("location: {$hostname}/admin/blog.php");
  }else{
     echo "<div class='alert alert-danger'>Query Failed.</div>";
  }
 
?>