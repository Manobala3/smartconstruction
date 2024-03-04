<?php
include("db.php");
if(!$con){
  die("connection error".mysqli_connect_error());
}
$query="select*from admin";

$run_query_result=mysqli_query($con,$query);

$num_of_rows=mysqli_num_rows($run_query_result);

   echo' <div class="container" id="details">

<h1 class="text-center">Orders</h1>
<table class="table  table-bordered table-striped">
 <thead>
    <tr class="text-center">
      <th scope="col">Name</th>
      <th scope="col">Username</th>
      <th scope="col">Items</th>
      <th scope="col">Quantity</th>
      <th scope="col">Phone</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>';
while($fetch_row=mysqli_fetch_assoc($run_query_result)){
  echo'<tr class="text-center">
  <td>' .$fetch_row['pro'] .'</td>
    <td>' .$fetch_row['user'] .'</td>
  <td>' .$fetch_row['Name'] .'</td>
  <td>' .$fetch_row['Quantity'] .'</td>
  <td>' .$fetch_row['Mobile'] .'</td>
    <td> <a href="updating.php?id='.$fetch_row['id'].'">Delete</a> </td>
  </tr>';
}
echo'</table>';
?>