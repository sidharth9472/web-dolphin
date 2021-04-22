<?php
    include 'config.php';
   // if($_SESSION["user_role"] == '0'){
   //    header("Location: {$hostname}/admin/product.php");
   //  } 
    $p_id = $_GET["pid"];

    /*sql to delete a record*/
    $sql = "DELETE FROM career WHERE id ='{$p_id}'";

    if (mysqli_query($conn, $sql)) {
        header("location:{$hostname}/admin/all-cv.php");
    }

    mysqli_close($conn);

?>
