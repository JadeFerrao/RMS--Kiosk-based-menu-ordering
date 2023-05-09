
<html>
<head>
<title>Menu</title>
<link rel="stylesheet" href="style.css">
<style>
  .login-box{
width:360px;
height:550px;
margin:auto;
border-radius:3px;
background-color:white;
}
</style>
</head>
<body>
<div class="login-box">
<h1>MENU</h1>

<form method="post" action="" >
<label>Item name</label>
<input type="text" name="Iname" placeholder="Pizza" required>
<label>Item price</label>
<input type="text" name="Price" placeholder="XXXXXXXX" required>
<label>Category</label>
<input type="text" name="category" placeholder="south indian" required>
<label>Data Name</label>
<input type="text" name="dname" placeholder="please avoid any spaces" required>
<label>Picture Name</label>
<input type="text" name="pic" placeholder="name.png" required>
<input type="submit" value="Submit" >
</form>
</div>
</body>
</html>



<?php

require "connection.php";
          if(isset($_POST)){
            $Item_Name=$_POST["Iname"];
            $Item_Price=$_POST["Price"];
            $category=$_POST["category"];
            $data = $_POST["dname"];
            $pic = $_POST["pic"];
          }

$sql="INSERT INTO `MENU`(`item_name`, `item_price`, `category`,`pic_info`,`data_name`) VALUES ('$Item_Name','$Item_Price','$category','$pic','$data')";
mysqli_query($conn, $sql);
require "menu_details.php";
?>