<?php
include("db.php");
session_start();

$user_id = $_SESSION['admin_name'];

if(!isset($user_id)){
   header('location:login.php');
}

if(isset($_POST['submit'])){


}

?>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <link rel="icon"  href="images/scon.png">

  <link rel="stylesheet" type="text/css" href="css/font-awesome/css/font-awesome.min.css">
 
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
          <a class="nav-link" href="logout.php">Logout</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
         </header><br><br>

<!--cards-->
         <div class="container-fluid income text-center">
           <div class="row vanakam">
            <div class="card stat text-center mt-3">
              <div class="card-body">
                <h5 class="card-title">$10,100</h5>
        <p class="card-text"><b>Last Month Sales</b></p>
        <img src="images/discount.png" height="100px" width="100px">
               
              </div>
            </div>
            <div class="card stat text-center mt-3">
              <div class="card-body">
                
               <h5 class="card-title">$1,00,000</h5>
        <p class="card-text">Income</p>
        <img src="images/up.png" height="100px" width="100px">
              </div>
            </div>
            <div class="card stat text-center mt-3">
              <div class="card-body">
                
               <h5 class="card-title">$ 50,00,000</h5>
        <p class="card-text">Loss</p>
         <img src="images/down.png" height="100px" width="100px">
              </div>
            </div>
            <div class="card stat text-center mt-3">
              
                
             <div class="card-body text-center timedate">
          <!--time and info-->
          <div class="date mt-5"><i class="fa fa-calendar mt-2"></i><span  id="date">hi</span></div>
          
          
           </div>
             
            </div>
            <div class="card stat text-center mt-3">
              <div class="card-body text-center timedate">
              <div class="day mt-5"><i class="fa fa-calendar-o mt-2"></i><span  id="day">hi</span></div>
            </div>
            </div>
             <div class="card stat text-center mt-3">
              <div class="card-body text-center timedate">
             <div class="time mt-5"><i class="fa fa-clock-o mt-2"></i><span id="time">hi</span> </div>
           </div>
            </div>
           </div>
         </div>
<div id="screen">

<br><br>
</div>
<script type="text/javascript">
$(document).ready(function() {
  setInterval(function() {
    $("#screen").load('response.php')
  }, 500);
});
</script>

<!--time section-->       


<div class="container mb-5 mt-5 service">
  <h2 class="text-center">To Update Product Details </h2>
  <form action="update.php" method="post" class="mb-5">
     <div class="form-group col-md-6 adding">
      <label>Product Name</label>
       <select name="product" id="product" class="form-control" required>
        <?php
            $opt="SELECT * FROM `product`";
            $res=mysqli_query($con,$opt);
            while($ans=mysqli_fetch_assoc($res)){
                $name=$ans['name'];
              echo '<option id="product" value="'.$name.'">'.$name.'</option>';
            }
        ?>
      </select>
     </div>
     
     <div class="form-group col-md-3 adding add mb-5">
       <input type="submit" name="update" value="Update" class="form-control btn btn-dark mt-4">
     </div>
     <div class="form-group col-md-3 adding add mb-5">
       <input type="submit" name="delete" value="Delete" class="form-control btn btn-dark mt-4">
     </div>
  </form>
</div>

<div class="container">
<!--card-->
<?php



if (isset($_POST['submit']) && isset($_FILES['photo'])) {

    $filename = $_FILES["photo"]["name"];

    $tempname = $_FILES["photo"]["tmp_name"];  

        $folder = "images/".$filename;   
        $tproduct=$_POST['product'];
        $pname=$_POST['pname'];
        $details=$_POST['details'];
    

$sql = "INSERT INTO `product`(`id`, `pro`, `image`, `name`, `details`) VALUES (NULL,'$tproduct','$filename','$pname','$details')";

        mysqli_query($con, $sql);       

        if (move_uploaded_file($tempname, $folder)) {

             $message[] = 'Product Added successfully!';

        }else{

            $msg = "Failed to upload image";

    }

}
?>
<div class="container mt-4 service">
  <h2 class="text-center">Add Products</h2>
  <form method="post" action="" enctype="multipart/form-data">

     <div class="form-group col-md-6 adding mt-4">
       <label>Choose Image of Your Product</label>
       <input type="file" name="photo" class="form-control" required>
     </div>
     <div class="form-group col-md-6 adding mt-4">
      <label>Type of Product</label>
      <select name="product" class="form-control" required>
        <?php
            $opt="SELECT * FROM `service`";
            $res=mysqli_query($con,$opt);
            while($ans=mysqli_fetch_assoc($res)){
                $name=$ans['name'];
              echo '<option value="'.$name.'">'.$name.'</option>';
            }
        ?>
      </select>
     </div>
     <div class="form-group col-md-6 adding mt-4">
      <label>Product name</label>
       <input type="text" name="pname" class="form-control" required>
     </div>
     <div class="form-group col-md-6 adding mt-4">
       <label>Details and Offers</label>
       <textarea type="text" name="details" class="form-control" rows="1" required></textarea>
     </div>
      <div class="form-group col-md-12">
    <input type="submit" name="submit" class="btn btn-dark form-control mt-4" value="Submit">
  </div>
  </form> 
 
</div> 



<?php


error_reporting(0);



$msg = "";



if (isset($_POST['upload']) && isset($_FILES['photo'])) {

    $file = $_FILES["photo"]["name"];

    $tempname = $_FILES["photo"]["tmp_name"];  

        $folder = "images/".$file;   
        $service=$_POST['service'];
       

$sqli = "INSERT INTO `service`(`id`, `name`, `img`) VALUES (NULL,'$service','$file')";

        mysqli_query($con, $sqli);       

        if (move_uploaded_file($tempname, $folder)) {

           $message[] = 'Service Added successfully!';

        }else{

            $msg = "Failed to upload image";

    }

}
?>

<div class="container mb-5 mt-5 service">
  <h2 class="text-center">Add Your Service</h2>
  <form action="" method="post" enctype="multipart/form-data">
     <div class="form-group col-md-6 adding">
      <label>Service Name</label>
       <input type="text" name="service" class="form-control" required>
     </div>
     <div class="form-group col-md-6 adding">
       <label>Service Image</label>
       <input type="file" name="photo" class="form-control" required>
     </div>
     <div class="form-group col-md-12">
       <input type="submit" name="upload" value="Submit" class="form-control btn btn-dark mt-4">
     </div>
  </form>
</div>

<?php

include 'db.php';

if(isset($_POST['register'])){

   $name = mysqli_real_escape_string($con, $_POST['name']);
   $email = mysqli_real_escape_string($con, $_POST['email']);
   $pass = mysqli_real_escape_string($con, $_POST['password']);
   $cpass = mysqli_real_escape_string($con, $_POST['cpassword']);
   $user_type = $_POST['user_type'];

   $select_users = mysqli_query($con, "SELECT * FROM `users` WHERE email = '$email' AND password = '$pass'") or die('Query failed');

   if(mysqli_num_rows($select_users) > 0){
      $message[] = 'User already exist!';
   }else{
      if($pass != $cpass){
         $message[] = 'Confirm password not matched!';
      }else{
         mysqli_query($con, "INSERT INTO `users`(name, email, password, user_type) VALUES('$name', '$email', '$cpass', '$user_type')") or die('query failed');
         $message[] = 'Registered successfully!';
      
      }
   }

}

?>

<div class="container service mb-5">
  <h4 class="text-center">Insert Gallery</h4>
  <form action="updating.php" method="post" enctype="multipart/form-data">
    <div class="form-group adding col-md-6">
      <input type="file" name="gal" class="form-control">
    </div>
    <div class="form-group adding col-md-6">
      <input type="submit" name="gal_ins" value="Insert" class="form-control btn btn-dark">
    </div>
  </form>
  <h4 class="text-center">Update Gallery</h4>
  <form action="updating.php" method="post" enctype="multipart/form-data">
    <div class="form-group col-md-6 adding">
      <label>Old Picture</label>
      <select name="old_gal" class="form-control" required>
        <?php
            $opt="SELECT * FROM `gallery`";
            $res=mysqli_query($con,$opt);
            while($ans=mysqli_fetch_assoc($res)){
                $img=$ans['img'];
              echo '<option value="'.$img.'">'.$img.'</option>';
            }
        ?>
      </select>
    </div>
    <div class="form-group col-md-6 adding">
      <label>New Picture</label>
      <input type="file" name="new_gal" class="form-control">
    </div>
    <div class="form-group">
      <input type="submit" name="gal_up" value="Update" class="form-control btn btn-dark">
    </div>
  </form>
</div>

<div class="container hello  mb-5" id="hello">

   <form action="" method="post">
      <h3 class="text-center">Register now</h3>
      <div class="form-group col-md-6 adding">
         <p class="text">Name</p>
         <input type="text" name="name" placeholder="Enter your name" required class="form-control" required>
      </div>
      <div class="form-group col-md-6 adding">
          <p class="text">Email</p>
          <input type="email" name="email" placeholder="Enter your email" required class="form-control" required>
      </div>
     <div class="form-group col-md-6 adding">
       <p class="text">Password</p>
        <input type="password" name="password" placeholder="Enter your password" required class="form-control" required>
     </div>
      <div class="form-group col-md-6 adding">
          <p class="text">Confirm Password</p>
         <input type="password" name="cpassword" placeholder="Confirm your password" required class="form-control" required>
      </div>
      <div class="form-group col-md-6 adding">
          <p class="text">Select User Type</p>
         <select name="user_type" class="form-control" required>
         <option value="user">User</option>
         <option value="admin">Admin</option>
      </select>
      </div>
      <br>
      <div class="form-group col-md-6 adding">
        <p class="text">Register Now</p>
        <input type="submit" name="register" value="Register now" class="form-control btn btn-dark">
      
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

<script type="text/javascript" src="js/nav.js"></script>

<script>
let todaydate = document.getElementById("date");
let todayday = document.getElementById("day");
let todaytime = document.getElementById("time");
let noofday=["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"];
function printDate(){
  var date = new Date();
    var day = date.getDate();
    var month = date.getMonth()+1;
  var year = date.getFullYear();
  todaydate.innerHTML=day +"/" +month +"/" +year;
}
printDate();

function printDay(){
  var date=new Date();
    var today=date.getDay();
    var day=noofday[today];
todayday.innerHTML=day;
}
printDay();

/*function printTime(){
  var date=new Date();
  var hour=date.getHours();
  var min=date.getMinutes();
  var sec=date.getSeconds();
  var period="AM";
  if(hour==0){
    hour=12;
  }
  if(hour>12){
    hour=hour-12;//if hour13 -->13-12=1
    period="PM"
  }
  if(hour<10){
    hour="0"+hour;
  }
  if(min<10){
    min="0"+min;
  }
  if(sec<10){
    sec="0"+sec;
  }
  var time=hour +":" +min +":" +sec +" "  +period;
  todaytime.innerHTML=time;
setTimeout(printTime,1000);
}
printTime();*/


function time() {
var d = new Date();
var s = d.getSeconds();
var m = d.getMinutes();
var h = d.getHours();
var ampm = h >= 12 ? 'PM' : 'AM';
h = h % 12;
h = h ? h : 12;



todaytime.textContent = h + ':' + m + ':' + s +':' + ampm;
}

setInterval(time,1000);


</script>
</body>
</html>







