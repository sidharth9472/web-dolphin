
<?php include 'link_header.php' ?>
<?php include 'header.php' ?>
<style>

.text-item h1
{
  text-align: center;
  border-radius: 5px;
  background-image:url(images/pro2.jpg);
  color: #fff;
  line-height: auto;
  font-family: sans-serif;
  font-weight:700;
}

</style>
 <br>
 <br>
 <br>
 <section>
<div class="container-fluid">
  <div class="container">
     <div class="text">
      <div class="text-item">
        
        <h1 style="font-size: 60px;">BLOG</h1>

      </div>
     </div>
  </div>  
</div>
</section>  
<section>
  <!-- Start Customer Reviews -->
  <div class="container">
    
  <div class="row">

    <?php  
         include "config.php";

        $query= "SELECT * FROM `blog` ";
        $queryfire=mysqli_query($conn, $query);
        $num=mysqli_num_rows($queryfire);

     if ($num > 0) {
      while ($cate = mysqli_fetch_array($queryfire)) {
       
        //print_r($cate);?>

     <div class="col-md-4">
    <div class="card" style="width: 20rem; height: 30rem; margin: 20px;">
         <img src="admin/<?php echo $cate['image']; ?>" class="card-img-top" style="width:100%; height:250px; " alt="...">
           <div class="card-body">
              <h5 class="card-title"><?php echo $cate['title']; ?></h5>
              <p class="card-text"><?php echo $cate['short_details']; ?></p>
              <a href="blog-details.php?id=<?php echo $cate['id']; ?>" class="btn btn-warning">More Details</a>
           </div>
    </div>
  </div>
      <?php 
      }
      }
       ?>
</div>
</div>
  <!-- End Customer Reviews -->
</section>





<?php include 'foooter.php' ?>