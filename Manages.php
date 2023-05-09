<?php
require "con.php";
if ($_SERVER['REQUEST_METHOD']){
    $M_date=date("Y-m-d");
    
    $sql = "SELECT * FROM `users` where  username='$username'";
    $result= mysqli_query($conn, $sql);
    while ($row=mysqli_fetch_assoc($result)) {
        $em_id = $row[`e_id`];
        echo $em_id . "<br>";
        echo $OrderNO . "<br>";
        $sql = "INSERT INTO `MANAGES`(`Order_No`, `EMP_id`, `M_date`) VALUES ('$OrderNO','$em_id','$M_date')";
            mysqli_query($conn, $sql);
        }
    }
?>