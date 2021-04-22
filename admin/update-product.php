 <?php include "header.php";
?>
  <div id="admin-content">
      <div class="container">
         <div class="row">
             <div class="col-md-12">
                 <h1 class="admin-heading">Update Product</h1>
             </div>
              <div class="col-md-offset-3 col-md-6">
                              <!-- code  php    -->
                <?php
          include 'config.php';
          $up_id = $_GET['pid'];
          /* query record for modify*/
          $sql = "SELECT * FROM product_details WHERE id ='{$up_id}'";
          $result = mysqli_query($conn, $sql);
          if (mysqli_num_rows($result) > 0) {
              while($row = mysqli_fetch_assoc($result)) { ?>

                  <!-- Form -->
                  <form  action="save-update-product.php" method="POST" enctype="multipart/form-data">
                      <div class="form-group">
                      <input type="hidden" name="up_id"  class="form-control" value="<?php echo $row['id']; ?>">
                  </div>
                    <div class="form-group">
                          <label>Product-Name</label>
                          <input type="text" name="p_name" class="form-control" value="<?php echo $row['product_name']; ?>" autocomplete="off" required>
                      </div>
                      <div class="form-group">
                          <label >Tittle</label>
                          <input type="text" name="p_tittle" class="form-control" value="<?php echo $row['tittle']; ?>"autocomplete="off" required>
                      </div>

                      <div class="form-group">
                          <label>Sub-Tittle</label>
                          <input type="text" name="p_sub_tittle" class="form-control" value="<?php echo $row['sub_tittle']; ?>" autocomplete="off" required>
                      </div>
                       <div class="form-group">
                          <label>Short-Details</label>
                          <input type="text" name="p_short_details" class="form-control" value="<?php echo $row['short_details']; ?>" autocomplete="off" required>
                      </div>

                      <div class="form-group">
                          <label> Description</label>
                          <textarea name="p_desc" class="form-control" rows="4"  required><?php echo $row['description']; ?></textarea>
                      </div>
                      <div class="form-group">
                          <label> Short-Description</label>
                          <textarea name="p_short_desc" class="form-control" rows="2" required><?php echo $row['short_description']; ?></textarea>
                      </div>
                      <div class="form-group">
                          <label>Price</label>
                          <input type="text" name="p_price" class="form-control" value="<?php echo $row['price']; ?>" autocomplete="off" required>
                      </div>
                      <div class="form-group">
                          <label>Current-Price</label>
                          <input type="text" name="p_current_price" class="form-control" value="<?php echo $row['current_price']; ?>" autocomplete="off" required>
                      </div>

                     <div class="form-group mt-2">
                          <label>image1</label>
                          <input type="file" name="p_fileToUpload">
                          <input type="hidden" name="old_p_fileToUpload" value="<?php echo $row['image']; ?>" >
                      </div>
                      <div class="form-group mt-2">
                          <label>image2</label>
                          <input type="file" name="p_fileToUpload1">
                          <input type="hidden" name="old_p_fileToUpload1" value="<?php echo $row['image1']; ?>" >
                      </div>
                      <div class="form-group mt-2">
                          <label>image3</label>
                          <input type="file" name="p_fileToUpload2">
                          <input type="hidden" name="old_p_fileToUpload2" value="<?php echo $row['image2']; ?>" >
                      </div>
                     <button class="btn btn-danger mt-2"><a href="product.php" style="color: white;">Cancel</a></button>
                      <input type="submit" name="submit" class="btn btn-primary mt-2" value="update" required />
                  </form>
                  <?php
              }
          }
        ?>
                  <!--/Form -->
              </div>
          </div>
      </div>
  </div>

