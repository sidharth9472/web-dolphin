<?php include "header.php";?>
  <div id="admin-content">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <h1 class="admin-heading">Add New Post</h1>
              </div>
              <div class="col-md-offset-3 col-md-6">
                  <!-- Form Start -->
                  <form action="save-post.php" method="POST" autocomplete="off">
                      <div class="form-group">
                          <label>Post Name</label>
                          <input type="text" name="post_name" class="form-control" placeholder="Post Name" required>
                      </div>
             
                      <div class="form-group">
                         <label>Date</label>
                        <input type="date" name="p_date" class="form-control mt-1" placeholder="date" required="">
                      </div>
                     
                      <div class="form-group">
                          <label>Paragraph</label>
                          <textarea name="paragraph" class="form-control" rows="4" placeholder="write your text.." required></textarea>
                      </div><br>                  
                    <button class="btn btn-danger"><a href="post.php" style="color: white;">Cancel</a></button>  
                      <input type="submit" name="save" class="btn btn-primary" value="Save" required />
                  </form>
                  <!-- /Form End -->
              </div>
          </div>
      </div>
  </div>
   