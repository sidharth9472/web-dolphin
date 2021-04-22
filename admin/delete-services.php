<?php
    include 'config.php';
   // if($_SESSION["user_role"] == '0'){
   //    header("Location: {$hostname}/admin/product.php");
   //  } 
    $s_id = $_GET["id"];
    // /sql to delete a record/

    $sql = "DELETE FROM services WHERE id ='{$s_id}'";

    if (mysqli_query($conn, $sql)) {
        header("location:{$hostname}/admin/services.php");
    }

    mysqli_close($conn);

?>