 <?php include "header.php";

?>


  <div id="admin-content">
      <div class="container">
         <div class="row">
             <div class="col-md-12">
                 <h1 class="admin-heading">Add New Blog</h1>
             </div>
              <div class="col-md-offset-3 col-md-6">
                  <!-- Form -->
                  <form  action="save-blog.php" method="POST" enctype="multipart/form-data">
                    
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
                          <textarea name="desc" class="form-control" id="mytextarea" rows="4"  required></textarea>
                         
                      </div>
                     

                      <div class="form-group mt-2">
                          <label>Blog image</label>
                          <input type="file" name="fileToUpload" required>
                      </div>
                   <button class="btn btn-danger mt-2"><a href="blog.php" style="color: white;">Cancel</a></button>    
                      <input type="submit" name="submit" class="btn btn-primary mt-2" value="Save" required />
                  </form>
                  <!--/Form -->
              </div>
          </div>
      </div>
  </div>


