<?php
require "connection.php";
require "select.php";
if ($_SERVER['REQUEST_METHOD']){
    if(isset($_POST))
    {
        
        $Quantity=$_POST['quantity'];
        $I=$_POST['iid'];

    }
    $n=sizeof($I);
    for($i=0;$i<$n;$i++)
    {
$sql="INSERT INTO `ORDER_DETAILS`(`Order_No`,`item_id`, `quantity`) VALUES ('$OrderNO','$I[$i]','$Quantity[$i]')";
mysqli_query($conn, $sql);
}

$sql="SELECT `Order_No`,sum(`quantity`*MENU.item_price) AS Tot FROM `ORDER_DETAILS` INNER join MENU on `item_id`=MENU.item__id  GROUP BY `Order_No` having `Order_No`='$OrderNO' ;";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$Total=$row['Tot'];
require "Bill.php";
require "bill_template.php";
}


?>