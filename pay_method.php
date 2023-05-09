
<?php
require "con.php";
if(isset($_POST)){
    $Payment_method=$_POST["method"];
}
$sql="INSERT INTO `PAY_METHOD`(`P_method`) VALUES ('$Payment_method')";
mysqli_query($conn, $sql);

mysqli_close($conn);

?>