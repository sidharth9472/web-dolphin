 <?php include "header.php";
?>
  <div id="admin-content">
      <div class="container">
         <div class="row">
             <div class="col-md-12">
                 <h1 class="admin-heading">Update Blog</h1>
             </div>
              <div class="col-md-offset-3 col-md-6">
                <?php
          include 'config.php';
          $up_id = $_GET['pid'];
          /* query record for modify*/
          $sql = "SELECT * FROM blog WHERE id ='{$up_id}'";
          $result = mysqli_query($conn, $sql);
          if (mysqli_num_rows($result) > 0) {
              while($row = mysqli_fetch_assoc($result)) { ?>
                  <!-- Form -->
                  <form  action="save-update-blog.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                      <input type="hidden" name="up_id"  class="form-control" value="<?php echo $row['id']; ?>">
                  </div>
                    
                      <div class="form-group">
                          <label >Tittle</label>
                          <input type="text" name="b_tittle" class="form-control" value="<?php echo $row['title']; ?>" autocomplete="off" required>
                      </div>

                      <div class="form-group">
                          <label>Sub-Tittle</label>
                          <input type="text" name="b_sub_tittle" class="form-control" value="<?php echo $row['sub_tittle']; ?>"  autocomplete="off" required>
                      </div>
                       <div class="form-group">
                          <label>Short-Details</label>
                          <input type="text" name="b_short_details" class="form-control" value="<?php echo $row['short_details']; ?>" autocomplete="off" required>
                      </div>

                      <div class="form-group">
                          <label> Description</label>
                          <textarea name="b_desc" class="form-control" id="mytextarea" rows="4"  required><?php echo $row['description']; ?></textarea>
                         
                      </div>
                     

                      <div class="form-group mt-2">
                          <label>Blog image</label>
                          <input type="file" name="b_fileToUpload">
                          <input type="hidden" name="old_b_fileToUpload" value="<?php echo $row['image']; ?>">
                      </div>
                       <button class="btn btn-danger mt-2"><a href="blog.php" style="color: white;">Cancel</a></button>
                      <input type="submit" name="submit" class="btn btn-primary mt-2" value="Update" required />
                  </form>
                  <!--/Form -->
                   <?php
              }
          }
        ?>
              </div>
          </div>
      </div>
  </div>


