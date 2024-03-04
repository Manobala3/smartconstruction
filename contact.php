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
    <link rel="stylesheet" type="text/css" href="css/contact.css">

   
	<title>Contact - Smart Construction</title>
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
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="images/smart.png" height="160px" width="340px" ></a>
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
          <a class="nav-link" href="about.php" >About</a>
        </li>
         <li class="nav-item">
          <a class="nav-link active" href="contact.php">Contact</a>
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
         
         <div class="container-fluid user contact mb-5 mt-5">
           <div class="row">
            <div class="card mt-3">
              <div class="card-body">
                
                   <p class="card-text text-center"><i class="fa fa-mobile icon"></i></p>
                   <p class="card-text text-center">Mon-Sat 9am-7pm</p>
                <p class="card-text text-center"><a href="tel:9500971102">+91-9500971102</a> </p>
                
               
              </div>
            </div>
            <div class="card mt-3">
              <div class="card-body">
                
               <p class="card-text text-center"><i class="fa fa-envelope icon"></i></p>
                <p class="card-text text-center">www.smartcivil.epizy.com</p>
                <p class="card-text text-center"><a href="mailto:manobalaarul@gmail.com">info@smartcivil.com</a></p>
              </div>
            </div>
            <div class="card mt-3">
              <div class="card-body">
                
               <p class="card-text text-center"><i class="fa fa-map-marker icon"></i></p>
                <p class="card-text text-center">Location:Cuddalore</p>
                <p class="card-text text-center">palur,Panruti</p>
              </div>
            </div>
           </div>
           <div class="row mt-3">
            <div class="card mt-3">
              <div class="card-body">
                
                   <p class="card-text text-center"><i class="fa fa-instagram icon"></i></p>
                   <p class="card-text text-center">Our Projects and Stock detailsare updated here</p>
                <p class="card-text text-center"> <a href="https://instagram.com/smart_construction_03?igshid=ZDdkNTZiNTM=">@Smart_Construction</a></p>
                
               
              </div>
            </div>
            <div class="card mt-3">
              <div class="card-body">
                
               <p class="card-text text-center"><i class="fa fa-whatsapp icon"></i></p>
               <p class="card-text text-center">Contact us by sending message from whatsapp</p>
                <p class="card-text text-center"> <a href="https://wa.me/919500971102">@Smart_Construction</a></p>
              </div>
            </div>
            <div class="card mt-3">
              <div class="card-body">
                
               <p class="card-text text-center"><i class="fa fa-telegram icon"></i></p>
               <p class="card-text text-center">You can also reach out by texting our telegram bot</p>
                <p class="card-text text-center"> <a href="https://t.me/Smartcivil_bot">@Smart_Construction</a></p>
              </div>
            </div>
           </div>
         </div>


         <div class="col-md-12 container-fluid user">
           
             <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3906.0978371015026!2d79.76683019979035!3d11.75815798704294!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a5498f22ccc2157%3A0x962571751d010b9e!2sSt.%20Josephs%20College%20of%20Arts%20and%20Science!5e0!3m2!1sen!2sin!4v1678974597730!5m2!1sen!2sin" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>


         
         </div>
         
<!--div class="col-md-12 container">
   <h2 class="text-center mt-5 mb-5">Submit Your Request</h2>
    <form id="form" method="POST"  action="submit.php">
      <div class="form">
        <div class="col-md-12 mb-3">
        <div class="col-md-6 mb-3 fname">
          <p class="font-weight-bold"><b>First name:</b></p>
          <input type="text" class="form-control" name="fname" id="fname" placeholder="First Name" required>
        </div>
        <div class="col-md-6  mb-3 lname">
          <p class="font-weight-bold"><b>Last name:</b></p>
          <input type="text" name="lname" class="form-control"  id="lname" placeholder="Last Name" required>
        </div>
        </div>
        <div class="col-md-12 mb-3">
          <p class="font-weight-bold"><b>Email:</b></p>
          <input type="email" name="email" class="form-control"  id="email" placeholder="Email" required>
        </div>
        <div class="col-md-12 mb-3">
          <p class="font-weight-bold"><b>Phone number:</b></p>
          <input type="text" name="phone" class="form-control"  id="phone" placeholder="Phone" required>
        </div>
        <div class="col-md-12 mb-3">
          <p class="font-weight-bold"><b>Type your message:</b></p>
          <input type="text" name="msg" class="form-control"  id="msg" placeholder="Type your message" required>
        </div>
        <div class="col-md-12 mb-3">
          <input type="submit" class="form-control"  name="submit">
        </div>
      </div>
    </form>
 </div-->
 <div class="container-fluid user shankar">
        <div class="row">
            <div class="col-md-7">
              <form id="form" method="POST"  action="submit.php">
                <h2>Give Input</h2>
                <div class="md-3">
                    <label for="exampleFormControlInput1" class="form-label">First Name</label>
                    <input type="text" class="form-control" name="fname"  id="exampleFormControlInput1">
                </div>
                <div class="md-3">
                    <label for="exampleFormControlInput1" class="form-label">Last Name</label>
                    <input type="text" class="form-control" name="lname" id="exampleFormControlInput1">
                </div>
                <div class="md-3">
                    <label for="exampleFormControlInput1" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" id="exampleFormControlInput1">
                </div><div class="md-3">
                    <label for="exampleFormControlInput1" class="form-label">Phone Number</label>
                    <input type="number" class="form-control" name="phone" id="exampleFormControlInput1">
                </div>
                <div class="md-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Message</label>
                    <textarea class="form-control" name="msg" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <input type="submit" value="Send" name="submit" class="btn mt-3">
              </form>
            </div>
            <div class="col-md-5 text-center">
                <h2>Contact Us</h2><hr>
                <div class="mt-5">
                    <div class="d-flex">
                        <i class="bi bi-geo-alt-fill"></i>
                        <p>Address: No.46, Pudhu Nagar, Pillali, Cuddalore.</p>
                    </div><hr>
                    <div class="d-flex">
                        <i class="bi bi-telephone-fill"></i>
                        <p>Phone: 6369465310</p>
                    </div><hr>
                    <div class="d-flex">
                        <i class="bi bi-envelope-fill"></i>
                        <p>Email: shankarguruhsc@gmail.com</p>
                    </div><hr>
                    <div class="d-flex text-center">
                      <img src="images/smart.png">
                    </div>
                </div>
            </div>
        </div>
    </div>


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
<!--script type="text/javascript" src="js/sendtelegram.js"></script-->
<script type="text/javascript">
  document.getElementById('name')
    .addEventListener('keyup', function(event) {
        if (event.code === 'Enter')
        {
            event.preventDefault();
            document.querySelector('form').submit();
        }
    });
</script>
</html>