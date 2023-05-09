<?php
require "connection.php";
if(!empty($_POST["item_id"]))
{
  $Iid=$_POST["item_id"];
$sql="DELETE FROM `MENU` WHERE `item__id`='$Iid'";
mysqli_query($conn, $sql);
require "menu_details.php";
}
?>