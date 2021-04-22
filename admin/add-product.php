 <?php include "header.php";
?>

  </script>
 <style>
       <?php include 'css/style.css'?>
      </style>
  <div id="admin-content">
      <div class="container">
         <div class="row">
             <div class="col-md-12">
                 <h1 class="admin-heading">Add New Product</h1>
             </div>
              <div class="col-md-offset-3 col-md-6">
                  <!-- Form -->
                  <form  action="save-product.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                          <label>Product-Name</label>
                          <input type="text" name="product_name" class="form-control" autocomplete="off" required>
                      </div>
                      <div class="form-group">
                          <label >Tittle</label>
                          <input type="text" name="tittle" class="form-control" autocomplete="off" required>
                      </div>

                      <div class="form-group">
                          <label>Sub-Tittle</label>
                          <input type="text" name="sub_tittle" class="form-control" autocomplete="off" required>
                      </div>
                       <div class="form-group">
                          <label>Short-Details</label>
                          <input type="text" name="short_details" class="form-control" autocomplete="off" required>
                      </div>

                      <div class="form-group">
                          <label> Description</label>
                          <textarea name="desc" id="mytextarea" class="form-control" rows="4"  required></textarea>
                      </div>
                      <div class="form-group">
                          <label> Short-Description</label>
                          <textarea name="short_desc" class="form-control" rows="2"  required></textarea>
                      </div>
                      <div class="form-group">
                          <label>Price</label>
                          <input type="text" name="price" class="form-control" autocomplete="off" required>
                      </div>
                      <div class="form-group">
                          <label>Current-Price</label>
                          <input type="text" name="current_price" class="form-control" autocomplete="off" required>
                      </div>

                      <div class="form-group mt-2">
                          <label>image1</label>
                          <input type="file" name="fileToUpload" required>
                      </div>
                      <div class="form-group mt-2">
                          <label>image2</label>
                          <input type="file" name="fileToUpload1" required>
                      </div>
                      <div class="form-group mt-2">
                          <label>image3</label>
                          <input type="file" name="fileToUpload2" required>
                      </div>
                    <button class="btn btn-danger mt-2"><a href="product.php" style="color: white;">Cancel</a></button>
                      <input type="submit" name="submit" class="btn btn-primary mt-2" value="Save" required />
                  </form>
                  <!--/Form -->
              </div>
          </div>
      </div>
  </div>

