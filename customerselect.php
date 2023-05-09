<?php
require "connection.php";
$sql1="SELECT max(`Customer_id`) FROM `CUSTOMER`";
$result=mysqli_query($conn, $sql1);
while($row=mysqli_fetch_assoc($result))
{
  $Cust_id=$row['max(`Customer_id`)'];
}
 ?>
