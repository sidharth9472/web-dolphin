<?php include "header.php"; ?>


  <div id="admin-content">
      <div class="container">
         <div class="row">
             <div class="col-md-12">
                 <h1 class="admin-heading">Add New Service</h1>
             </div>
              <div class="col-md-offset-3 col-md-6">
                  <!-- Form -->
                  <form  action="save-services.php" method="POST" enctype="multipart/form-data">
                      <div class="form-group">
                          <label >Heading</label>
                          <input type="text" name="service_heading" class="form-control" autocomplete="off" required>
                      </div>

                      <div class="form-group mt-3">
                          <label >Tittle</label>
                          <input type="text" name="service_title" class="form-control" autocomplete="off" required>
                      </div>
                      <div class="form-group mt-3">
                          <label > Description</label>
                          <textarea name="service_desc" id="mytextarea" class="form-control" rows="5"  required></textarea>
                      </div>
                    
                      <div class="form-group mt-3">
                          <label >upload image 1</label>
                          <input type="file" name="fileToUpload" required>
                      </div>
                     <div class="form-group mt-3">
                          <label >upload image 2</label>
                          <input type="file" name="fileToUpload1"  required>
                      </div>
                    <button class="btn btn-danger mt-3"><a href="services.php" style="color: white;">Cancel</a></button>
                      <input type="submit" name="submit" class="btn btn-primary mt-3" value="Save" required />
                  </form>
                  <!--/Form -->
              </div>
          </div>
      </div>
  </div>

