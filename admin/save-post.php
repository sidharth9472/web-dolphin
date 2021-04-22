 <?php
    if( isset($_POST['save']) ){
        // database configuration
        include 'config.php';
        $post_name =mysqli_real_escape_string($conn, $_POST['post_name']);
        $p_date =mysqli_real_escape_string($conn, $_POST['p_date']);
        $paragraph =mysqli_real_escape_string($conn, $_POST['paragraph']);
        /* query for check input value exists in category table or not*/
       $sql = "INSERT INTO post(post_name,p_date,paragraph)VALUES ('{$post_name }','{$p_date}','{$paragraph}')";
            if (mysqli_query($conn, $sql)){
                header("location: {$hostname}/admin/post.php");
            }else{
              echo "<p style = 'color:red;text-align:center;margin: 10px 0';>Query Failed.</p>";
            }
        }
    mysqli_close($conn);

  ?>
 