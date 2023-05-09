<?php require "connection.php";
if(!empty($_POST["empl_id"]))
{
  $empid=$_POST["empl_id"];
$sql="DELETE FROM `EMPLOYEE` WHERE `EMP_id`='$empid'";
mysqli_query($conn, $sql);
require "employee.php";
}

?>        