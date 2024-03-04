<?php


if (isset($_POST['name'])&& isset($_POST['quantity'])&& isset($_POST['uname'])&& isset($_POST['phone'])) {
    $item=$_POST['name'];
    $quantity=$_POST['quantity'];
    $name=$_POST['uname'];
    $phone=$_POST['phone'];


$sql1="INSERT INTO `admin`(`Name`, `Item`, `Quantity`, `Mobile`) VALUES ('$name','$item','$quantity','$phone')";

$res=mysqli_query($con,$sql1);

if($res){
  echo "Success";
}
else{
  echo "Query Error";
}
} 

?>