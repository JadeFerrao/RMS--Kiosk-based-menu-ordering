<html>
<head>
<title>LOGIN</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="login-box">
<h1>ADMIN LOGIN</h1>

<form method="post" action="" >
<label>Admin name</label>
<input type="text" name="username" placeholder="John Doe" required>
<label>Password</label>
<input type="password" name="password" placeholder="XXXXXXXX" required>
<input type="submit" value="Login" >
</form>
</div>

</body>
</html>

<?php      require "connection.php";
if (isset($_POST))
{
    $username = $_POST['username'];  
    $password = $_POST['password'];  
}
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($conn, $username);  
        $password = mysqli_real_escape_string($conn, $password);  
      
        $sql = "select * from users where username = '$username' and passwords = '$password'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  

            header("location: bootmain.html");  
        }  
        else{  
        }
?>  