<?php include 'link_header.php'?>
<?php include 'header.php'?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     <title>dolphin</title>
  </head>
 
<style >
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #EE5A24;
  color: white;
}
.text-item h1
{
  text-align: center;
  border-radius: 5px;
  font-size: 60px;
  
  background-image:url(images/pro2.jpg);
  color: #fff;
  line-height: auto;

  font-family: sans-serif;
  font-weight:700;
 
  margin: 10px;
  

}

</style>
<body>
<br><br>
<section>

<div class="container">
<div class="text">
    <div class="text-item">

        <h1>Products</h1>

    </div>
</div>
</div>

</section>
<br>
<!---- table section starts here --->
<section>

<div class="container">
    <table id="customers">
        <tr>
        <th>Product-Name</th>
        <th>Description</th>
        <th>Current-Price</th>
      </tr>
  <tr >
    <?php  
  include "config.php";



        $query= "SELECT * FROM `product_details` ";
        $queryfire=mysqli_query($conn, $query);
        $num=mysqli_num_rows($queryfire);

     if ($num > 0) {
      while ($cate = mysqli_fetch_array($queryfire)) {
       
        //print_r($cate);?>
    <td>
      <a href="product-details.php?id=<?php echo $cate['id']; ?>"><?php echo $cate['product_name']; ?></a>
    </td>
    <td>
    <?php echo $cate['description']; ?>    
    </td>
    <td>    
    <?php echo $cate['current_price']; ?>
    </td>
  </tr>
   <?php
      }
    }
  ?>
  </table>
</div>
</section>

<br><br><br>


  </body>
</html>





<br><br><br>
<?php
        include "foooter.php";
    ?>



