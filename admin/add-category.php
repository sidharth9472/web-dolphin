<?php include "header.php";?>
  <div id="admin-content">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <h1 class="admin-heading">Add New Category</h1>
              </div>
              <div class="col-md-offset-3 col-md-6">
                  <!-- Form Start -->
                  <form action="save-category.php" method="POST" autocomplete="off">
                      <div class="form-group">
                          <label>Category</label>
                          <input type="text" name="cat" class="form-control" placeholder="Category Name" required>
                      </div>
             
              <div class="form-group">
                         <label>Sub-Category</label>
                        <input type="text" name="subcat" class="form-control mt-1" placeholder="Sub-Category Name ">
                      </div>
                      <div class="form-group">
                         <label>Product-Name</label>
                        <input type="text" name="product_name" class="form-control mt-1" placeholder="Product-Name">
                      </div><br>                     
                      <input type="submit" name="save" class="btn btn-primary" value="Save" required />
                  </form>
                  <!-- /Form End -->
              </div>
          </div>
      </div>
  </div>
   