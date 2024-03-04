<?php

include 'db.php';

if(isset($_POST['updates'])){

   $productname = $_POST['product'];
   $details = $_POST['up'];

   $result = mysqli_query($con, "UPDATE `product` SET `details`='$details' WHERE name ='$productname'");

   if(!$result){
    die("could not update".mysqli_error());  
   } 
   else{
     $message[] = 'Updated successfully!';  
    }
}
if(isset($_POST['delete'])){
   $productname = $_POST['product'];

   $result = mysqli_query($con, "DELETE FROM `product` WHERE `name`='$productname'");

   if(!$result){
    die("could not update".mysqli_error());  
   } 
   else{
     $message[] = 'Deleted successfully!';  
    }
}


if(isset($_GET['id'])){
   $id=$_GET['id'];
   $result = mysqli_query($con, "DELETE FROM `admin` WHERE `id`='$id'");

   if(!$result){
    die("could not update".mysqli_error());  
   } 
   else{
    header("location:adminpage.php");
    }
}
if(isset($_POST['gal_ins']) && isset($_FILES['gal'])){
   $file = $_FILES["gal"]["name"];

    $tempname = $_FILES["gal"]["tmp_name"];  

        $folder = "images/".$file;   
        $service=$_POST['service'];
       

$sqli = "INSERT INTO `gallery`(`id`, `img`) VALUES (NULL,'$file')";

        mysqli_query($con, $sqli);       

        if (move_uploaded_file($tempname, $folder)) {

           $message[] = 'Picture Added successfully!';


}
}
if(isset($_POST['gal_up']) && isset($_FILES['new_gal'])){
   $file = $_FILES["new_gal"]["name"];
   $old=$_POST['old_gal'];
    $tempname = $_FILES["new_gal"]["tmp_name"];  

        $folder = "images/".$file;   
        
       

$sqli = "UPDATE `gallery` SET `img`='$file' WHERE `img`='$old'";

        mysqli_query($con, $sqli);       

        if (move_uploaded_file($tempname, $folder)) {

           $message[] = 'Picture Updated successfully!';


}
}
?>



<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title></title>
   <link rel="stylesheet" type="text/css" href="css/font-awesome/css/font-awesome.min.css">
   <style type="text/css">
      .message{
      width:500px;
      height: 200px;
      background: #35363a;
      position: fixed;
      top: 30%;
      border-radius: 20px;
      left: 33%;
}
.message span{
      text-align: center;
      margin-left: 99px;
      font-size: 30px;
      font-weight: 400;
      color: #fff;
      position: relative;
      top: 40%;
}
.message i{
      color: #fff;
      position: absolute;
      font-weight: 400;
      font-size: 40px;
      left: 90%;
      top: 5%;
}
.btn{

   text-decoration: none;
   color: #fff;

}
</style>

</head>
<body>
<?php
if(isset($message)){
   foreach($message as $message){
      echo '
      <div id="mes" class="message">
         <span class="text-center">'.$message.'</span>
      
          <a href="adminpage.php" class="btn"><i class="fa fa-times" onclick="this.parentElement.remove();"></i></a>
      </div>
      ';
   }
}
?>

</body>
</html>