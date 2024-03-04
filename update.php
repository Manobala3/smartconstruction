
<?php
include("db.php");
session_start();

$user_id = $_SESSION['admin_name'];

if(!isset($user_id)){
   header('location:login.php');
}
$pros=$_POST['product'];


?>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,600;1,100;1,200;1,300;1,400&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/font-awesome/css/font-awesome.min.css">
 <link rel="icon"  href="images/scon.png">
  <script src="js/jquery.min.js"></script>
    <link rel="stylesheet" href="css/bootstrapp.min.css">
    <link rel="stylesheet" type="text/css" href="css/spinner.css">
    <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/adminpage.css">

   
    
  <title>Constructions and Buildings</title>
</head>
<div class="spinner-body" id="spinner">
 <div class="spinner">
<div class="loader l1"></div>
<div class="loader l2"></div>
</div>
</div>
<body>
         <header>
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid navi">
    <a class="navbar-brand" href="#"><img src="images/smart.png" height="160px" width="340px" ></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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
          <a class="nav-link" href="about.php" >About</a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout1.php">Logout</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
         </header>



<div class="container  mt-5 service" style="height: 50vh;">
  <h2 class="text-center">To Update Product Details </h2>
  <form action="updating.php" method="POST" class="mb-5">
     
     <div class="form-group col-md-6 adding">
      <input type="hidden" name="product" value="<?php echo $pros; ?>">
       
   
      
        <?php

             
             
             if(isset($_POST['update'])){
             	
            $opt="SELECT * FROM `product` WHERE `name`='$pros'";
            $res=mysqli_query($con,$opt);
            while($ans=mysqli_fetch_assoc($res)){
                $det=$ans['details'];
              echo '<textarea class="form-control" name="up" rows="5">'.$det.'</textarea>';
            }
          }
          if(isset($_POST['delete'])){
            echo "    <h2 class='mt-5'>$pros</h2>";
          }
        ?>
    
     </div>
     <div class="form-group col-md-6 adding mt-4">
          <?php

             
             
             if(isset($_POST['update'])){
              echo '
       <input type="submit" name="updates" value="Update" class="form-control btn btn-dark mt-4">';
}

      if(isset($_POST['delete'])){
    echo '
       <input type="submit" name="delete" value="Delete" class="form-control btn btn-dark mt-4">';

        }

       ?>
     </div>
  </form>


</div>



</body>
<script type="text/javascript" src="js/nav.js"></script>
</html>


