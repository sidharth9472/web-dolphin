<?php include "header.php"; ?>
  <div id="admin-content">
      <div class="container">
          <div class="row">
              <div class="col-md-10">
                  <h1 class="admin-heading">All Services</h1>
              </div>
              <div class="col-md-2">
                  <a class="add-new" href="add-services.php">add services</a>
              </div>
              <div class="col-md-12">

                 <?php 
                   include "config.php";
                   $limit = 5;
                  if(isset($_GET["page"])){
                      $page = $_GET["page"];
                  }
                  else{
                      $page = 1;
                  };
                  $offset = ($page-1)* $limit;
                   $query="SELECT  `id`, `title`,`heading`,  `description`, `image_1`, `image_2` FROM `services`ORDER BY id DESC Limit $offset,$limit";
          $queryfire=mysqli_query($conn, $query);

         $num=mysqli_num_rows($queryfire);

           if ($num > 0) {?>
                
                  <table class="content-table">
                      <thead>
                          <th>S.No.</th>
                          <th>Title</th>
                          <th>services</th>
                          <th>description</th>
                          <th>img-1</th>
                          <th>img-2</th>
                          <th>Edit</th>
                          <th>Delete</th>
                      </thead>
                      <tbody>
                      <?php
                 $serial = $offset + 1;
      while ($product=mysqli_fetch_array($queryfire)) {
        
        //print_r($product);?>
                          <tr>
                              <td><?php echo $serial; ?></td>
                              <td><?php echo $product['title'];?></td>
                              <td><?php echo $product['heading'];?></td>
                              <td><?php echo $product['description'];?></td>
                              <td><?php echo $product['image_1'];?></td>
                              <td><?php echo $product['image_2'];?></td>
              <td class='edit'><a href='update-services.php?id=<?php echo $product['id']; ?>'><i class='fa fa-edit'></i></a></td>
             <td class='delete'><a href='delete-services.php?id=<?php echo $product['id']; ?>'><i class='fa fa-trash-o'></i></a></td>
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
                $sql1 = "SELECT * FROM services";
                $result1 = mysqli_query($conn, $sql1) or die("Query Failed.");

                if(mysqli_num_rows($result1) > 0){

                  $total_records = mysqli_num_rows($result1);

                  $total_page = ceil($total_records / $limit);

                  echo '<ul class="pagination admin-pagination">';
                  if($page > 1){
                    echo '<li><a href="services.php?page='.($page - 1).'">Prev</a></li>';
                  }
                  for($i = 1; $i <= $total_page; $i++){
                    if($i == $page){
                      $active = "active";
                    }else{
                      $active = "";
                    }
                    echo '<li class="'.$active.'"><a href="services.php?page='.$i.'">'.$i.'</a></li>';
                  }
                  if($total_page > $page){
                    echo '<li><a href="services.php?page='.($page + 1).'">Next</a></li>';
                  }

                  echo '</ul>';
                }
                  ?>


               </div>
          </div>
      </div>
  </div>