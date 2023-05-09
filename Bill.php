
<?php
require "connection.php";
require "customerselect.php";
if ($_SERVER['REQUEST_METHOD']){
$Bill_date=date("Y-m-d");
$Total_amount=$Total;

$sql="INSERT INTO `BILL`(`T_amount`, `Bill_date`, `C_id`) VALUES ('$Total_amount','$Bill_date','$Cust_id')";
mysqli_query($conn, $sql);
$sql1="SELECT max(`Bill_No`) FROM `BILL`";
$result=mysqli_query($conn, $sql1);
while($row=mysqli_fetch_assoc($result))
{
  $BillNO=$row['max(`Bill_No`)'];
}
}

?>