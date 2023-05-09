<?php
require "connection.php";
if(isset($_POST)){
    $Customer_name=$_POST["customer_name"];
    $table_number=$_POST["table_number"];
}

$sql="INSERT INTO `CUSTOMER`(`Customer_name`,`table_No`) VALUES ('$Customer_name','$table_number')";
mysqli_query($conn, $sql);
require "customerselect.php";
 require "order.php";
 ?>
