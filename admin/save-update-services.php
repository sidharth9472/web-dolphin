<?php
    if(isset($_POST["submit"])) {
      include "config.php";
     $file_name1 = $_FILES["up_fileToUpload1"]["name"];
     $old_image1 = $_POST["old_fileToUpload1"];
      
      // About Old Image 1
      if($file_name1 != ''){
        $new_fileToUpload1 = $_FILES["up_fileToUpload1"]["name"];
      }else{
          $new_fileToUpload1 =  $old_image1;
      }
      $target_dir = "upload/services/";
      $target_file1 = $target_dir . basename($new_fileToUpload1);
      move_uploaded_file($_FILES["fileToUpload1"]["tmp_name"], $target_file1);


      $file_name2 = $_FILES["up_fileToUpload2"]["name"];
     $old_image2 = $_POST["old_fileToUpload2"];
      
      // About Old Image 1
      if($file_name2 != ''){
        $new_fileToUpload2 = $_FILES["up_fileToUpload2"]["name"];
      }else{
          $new_fileToUpload2 =  $old_image2;
      }
      $target_dir = "upload/services/";
      $target_file2 = $target_dir . basename($new_fileToUpload2);
      move_uploaded_file($_FILES["fileToUpload2"]["tmp_name"], $target_file2);

    }
   

    /* query for update category table */
    $sql1 = "UPDATE services SET heading='{$_POST['up_heading']}',title='{$_POST['up_title']}',description='{$_POST['up_desc']}',image_1='$target_file1',image_2='$target_file2'  WHERE  id = '{$_POST['up_id']}'";

    if (mysqli_query($conn,$sql1)){
      // redirect all category page
      header("location: {$hostname}/admin/services.php");
    }else{
    echo "error";
  }
  ?>
