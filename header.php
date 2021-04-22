 <!--responsive.css-->
<style>
  .header_top {
  background-color: #0d2226;
  padding: 15px 0;
}
.header_top .contact_link-container {
  
  display: flex;
  -webkit-box-pack: justify;
    
          justify-content: space-between;
}
.header_top .contact_link-container a {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  color: #ffffff;
  font-size: 15px;
}
.header_top .contact_link-container a i {
    font-size: 22px;
    color: #ef6606;
    margin-right: 5px;
}

a, a:hover, a:focus {
    text-decoration: none;

}
 .card-blink
{
  box-shadow: 0 2px 10px rgba(0,0,0.2);
      width: 126px;
       
} 
.navbar-brand img
{
 
    width: 100px;
    height: 70px;
    /*margin-top: -45px;*/
    /*margin-bottom: -44px;*/
 margin-left: -70px;
}
.bg-dark {
    /* background-color: #343a40!important; */
    background: #006266!important;
}
  .navbar .nav-item:hover .nav-link{ 
    color: #ec9f69;

   }

</style>
  <body>
    <!--start top header-->
   <!--  <section class="fixed-top"> -->
  <section>
    <div class="header_top">
        <div class="container-fluid">
          <div class="contact_link-container">
            <a href="https://www.google.com/maps/place/Delta+House/@19.14519,72.8506488,17z/data=!4m8!1m2!2m1!1s3%2FRB+THIRD+FLOOR+DELTA+HOUSE!3m4!1s0x3be7b7dd86b62935:0x59ef4f315d158d98!8m2!3d19.14519!4d72.8528428">
              <i class="fa fa-map-marker" aria-hidden="true"></i>
              <span>
                Kolkata , West Bengal
              </span>
            </a>
            <a href="">
              <i class="fa fa-phone" aria-hidden="true"></i>
              <span>
                Call : +91 74850 67263
              </span>
            </a>
            <a href="">
              <i class="fa fa-envelope" aria-hidden="true"></i>
              <span>
                info@dolphinwatersolutions.in
              </span>
            </a>
          </div>
        </div>
      </div>
  </section>
<!--end top header-->
<section class="sticky-top">
<nav class="navbar navbar-expand-lg navbar-light bg-blue">
<a class="navbar-brand logo" href="#"><img src="images/LOGOnavbar.png"   ></a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav-control" 
aria-controls="nav-control" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse menu" id="nav-control">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php" style="color: white;">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php" style="color: white;">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="product.php" style="color: white;">Products</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="services.php" style="color: white;">Services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="blog.php" style="color: white;">Blogs/Press Release</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="career.php" style="color: white;">Career</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php" style="color: white;">Contact</a>
      </li>
       
  </ul>
</div>
</nav> 
</section>
<!-- </section> -->
<!--end header-->