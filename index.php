<?php
include("db.php");


session_start();

if(isset($_SESSION['user_name'])){

$user_id = $_SESSION['user_name'];

}


?>



<!DOCTYPE html> 
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/new.css">
    <link rel="icon"  href="images/scon.png">
    <link href="css/bootstrapp.min.css" rel="stylesheet">
    <title>Smart Construction</title>
    <link rel="stylesheet" type="text/css" href="css/spinner.css">
    <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="css/owl.theme.css">
    


    <script src="js/jquery.min.js"></script>
  

   
   

  </head>
<body>
  <div class="spinner-body" id="spinner">
 <div class="spinner">
<div class="loader l1"></div>
<div class="loader l2"></div>
</div>
</div>
  <header>
                       <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
  <div class="container-fluid navi">
    <a class="navbar-brand" href="#"><img src="images/smart.png"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" style="background-color:#fff;">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="gallery.php">Gallery</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="services.php">Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php" >About</a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact</a>
        </li>
    <?php

         if(isset($_SESSION['admin_name'])){
           echo '<li class="nav-item">
            <a class="nav-link" href="adminpage.php">Admin</a>
          </li>';
         }

         if(isset($_SESSION['user_name'])){
           echo '<li class="nav-item">
            <a class="nav-link" href="logout.php">Logout</a>
          </li>';
         }
         else{
          echo '<li class="nav-item">
            <a class="nav-link" href="login.php">Login</a>
          </li>';
         }
         

        ?>
      
      </ul>
    </div>
  </div>
</nav>

         </header>
          


<div class="parent-container">
    <div class=" w100 video-container">
      <video class="video" autoplay loop muted width="100%">
        <source id="mp4" src="images/Tropicall.mp4" type="video/mp4">
      </video>
    </div>
    <div class="welcome">
      <div class="homel col-md-6">
               <h1>Smart Construction</h1>
               <p>You can reach out us when you need help in<br>Construction,Buildings and Raw Materials.</p>
                <a href="services.php">Our Products</a>
                
            </div>
            <div class="homer col-md-6">
               <img src="images/builder.png">
            </div>
    </div>
  </div>
 
<section class="about container-fluid col-md-12 mb-3">
            <div class="aboutl col-md-6 ">
               <img src="images/img.jpg" height="400px" width="400px">
            </div>
            <div class="aboutr col-md-6 p-2 mt-3 ">
               <h2>Smart Buildings and Construction</h2>
               <p>The project entitled "Smart Construction" initiative the customer in the efficient construction of the building using quality labor and materials over the online. It provides facilities to the customer to place the orders directly from the factory at various quality levels and prices in both wholesale and retail price, and also to select the labors and technicians. The primary benefit of using this website is avoiding intermediary costs and fees. Materials are not provided in retail priced in existing project. But In our Project, we'll offer the product for both wholesale and retail prices and also overcome the drawbacks in exist. An interface between the client and the suppliers is provided by smart construction.The database's administrator has the authority to change prices and add new products, and the information they add is verified.  
</p>
            </div>
         </section>


<section class="">
   <h2 class="text-center mb-3">Our Completed Projects</h2>
  <div class="wrapper">
    <div class="col-md-12">
    <div class="flip col-md-3 images">
    <img src="images/h1.jpg">
    <div class="content text-center">
      <h2>1432 Sq.ft</h2>
            <p>Estimation:35,00,000</p>
            <p>Here we used Hign Quality Cement and River-Sand for construction.</p>
            <p>Cements Required:600 Bags</p>
            <p>Sand Required: 80 Loads</p>
    </div>
  </div>
  <div class="flip col-md-3 images">
    <img src="images/h2.jpg">
    <div class="content text-center">
      <h2>900 Sq.ft</h2>
            <p>Estimation:18,00,000</p>
            <p>Here we used Hign Quality Cement and River-Sand for construction.</p>
            <p>Cements Required:300 Bags</p>
            <p>Sand Required: 50 Loads</p>
    </div>
  </div>
  <div class="flip col-md-3 images">
    <img src="images/h3.jpg">
    <div class="content text-center">
       <h2>500 Sq.ft</h2>
            <p>Estimation:10,00,000</p>
            <p>Here we used Hign Quality Cement and River-Sand for construction.</p>
            <p>Cements Required:200 Bags</p>
            <p>Sand Required: 30 Loads</p>
    </div>
  </div>
  <div class="flip col-md-3 images">
    <img src="images/h4.jpeg">
    <div class="content text-center">
     <h2>1100Sq.ft</h2>
            <p>Estimation:22,00,000</p>
            <p>Here we used Hign Quality Cement and River-Sand for construction.</p>
            <p>Cements Required:410 Bags</p>
            <p>Sand Required: 45 Loads</p>
    </div>
  </div>
</div>
  </div>
</section>

<section class="testimonials container-fluid about">


      <div class="row">
        <h2 class="text-center mb-3 mt-3">Our Products</h2>
        <div id="owl-demo">
             <?php
   $sql="SELECT * FROM `service`";
   $result=mysqli_query($con,$sql);
   while($row=mysqli_fetch_assoc($result)){
    echo'
  <div class="item grabbing">
    <div class="pros">
      <img src="images/'.$row['img'].'">
     <a class="link" href="product.php?pro='.$row['name'].'"><h2 class="text-center">'.$row['name'].'</h2></a>
    </div>
  </div>';
 }
 ?>
</div>
        </div>


</section>
<section class="testimonial-slide mt-5 container">
  <h2 class="text-center mb-4 mt-4">Public Review</h2>
  <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div id="testimonial_carousel" class="owl-carousel">
            <?php
   $sql="SELECT * FROM `review` ORDER BY `id` DESC LIMIT 6;";
   $result=mysqli_query($con,$sql);
   while($row=mysqli_fetch_assoc($result)){
echo'
            <div class="test text-center">
                <img class="img-responsive rounded-circle img-fluid" src="images/'.$row['img'].'" alt="" width="250px" height="250px">
                <div class="test-details">
          <h5>'.$row['name'].'</h5>
          <p>'.$row['content'].'</p>
             </div>
            </div>';
            }
            ?>
          </div>
        </div>
      </div>
      </div>
    </section>
<!--div class="container-fluid reviews  col-md-12 mb-5 mx-auto">
  <h2 class="text-center mb-4">Public Review</h2>
  <div class="rend col-md-12">


    <!?php
   $sql="SELECT * FROM `review` ORDER BY `id` DESC;";
   $result=mysqli_query($con,$sql);
   while($row=mysqli_fetch_assoc($result)){

    echo'
  <div class="card review text-center add col-md-3 p-2 mb-3 " style="width:400.2px">
    
      <div class="col-md-12 adding">
       <img src="images/'.$row['img'].'"  width="70px" height="70px">
    </div>
    <div class="col-md-12 adding">
       <h5>'.$row['name'].'</h5>
    </div>
    <div class="col-md-12 ">
      <p>'.$row['content'].'</p>
    </div>
  </div>';
}

  ?>
</div>
</div-->


<footer class="text-center text-lg-start  text-muted">

  <section class="">
    <div class="container text-center text-md-start mt-5">
     
      <div class="row mt-3">
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4 text-center">
     
          <h6 class="text-uppercase fw-bold mb-4 text-center">
            Smart Construction
          </h6>
          <img src="images/smart.png" height="100px" width="200px">
          
        </div>
        
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto  text-center">
         
          <h6 class="text-uppercase fw-bold mb-4 text-center">
            <i class="fas fa-gem  text-secondary"></i>Description
          </h6>
          
          <p class="card-text">
            Online construction works can help increase efficiency, reduce costs, and improve communication among project teams. They also allow for greater flexibility and the ability to work remotely, which can be especially valuable. 
          </p>
        </div>
      
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto ">
          
          <h6 class="text-uppercase fw-bold mb-4">
            Useful links
          </h6>
          <p>
            <a href="#!" class="text-reset">Home</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Gallery</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Products</a>
          </p>
          <p>
            <a href="#!" class="text-reset">About</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Contact</a>
          </p>
        </div>
        
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0">
         
          <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
          <p><i class="fa fa-home me-3 text-secondary"></i>96 Mainroad palur 607102</p>
          <p>
            <i class="fa fa-envelope me-3 text-secondary"></i>
            info@smartcivil.com
          </p>
          <p><i class="fa fa-phone me-3 text-secondary"></i> +91-9500971102</p>
          <p><i class="fa fa-print me-3 text-secondary"></i> +91-9500971102</p>
        </div>
     
      </div>
  
    </div>
  </section>
  
</footer>


<script type="text/javascript" src="js/nav.js"></script>
<script type="text/javascript" src="js/owl.carousel.js"></script>
</body>
</html>