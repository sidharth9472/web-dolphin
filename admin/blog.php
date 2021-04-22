<?php include "header.php"; ?>
  <div id="admin-content">
      <div class="container">
          <div class="row">
              <div class="col-md-10">
                  <h1 class="admin-heading">All BLOGS</h1>
              </div>
              <div class="col-md-2">
                  <a class="add-new" href="add-blog.php">ADD BLOG</a>
              </div>
                  <div class="col-md-12">
                 <?php
                include 'config.php';// database configuration
                 /* Calculate Offset Code */
                  $limit = 5;
                  if(isset($_GET["page"])){
                      $page = $_GET["page"];
                  }
                  else{
                      $page = 1;
                  };
                  $offset = ($page-1)* $limit;
              /* select query with offset and limit */
              $sql = "SELECT  `id`, `title`, `sub_tittle`, `description`, `image` FROM  blog ORDER BY id DESC Limit $offset,$limit";
              $result = mysqli_query($conn, $sql);
              if (mysqli_num_rows($result) > 0) {
                ?>
                  <table class="content-table">
                      <thead>
                                   <th>S.No.</th>
                                    <th>Tittle</th>
                                    <th>Description</th>
                                    <th>Image</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                    </thead>
                         <tbody>
                          <?php                
                          $serial = $offset + 1;
                     while($row = mysqli_fetch_assoc($result)) {
                      ?>
                          <tr>
                            <td class='id'><?php echo $serial; ?></td>
                            <td><?php echo $row['title']; ?></td>
                            <td><?php echo $row['description']; ?></td>
                            <td><?php echo $row['image']; ?></td>
                            <td class='edit'><a href='update-blog.php?pid=<?php echo $row["id"]; ?>'><i class='fa fa-edit'></i></a></td>
                            <td class='delete'><a href='delete-blog.php?pid=<?php echo $row["id"]; ?>'><i class='fa fa-trash-o'></i></a></td>
                        </tr>
                         <?php
                          $serial++;
                        } ?>
                  </tbody>
                </table>
                    <?php
                }else {
                  echo "<h3>No Results Found.</h3>";
                }
                // show pagination
                $sql1 = "SELECT * FROM blog";
                $result1 = mysqli_query($conn, $sql1) or die("Query Failed.");

                if(mysqli_num_rows($result1) > 0){

                  $total_records = mysqli_num_rows($result1);

                  $total_page = ceil($total_records / $limit);

                  echo '<ul class="pagination admin-pagination">';
                  if($page > 1){
                    echo '<li><a href="blog.php?page='.($page - 1).'">Prev</a></li>';
                  }
                  for($i = 1; $i <= $total_page; $i++){
                    if($i == $page){
                      $active = "active";
                    }else{
                      $active = "";
                    }
                    echo '<li class="'.$active.'"><a href="blog.php?page='.$i.'">'.$i.'</a></li>';
                  }
                  if($total_page > $page){
                    echo '<li><a href="blog.php?page='.($page + 1).'">Next</a></li>';
                  }

                  echo '</ul>';
                }
                  ?>

               </div>
          </div>
      </div>
  </div>

