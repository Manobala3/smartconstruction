<?php
include("db.php");
if(isset($_POST['submit'])){

    $pro=$_POST['pro'];
    $names=$_POST['names'];
    $item=$_POST['name'];
    $quantity=$_POST['quantity'];
    $phone=$_POST['phone'];


$sql1="INSERT INTO `admin`(`id`, `user`,`pro` ,`Name`, `Quantity`, `Mobile`) VALUES (NULL,'$names','$pro','$item','$quantity','$phone')";

$res=mysqli_query($con,$sql1);

if($res){
  echo "Success";
}
else{
  echo "Query Error";
}
}

header("location:product.php?pro=$pro")




?>