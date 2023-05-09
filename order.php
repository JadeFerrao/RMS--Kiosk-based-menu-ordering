<?php
require "connection.php";
if ($_SERVER['REQUEST_METHOD']){

$Order_date=date("Y-m-d");
$mdate=date('Y-m-d');
$sql="INSERT INTO `ORDERS`(`C_id`, `Order_date`) VALUES ('$Cust_id','$Order_date')";
mysqli_query($conn, $sql);
require "select.php";
    $sql1 = "SELECT `e_id` FROM `users` WHERE ldate='$mdate'";
$result1 = mysqli_query($conn, $sql1);
$rowa = mysqli_fetch_assoc($result1);
$eid = $rowa['e_id'];
    $sql = "INSERT INTO `MANAGES`(`Order_No`, `EMP_id`, `M_date`) VALUES ('$OrderNO','$eid','$Order_date')";
    mysqli_query($conn, $sql);
header("location:newcart.php");
}
?>