<?php
       if(isset($_POST["submit"])) {
      include "config.php";
     $file_name1 = $_FILES["p_fileToUpload"]["name"];
     $old_image1 = $_POST["old_p_fileToUpload"];
      
      // About Old Image 1
      if($file_name1 != ''){
        $new_fileToUpload1 = $_FILES["p_fileToUpload"]["name"];
      }else{
          $new_fileToUpload1 =  $old_image1;
      }
      $target_dir = "upload/product/";
      $target_file1 = $target_dir . basename($new_fileToUpload1);
      move_uploaded_file($_FILES["p_fileToUpload"]["tmp_name"], $target_file1);
      
      // 2nd file  :

      $file_name2 = $_FILES["p_fileToUpload1"]["name"];
     $old_image2 = $_POST["old_p_fileToUpload1"];
      
      // About Old Image 2
      if($file_name2 != ''){
        $new_fileToUpload2 = $_FILES["p_fileToUpload1"]["name"];
      }else{
          $new_fileToUpload2 =  $old_image2;
      }
      $target_dir = "upload/product/";
      $target_file2 = $target_dir . basename($new_fileToUpload2);
      move_uploaded_file($_FILES["p_fileToUpload1"]["tmp_name"], $target_file2);

    }

    // 3rd file

    $file_name3 = $_FILES["p_fileToUpload2"]["name"];
     $old_image3 = $_POST["old_p_fileToUpload2"];
      
      // About Old Image 2
      if($file_name3 != ''){
        $new_fileToUpload3 = $_FILES["p_fileToUpload2"]["name"];
      }else{
          $new_fileToUpload3 =  $old_image2;
      }
      $target_dir = "upload/product/";
      $target_file3 = $target_dir . basename($new_fileToUpload3);
      move_uploaded_file($_FILES["p_fileToUpload2"]["tmp_name"], $target_file2);

    


   
    /* query for update category table */
    $sql1 = "UPDATE product_details SET product_name='{$_POST['p_name']}',tittle='{$_POST['p_tittle']}',sub_tittle='{$_POST['p_sub_tittle']}',short_details='{$_POST['p_short_details']}',description='{$_POST['p_desc']}',short_description='{$_POST['p_short_desc']}',price='{$_POST['p_price']}',current_price='{$_POST['p_current_price']}',image='{$target_file1}',image1='{$target_file2}',image2='{$target_file3}'  WHERE  id='{$_POST['up_id']}'";
    

      if (mysqli_query($conn,$sql1)){
      // redirect all category page 
      header("location: {$hostname}/admin/product.php");
      }


  ?>