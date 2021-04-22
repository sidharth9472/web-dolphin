<?php
$target_dir = "upload/product/";
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

    /// For 2nd File -->

      $target_dir = "upload/product/";
    $target_file1 = $target_dir . basename($_FILES["fileToUpload1"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image
    
      $check = getimagesize($_FILES["fileToUpload1"]["tmp_name"]);
      if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
      } else {
        echo "File is not an image.";
        $uploadOk = 0;
      }
 

      // Check if file already exists
      if (file_exists($target_file1)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
      }

    // Check file size
    if ($_FILES["fileToUpload1"]["size"] > 500000) {
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
      if (move_uploaded_file($_FILES["fileToUpload1"]["tmp_name"], $target_file1)) {
        echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload1"]["name"])). " has been uploaded.";
      } else {
        echo "Sorry, there was an error uploading your file.";
      }
    }


    /// For 3rd File -->

      $target_dir = "upload/product/";
    $target_file2 = $target_dir . basename($_FILES["fileToUpload2"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image
    
      $check = getimagesize($_FILES["fileToUpload2"]["tmp_name"]);
      if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
      } else {
        echo "File is not an image.";
        $uploadOk = 0;
      }
 

      // Check if file already exists
      if (file_exists($target_file2)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
      }

    // Check file size
    if ($_FILES["fileToUpload2"]["size"] > 500000) {
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
      if (move_uploaded_file($_FILES["fileToUpload2"]["tmp_name"], $target_file2)) {
        echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload2"]["name"])). " has been uploaded.";
      } else {
        echo "Sorry, there was an error uploading your file.";
      }
    }
       
  $product_name = mysqli_real_escape_string($conn, $_POST['product_name']);
  $tittle = mysqli_real_escape_string($conn, $_POST['tittle']);
  $sub_tittle = mysqli_real_escape_string($conn, $_POST['sub_tittle']);
  $short_details = mysqli_real_escape_string($conn, $_POST['short_details']);
  $desc = mysqli_real_escape_string($conn, $_POST['desc']);
  $short_desc = mysqli_real_escape_string($conn, $_POST['short_desc']);
  $price = mysqli_real_escape_string($conn, $_POST['price']);
  $current_price = mysqli_real_escape_string($conn, $_POST['current_price']);
 

  $sql = "INSERT INTO `product_details` (`product_name`, `tittle`, `sub_tittle`, `short_details`, `description`, `short_description`, `price`, `current_price`, `image`, `image1`, `image2`) VALUES ('{$product_name}','{$tittle}','{$sub_tittle}','{$short_details}','{$desc}','{$short_desc}','{$price}','{$current_price}','{$target_file}','{$target_file1}','{$target_file2}')";

   
  if(mysqli_query($conn, $sql)){
    header("location: {$hostname}/admin/product.php");
  }else{
     echo "<div class='alert alert-danger'>Query Failed.</div>";
  }

?>