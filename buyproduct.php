<?php
include("db.php");

session_start();

$user_id = $_SESSION['user_name'];

if(!isset($user_id)){
   header('location:login.php');
}


  if(isset($_GET['click'])){
    $click= $_GET['click'];
  }


$sql= "SELECT * FROM `product` WHERE `name`='$click'";

$result= mysqli_query($con,$sql);




?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
   <link href="css/bootstrapp.min.css" rel="stylesheet">
   <link rel="icon"  href="images/scon.png">
    <title>Smart Construction-Buy</title>
    <link rel="stylesheet" type="text/css" href="css/spinner.css">
    <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css\font-awesome\css\font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/buyproduct.css">
    <script src="js/jquery.min.js"></script>

   
   

  </head>

  <!--image slider-->

  <body class="">
    <div class="spinner-body" id="spinner">
 <div class="spinner">
<div class="loader l1"></div>
<div class="loader l2"></div>
</div>
</div>
  <header>

            <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="images/smart.png" ></a>
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
          <a class="nav-link" href="contact.php">Contact</a>
        </li>
       <li class="nav-item">
          <a class="nav-link" href="">Hello,<?php echo $user_id; ?></a>
        </li>
                
       <li class="nav-item">
         <a class="nav-link" href="logout.php">Logout</a>
        </li>

     

      </ul>
    </div>
  </div>
</nav>
         </header>
<div class="scroll">
    <button onclick="scrollToTop()" id="myBtn" class="fa fa-arrow-up btn btn-dark"></button>
  </div>

<?php
while($row = $result->fetch_assoc()){

$product=$row['name'];
$img=$row['image'];

?>
 <section class="container center">
  <div class="col-md-12" id="order">
   <div class="col-md-6 buy1 mt-5 pt-4">
     <img src="images/<?php echo $img; ?>" height="350px" width="350px">
   </div>
   <div class="col-md-6 buy2 mt-5 pt-4">
     <form id="buy" method="POST" action="">
                          <div class="col-md-12">
                          <div class="col-md-6 close">
                                
                                 </div>
                                 <div class="col-md-6">
                                <h5><?php echo $row['pro']; ?></h5>
                                </div>
                                </div>
                                <div class="col-md-12 form-group">
                                <lable>Item:</lable>
                                <input type="hidden" name="names" value="<?php echo $user_id; ?>">
                                <input class="form-control" type="text" id="name" name="name" value="<?php echo $product; ?>" readonly>
                                </div>
                                <div class="col-md-12 form-group">
                                <lable>Quantity:</lable>
                                <input class="form-control" type="text" id="quantity" name="quantity">
                                </div>
                                <div class="col-md-12 form-group">
                                <lable>Phone:</lable>
                                <input class="form-control" type="text" id="phone" name="phone">
                                </div>
                                <input type="hidden" name="pro" value="<?php echo $row['pro'] ?>">
                                <div class="form-group col-md-12">
                                <br>
                                <input type="submit" class="form-control btn-dark btn" name="submit" value="Sumbit" onclick="perform()">
                                </div>
                          </form>
   </div>
   </div>
   <?php
 }
   ?>


   <?php

if(isset($_POST['submit'])){

    $pro=$_POST['pro'];
    $names=$_POST['names'];
    $item=$_POST['name'];
    $quantity=$_POST['quantity'];
    $phone=$_POST['phone']; 


$sql1="INSERT INTO `admin`(`id`, `user`,`pro` ,`Name`, `Quantity`, `Mobile`) VALUES (NULL,'$names','$pro','$item','$quantity','$phone')";

$res=mysqli_query($con,$sql1);

if($res){
  $mess[] = 'Thank you for your Orders<br>
  Please Stay back Our Customer Care Executive will Call you.';
$message="
Product name : $pro
User name : $names
Item : $item
Quantity : $quantity
Phone : $phone";

// Telegram function which you can call
function telegram($msg) {
        global $telegrambot,$telegramchatid;
        $url='https://api.telegram.org/bot'.$telegrambot.'/sendMessage';$data=array('chat_id'=>$telegramchatid,'text'=>$msg);
        $options=array('http'=>array('method'=>'POST','header'=>"Content-Type:application/x-www-form-urlencoded\r\n",'content'=>http_build_query($data),),);
        $context=stream_context_create($options);
        $result=file_get_contents($url,false,$context);
        return $result;
}
        
// Set your Bot ID and Chat ID.
$telegrambot='6031957592:AAG9HY4s-QUATEeWPlzxsmulDbOWr34LJAw';
$telegramchatid= 853865417;

// Function call with your own text or variable
telegram ($message);
}
else{
  echo "Query Error";
}
}





?>
<?php
if(isset($message)){
   foreach($mess as $messages){
      echo '
      <div id="mes" class="message">
         <span class="text-center animate">'.$messages.'</span>
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
  <!--script type="text/javascript">
    function perform(){
      


      var name=document.getElementById("name").value;
      var quantity=document.getElementById("quantity").value;
      var uname=document.getElementById("uname").value;
      var phone=document.getElementById("phone").value;


      jQuery.ajax({
  type:'POST',
  url:'post.php',
  data:"name="+name+"&quantity="+quantity+"&uname="+uname+"&phone="+phone,
  success:function(result){
   
   
   }
}) 

    }


  </script-->
</html>