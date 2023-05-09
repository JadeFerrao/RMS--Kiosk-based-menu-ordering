<?php require "connection.php";
        if(isset($_POST['item__id']))
        {
            $id=$_POST['item__id'];
            if(!empty($_POST['iname']))
            {
                $name=$_POST["iname"];
                $sqly="UPDATE `MENU` SET `item_name`='$name' WHERE `item__id`='$id';";
        mysqli_query($conn, $sqly);
            }

            if(!empty($_POST['iprice']))
            {
                $employee_Mname=$_POST["iprice"];
                $sql="UPDATE `MENU` SET `item_price`='$employee_Mname' WHERE `item__id`='$id'";
                mysqli_query($conn, $sql);
            }
            
            if(!empty($_POST['cat']))
            {
                $employee_Lname=$_POST["cat"];
                $sql="UPDATE `MENU` SET `category`='$employee_Lname' WHERE `item__id`='$id'";
                mysqli_query($conn, $sql);
            }
            
            if(!empty($_POST["Pi"]))
            {
                $Phone_number=$_POST["Pi"];
                $sql="UPDATE `MENU` SET `pic_info`='$Phone_number' WHERE `item__id`='$id'";
                mysqli_query($conn, $sql);
            }
            require "menu_details.php";
            
        }
        
        ?>