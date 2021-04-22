<?php include "header.php"; ?>

  <div id="admin-content">
      <div class="container">
         <div class="row">
             <div class="col-md-12">
                 <h1 class="admin-heading">Update Service</h1>
             </div>
              <div class="col-md-offset-3 col-md-6">
                  <!-- Form -->
                  <?php
                   include 'config.php';
                   $s_id = $_GET['id'];
                   // query for modify the services
                   $sql = "SELECT * FROM  services WHERE id='{$s_id}'";
                   $result= mysqli_query($conn ,$sql) or die("Query failed");
                   if(mysqli_num_rows($result) > 0) { 
                    while ($row=mysqli_fetch_assoc($result))     { ?>

                      <!-- form update -->

                  <form  action="save-update-services.php" method="POST" enctype="multipart/form-data">
                      <div class="form-group">
                        <input type="hidden" name="up_id" class="form-control" value="<?php echo $row['id']; ?>" autocomplete="off" required>
                          <label >Heading</label>
                          <input type="text" name="up_heading" class="form-control" value="<?php echo $row['heading']; ?>" autocomplete="off" required>
                      </div>

                      <div class="form-group mt-3">
                          <label >Title</label>
                          <input type="text" name="up_title" class="form-control" value="<?php echo $row['title']; ?>" autocomplete="off" required>
                      </div>
                      <div class="form-group mt-3">
                          <label > Description</label>
                          <textarea name="up_desc" id="mytextarea" class="form-control"  rows="5"  required><?php echo $row['description']; ?></textarea>
                      </div>
                    
                      <div class="form-group mt-3">
                          <label >upload img1</label>
                          <input type="file" name="up_fileToUpload1">
                          <input type="hidden" name="old_fileToUpload1" value="<?php echo $row['image_1']; ?>" >
                      </div>
                     <div class="form-group mt-3">
                          <label >upload img2</label>
                          <input type="file" name="up_fileToUpload2">
                          <input type="hidden" name="old_fileToUpload2" value="<?php echo $row['image_2']; ?>">
                      </div>
                      <button class="btn btn-danger mt-3"><a href="services.php" style="color: white;">Cancel</a></button>
                      <input type="submit" name="submit" class="btn btn-primary mt-3" value="Update" required />
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

