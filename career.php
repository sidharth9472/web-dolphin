<?php include 'link_header.php'?>
<?php include 'header.php'?>

<style>
  .text .ourvision
{
  background:  linear-gradient(45deg, #10a3e9, #2ecc71,#16a085);
}
.servicecl
{
  background-image: url(images/career.png);
  background-size: cover;
}
.innerpara
{
  box-shadow: 0 15px 45px rgba(0 ,0 ,0.1);
  padding: 20px;
  font-size: 17px;
  font-family: sans-serif;
  height: auto;
    background-color:#c8d6e5;
 
}
@media (max-width:1200px) {
  .innerpara {
    font-size: 12px;
    min-height: 600px;
  }

</style>
<body>
<section>   
<div class="container-fluid">
  <div class="container">
     <div class="text">
      <div class="text-item">
        
        <h2 style="font-size: 60px;  text-align: center;
                      border-radius: 5px;
                      background-image:url(images/pro2.jpg);
                      color: #fff;
                      line-height: auto;
                      font-family: sans-serif;
                      font-weight:700;
                      margin:10px;">
                CAREER</h2>

      </div>
     </div>
  </div>  
</div>
</section> 



<div class="container-fluid servicecl">
      <div class="container ourvision">
       
         <br>
         <br>
               
        <div class="text" >
          <div class="row ">
            <hr>
   <!--form of carrer-->

<div class="col-md-4 col-sm-4 col-xs-12" >
<aside style="    border: none;
    padding: 40px 15px;
    box-shadow: 0px 20px 45px rgba(0,0,0.2);
    background: #f3f3f3e0;     float: left;
    width: 100%;">
    <div>
      <h3 style="    font-size: 18px;
    text-transform: uppercase;
    color: #353744;
    font-weight: 700;
    margin: 0 0 26px;">Upload CV</h3>
    <form action="save-career.php" method="post", enctype="multipart/form-data">
  <div class="form-group">
    <label>Name:</label>
    <input type="text" name="name" class="form-control"  placeholder="" required>
  </div>
  <div class="form-group">
    <label>Phone</label>
    <input type="number" name="phone" class="form-control"  placeholder="+91" required>
  </div>
  <div class="form-group">
    <label>Email:</label>
    <input type="email" name="email" class="form-control"   placeholder="" required>
    </div>
    <div class="form-group">
     <label>Designation</label>
     <input type=text name="designation" class="form-control"   placeholder="" required>
    </div>

  <div class="form-group">
    <label>Upload Cv</label><div>
    <input type="file" name="fileToUpload" class="form-control-file" required></div>
  </div>
   <div class="form-group" style="text-align: center;
    margin: 13px;">
   <input type="submit" name="submit" class="btn btn-warning btn-lg btn-block" value="Submit" style="width:100%;"/>
</div>
</form>
  </div>
  </aside>
   </div>
  <br>
  <br>
     
  <!-- end form  -->
 
             
        
          
            <div  class="col-md-7 innerpara">

        <?php  
         include "config.php";

        $query= "SELECT * FROM `post` ";
        $queryfire=mysqli_query($conn, $query);
        $num=mysqli_num_rows($queryfire);

     if ($num > 0) {
      while ($cate = mysqli_fetch_array($queryfire)) {
       
        //print_r($cate);?>

              <div class="row">
                  <div class="col-md-9">
                <h3 style="margin-left:19px;"><?php echo $cate['post_name']; ?></h3>
                </div>
              
              <div class="col-md-3" style="margin-top:5px;">
                   <div class="date-box">
                       <span style="color: #000; font-size: 18px;"><?php echo $cate['p_date']; ?></span>                               
                   </div>
                 </div>
                 <hr>
              </div>
              <hr style="border-top: 4px solid;">
                 <h4> Roles & Responsibility</h4>
                 <p style="text-align:justify; padding: 4px;">
                   <br>
                   <?php echo $cate['paragraph']; ?>
                 </p>
                 <br>
                 
              <hr>

               <?php
            }
          }
              ?>
            </div>
            

          </div>
         
       
      </div>
   </div>
<br>
   
   </div>
 </div>
</section>
<?php include 'foooter.php'?>

