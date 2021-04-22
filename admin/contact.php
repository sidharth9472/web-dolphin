<?php include "header.php"; ?>
  <div id="admin-content">
      <div class="container">
          <div class="row">
              <div class="col-md-10">
                  <h1 class="admin-heading">All Contact</h1>
              </div>
              <div class="col-md-2">
                 
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
              $sql = "SELECT  `id`, `fullname`, `email`, `mobile`, `message` FROM contact ORDER BY id DESC Limit $offset,$limit";
              $result = mysqli_query($conn, $sql);
              if (mysqli_num_rows($result) > 0) {
                ?>
                  <table class="content-table">
                      <thead>
                                   <th>S.No.</th>
                                    <th>FULL-Name</th>
                                    <th>Email</th>
                                    <th>Mobile</th>
                                    <th>Message</th>
                                    <th>Delete</th>
                                    </thead>
                         <tbody>
                          <?php                
                          $serial = $offset + 1;
                     while($row = mysqli_fetch_assoc($result)) {
                      ?>
                          <tr>
                            <td class='id'><?php echo $serial; ?></td>
                            <td><?php echo $row['fullname']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td><?php echo $row['mobile']; ?></td>
                            <td><?php echo $row['message']; ?></td>
                             <td class='delete'><a href='delete-contact.php?pid=<?php echo $row["id"]; ?>'><i class='fa fa-trash-o'></i></a></td>
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
                $sql1 = "SELECT * FROM contact";
                $result1 = mysqli_query($conn, $sql1) or die("Query Failed.");

                if(mysqli_num_rows($result1) > 0){

                  $total_records = mysqli_num_rows($result1);

                  $total_page = ceil($total_records / $limit);

                  echo '<ul class="pagination admin-pagination">';
                  if($page > 1){
                    echo '<li><a href="contact.php?page='.($page - 1).'">Prev</a></li>';
                  }
                  for($i = 1; $i <= $total_page; $i++){
                    if($i == $page){
                      $active = "active";
                    }else{
                      $active = "";
                    }
                    echo '<li class="'.$active.'"><a href="contact.php?page='.$i.'">'.$i.'</a></li>';
                  }
                  if($total_page > $page){
                    echo '<li><a href="contact.php?page='.($page + 1).'">Next</a></li>';
                  }

                  echo '</ul>';
                }
                  ?>

               </div>
          </div>
      </div>
  </div>