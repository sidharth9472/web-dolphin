<?php include "header.php";
// if($_SESSION["user_role"] == '0'){
//   header("Location: {$hostname}/admin/product.php");
// }
?>
  <div id="admin-content">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
            <h1 class="adin-heading">Update Post</h1>
        </div>
        <div class="col-md-offset-3 col-md-6">
        <?php
        include 'config.php';
          $post_id = $_GET['pid'];
          /* query record for modify*/
          $sql = "SELECT * FROM post WHERE id ='{$post_id}'";
          $result = mysqli_query($conn, $sql);
          if (mysqli_num_rows($result) > 0) {
              while($row = mysqli_fetch_assoc($result)) { ?>
              <!-- Form Start -->
              <form action="save-update-post.php" method ="POST">
                  <div class="form-group">
                      <input type="hidden" name="post_id"  class="form-control" value="<?php echo $row['id']; ?>">
                  </div>
                  <div class="form-group">
                      <label>Post Name</label>
                      <input type="text" name="po_name" class="form-control" value="<?php echo $row['post_name']; ?>"  placeholder="post name.." required>
                  </div>
                  <div class="form-group">
                      <label>Date</label>
                      <input type="text" name="po_date" class="form-control" value="<?php echo $row['p_date']; ?>"  placeholder="post date" required>
                  </div>
                   <div class="form-group">
                          <label>Paragraph</label>
                          <textarea name="po_paragraph" class="form-control" rows="4"  placeholder="write your text.." required><?php echo $row['paragraph']; ?></textarea>
                      </div><br>
                    <button class="btn btn-danger"><a href="post.php" style="color: white;">Cancel</a></button>
                  <input type="submit" name="submit" class="btn btn-primary" value="Update" />
              </form>
               <!-- Form End-->
              <?php
              }
          }
        ?>
        </div>
      </div>
    </div>
  </div>
  