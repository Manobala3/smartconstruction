<?php

include 'db.php';

if(isset($_POST['submit'])){

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
         header('location:login.php');
      }
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Smart Construction-Register</title>
   <link rel="icon"  href="images/scon.png">
   <link href="css/bootstrapp.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/login.css">
   <link rel="stylesheet" type="text/css" href="css/spinner.css">
    <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/font-awesome/css/font-awesome.min.css">

</head>
<body >



<?php
if(isset($message)){
   foreach($message as $message){
      echo '
      <div id="mes" class="message">
         <span >'.$message.'</span>
         <i class="fa fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}
?>
   
<div class="form-container hello" id="hello">

   <form action="" method="post">
      <h3>Register now</h3>
      <div class="form-group">
         <p class="text">Name</p>
         <input type="text" name="name" placeholder="Enter your name" required class="form-control">
      </div>
      <div class="form-group">
          <p class="text">Email</p>
          <input type="email" name="email" placeholder="Enter your email" required class="form-control">
      </div>
     <div class="form-group">
       <p class="text">Password</p>
        <input type="password" name="password" placeholder="Enter your password" required class="form-control">
     </div>
      <div class="form-group">
          <p class="text">Confirm Password</p>
         <input type="password" name="cpassword" placeholder="Confirm your password" required class="form-control">
      </div>
      <!--div class="form-group">
          <p class="text">Select User Type</p>
         <select name="user_type" class="form-control">
         <option value="user">User</option>
         <option value="admin">Admin</option>
      </select>
      </div-->
      <input type="hidden" name="user_type"value="user">
      <br>
      <input type="submit" name="submit" value="Register now" class="form-control btn btn-primary">
      <p>Already have an account? <a href="login.php">Login now</a></p>
   </form>

</div>
<!--script type="text/javascript">
   var mes=document.getElementById("mes");
   
   if(mes){
     document.getElementById("hello").style.opacity="0.1";
   }
   else{
      document.getElementById("hello").style.opacity="10";
   }
</script-->
</body>
</html>