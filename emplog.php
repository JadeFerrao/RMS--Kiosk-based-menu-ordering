
<html>
<head>
<title>LOGIN</title>
<link rel="stylesheet" href="style.css">
</head>
<body background="bg4.jpg">
<div class="login-box">
<h1>EMPLOYEE LOGIN</h1>

<form method="post" action="" >
<label>Name</label>
<input type="text" name="username" placeholder="John Doe" required>
<label>Password</label>
<input type="password" name="password" placeholder="XXXXXXXX" required>
<input type="submit" value="Login" >
</form>
</div>
</body>
</html>
<?php      require "connection.php";

    $username = $_POST["username"];  
    $password = $_POST["password"];

        //to prevent from mysqli injection 
        /*$username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($conn, $username);  
        $password = mysqli_real_escape_string($conn, $password);  */
      
        $sql = "select `e_id` from users where username = '$username' and passwords = '$password'";  
        $result = mysqli_query($conn, $sql);
        $sql1 = "SELECT `uid` FROM `users` WHERE `username`='$username'";
        $result1 = mysqli_query($conn, $sql1);
        $rowa = mysqli_fetch_assoc($result1);
        
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        
        $count = mysqli_num_rows($result);
        
$eid = $rowa['uid'];
$sql = "UPDATE `users` SET ldate = NOW() WHERE `uid` = '$eid';";
mysqli_query($conn, $sql);
if($count == 1){
            header("location: customer.php");  
        }  
        else{  
        }
?>  

