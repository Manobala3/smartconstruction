<?php
include("db.php");


session_start();

if(isset($_SESSION['user_name'])){

$user_id = $_SESSION['user_name'];

}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="icon"  href="images/scon.png">
 
  <script src="js/jquery.min.js"></script>
    <link rel="stylesheet" href="css/bootstrapp.min.css">
    <link rel="stylesheet" type="text/css" href="css/spinner.css">
    <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/about.css">
     <link rel="stylesheet" type="text/css" href="css\font-awesome\css\font-awesome.min.css">
  <title>About - Smart Construction</title>
</head>
<div class="spinner-body" id="spinner">
 <div class="spinner">
<div class="loader l1"></div>
<div class="loader l2"></div>
</div>
</div>
<body>
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
          <a class="nav-link" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="gallery.php">Gallery</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="services.php">Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="about.php" >About</a>
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
         
<div class="col-md-12 container-fluid about text-center">
  <h1 class="">About us</h1>
  <p class="col-md-12 ">The primary benefit of using this website is avoiding intermediary costs and fees. Materials are not provided in retail priced in existing project. But In our Project, we'll offer the product for both wholesale and retail prices and also overcome the drawbacks in exist. An interface between the client and the suppliers is provided by smart construction.The database's administrator has the authority to change prices and add new products, and the information they add is verified.  

  </p>
</div>
<!--image slider-->


<!--about us section-->
<div class="row ms-3 me-3 mt-3 ">
  <div class="col-md-12">
  <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/imgslider1.jpg" class="d-block w-100" alt="..." height="400px">
    </div>
    <div class="carousel-item">
      <img src="images/paintcom.webp" class="d-block w-100" alt="..." height="400px">
    </div>
    <div class="carousel-item">
      <img src="images/tilesslider.png" class="d-block w-100" alt="..." height="400px">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>
</div><br><br>

<!--card-->







<div class="container-fluid ">
  <div class="col-md-12 text-center">
    <img class="rounded shadow-1-strong mb-4"
              src="images/builder.png" alt="avatar"
              style="width: 250px;" />
              <h5>Smart Constrution</h5>
  </div>
  <div class="col-md-12 text-center about ">
  <p> With the rapid development of emerging technologies, the construction industry is shifting from labor-intensive ways to data-driven ones. An innovative management mode, namely smart construction sites, has been put forward recently. This mode employs various smart technologies to realize the real-time perception of information, the collaboration of multiple participants, and the intelligent decisions of on-site management [6]. On the one hand, the application of these smart technologies and the management mode enables the improvement of construction quality and productivity.</p>
  </div>
  </div>


  <section class="container-fluid ">
<div class="card-group p-4">
   <div class="card p-2">
   <div class="image">
    <img class="card-img-top rounded" src="images/3.png" alt="Card image cap">
    </div>
    <div class="card-body text-center">
      <h5 class="card-title">Manobala</h5>

      <p class="card-text role "><b>Managing Director</b></p>
    </div>
  </div>
  <div class="card p-2">
    <div class="image">
    <img class="card-img-top rounded" src="images/1.png" alt="Card image cap">
    </div>
    <div class="card-body text-center">
      <h5 class="card-title">Srinivasan</h5>

      <p class="card-text role"><b>Board of Director</b></p>
    </div>
  </div>
  <div class="card p-2">
    <div class="image">
    <img class="card-img-top rounded" src="images/2.png" alt="Card image cap">
    </div>
    <div class="card-body text-center">
      <h5 class="card-title">Shankarguru</h5>

      <p class="card-text role"><b>Warehouse Manager</b></p>
    </div>
  </div>
</div>
</section>
<section>
  

<?php



if (isset($_POST['submit']) && isset($_FILES['photo'])) {

    $filename = $_FILES["photo"]["name"];

    $tempname = $_FILES["photo"]["tmp_name"];  

        $folder = "images/".$filename;   
        $sname=$_POST['sname'];
        $pos=$_POST['pos'];
        $content=$_POST['content'];
    

$sql = "INSERT INTO `review`(`id`, `img`, `name`,`pos`, `content`) VALUES (NULL,'$filename','$sname','$pos','$content')";

        mysqli_query($con, $sql);       

        if (move_uploaded_file($tempname, $folder)) {

             $message[] = 'Thank you for your Review';

        }else{

            $msg = "Failed to upload image";

    }

}
?>
<div class="container col-md-12 review">
  <div class="reviews">
    
  <h2 class="text-center">Share your Review</h2>
  <form method="post" action="" enctype="multipart/form-data">

     <div class="form-group col-md-12 adding mt-4">
       <label>Add Your Photo</label>
       <input type="file" name="photo" class="form-control">
     </div>
     <div class="form-group col-md-12 adding mt-4">
      <label>Enter Your Name</label>
     <input type="text" name="sname" class="form-control">
     </div>
     <div class="form-group col-md-12 adding mt-4">
      <label>Your Position</label>
     <input type="text" name="pos" class="form-control">
     </div>
     <div class="form-group col-md-12 adding mt-4">
      <label>Enter Your Opinion Here</label>
       <input type="text" name="content" class="form-control">
     </div>
     <div class="form-group col-md-12 adding mt-4">
     
       <input type="submit" name="submit" class="form-control btn-dark btn" value="Submit">
     </div>
  </form> 
 
 
  </div>
</div>
<?php
if(isset($message)){
   foreach($message as $message){
      echo '
      <div id="mes" class="message">
         <span class="text-center">'.$message.'</span>
         <i class="fa fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}
?>
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
</body>
<script type="text/javascript" src="js/nav.js"></script>
</html>