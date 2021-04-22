 <?php
   if(isset($_POST['submit'])){
    include "config.php";
   
   
    /* query for update category table */
    $sql1 = "UPDATE post SET post_name='{$_POST['po_name']}',p_date='{$_POST['po_date']}',paragraph='{$_POST['po_paragraph']}' WHERE  id='{$_POST['post_id']}'";
    

      if (mysqli_query($conn,$sql1)){
      // redirect all category page 
      header("location: {$hostname}/admin/post.php");
      }
   }
  ?>
