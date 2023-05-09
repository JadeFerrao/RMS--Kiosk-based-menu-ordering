<?php
require "connection.php";

$sql1="SELECT `Order_No` FROM `ORDERS` ORDER BY `Order_No` DESC LIMIT 1;";
$result=mysqli_query($conn, $sql1);
while($row=mysqli_fetch_assoc($result))
{
  $OrderNO=$row['Order_No'];
}
?>