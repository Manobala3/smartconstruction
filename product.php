 <?php
include("db.php");



session_start();

if(isset($_SESSION['user_name'])){

$user_id = $_SESSION['user_name'];

}

if(isset($_POST['hello'])){
  
  if(!$user_id){
    header("location:login.php");
  }

}



  if(isset($_GET['pro'])){
    $pro= $_GET['pro'];
  }


$sql= "SELECT * FROM `product` WHERE `pro`='$pro'";

$result= mysqli_query($con,$sql);



      

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/product.css">
    <link href="css/bootstrapp.min.css" rel="stylesheet">
    <link rel="icon"  href="images/scon.png">
    <title>Smart Construction-Product</title>
    <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/spinner.css">
    
    <link rel="stylesheet" type="text/css" href="css\font-awesome\css\font-awesome.min.css">

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
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="images/smart.png"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" style="background-color:#fff;">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="gallery.php">Gallery</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="services.php">Products</a>
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
        
<section class="services">
  <div class="row">
 <?php

if ($result->num_rows > 0) {

  while($row = $result->fetch_assoc()) {
     
$product=$row['name'];

 

 echo'
     <div class="column">
      
          
          <div class="card">
            
              <img class="rounded" src="images/'.$row['image'].'">
           <div class="name_pro">
            <h3 class="mt-3">'.$row['name'].'</h3>
            <p class="mt-3">'.$row['details'].'</p>
            </div>
            <form method="POST" class="mt-3 button">
                                     <button onclick="don()" type="button" class="btn btn-dark mt-4 text-white col-md-12" name="hello"><a href="buyproduct.php?click='.$row['name'].'">Buy Now</a></button>
                                    <button type="button" class=" left btn btn-dark mt-4 text-white col-md-12"><a href="tel:9500971102"><i class="fa fa-phone mr-2"></i></a></button>
                                     <button type="button" class="left btn btn-dark mt-4 text-white col-md-12"><a href="https://wa.me/+919500971102"><i class="fa fa-whatsapp mr-2"></a></i></button>
                                     </form>
          </div>
          
        </div>
   ';

 

}
}
?>
    
</div>
</section>

                       

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

</section>



<script type="text/javascript" src="js/nav.js"></script>


</body>
</html>