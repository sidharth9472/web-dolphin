 <?php
      if(isset($_POST["submit"])) {
      include "config.php";
     $file_name = $_FILES["b_fileToUpload"]["name"];
     $old_image = $_POST["old_b_fileToUpload"];
      
      // About Old Image 1
      if($file_name != ''){
        $new_fileToUpload = $_FILES["b_fileToUpload"]["name"];
      }else{
          $new_fileToUpload =  $old_image;
      }
      $target_dir = "upload/blog/";
      $target_file = $target_dir . basename($new_fileToUpload);
      move_uploaded_file($_FILES["b_fileToUpload"]["tmp_name"], $target_file);
   
    /* query for update category table */
    $sql1 = "UPDATE blog SET title='{$_POST['b_tittle']}',sub_tittle='{$_POST['b_sub_tittle']}',short_details='{$_POST['b_short_details']}',description='{$_POST['b_desc']}',image='{$target_file}'  WHERE  id='{$_POST['up_id']}'";
    

      if (mysqli_query($conn,$sql1)){
      // redirect all category page 
      header("location: {$hostname}/admin/blog.php");
      }
   }
  ?>
