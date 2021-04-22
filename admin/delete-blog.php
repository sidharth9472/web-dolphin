<?php
    include 'config.php';
   // if($_SESSION["user_role"] == '0'){
   //    header("Location: {$hostname}/admin/product.php");
   //  } 
    $id = $_GET["pid"];

    /*sql to delete a record*/
    $sql = "DELETE FROM blog WHERE id ='{$id}'";

    if (mysqli_query($conn, $sql)) {
        header("location:{$hostname}/admin/blog.php");
    }

    mysqli_close($conn);

?>
