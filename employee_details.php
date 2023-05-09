<html>
    <body>
        <?php
        require "connection.php";
          if(empty($_REQUEST['emp_id'])){
            $employee_Fname=$_POST["Fname"];
            $employee_Mname=$_POST["Mname"];
            $employee_Lname=$_POST["Lname"];
            $Phone_number=$_POST["Pnumber"];
            $address=$_POST["address"];
            $joining_date=$_POST["jdate"];
            $email=$_POST["email"];
            $salary=$_POST["salary"];
            $sex=$_POST["sex"];
            $job_title=$_POST["jtitle"];
            $supervisor_id=$_POST["super_id"];
            $sql="INSERT INTO `EMPLOYEE`(`Fname`, `Mname`, `Lname`, `Address`, `Email`, `Phone_number`, `Salary`, `Sex`, `Job_title`, `Super_id`, `Joining_date`) VALUES ('$employee_Fname','$employee_Mname','$employee_Lname','$address','$email','$Phone_number','$salary','$sex','$job_title',$supervisor_id,'$joining_date')";
        mysqli_query($conn, $sql);
        }
        if(isset($_POST['emp_id']))
        {
    
            $empid=$_POST['emp_id'];
            if(!empty($_POST['Fname']))
            {
                $employee_Fname=$_POST["Fname"];
                $sql="UPDATE `EMPLOYEE` SET `Fname`='$employee_Fname' WHERE `EMP_id`='$empid'";
                mysqli_query($conn, $sql);
            }
            if(!empty($_POST['Mname']))
            {
                $employee_Mname=$_POST["Mname"];
                $sql="UPDATE `EMPLOYEE` SET `Mname`='$employee_Mname' WHERE `EMP_id`='$empid'";
                mysqli_query($conn, $sql);
            }
            
            if(!empty($_POST['Lname']))
            {
                $employee_Lname=$_POST["Lname"];
                $sql="UPDATE `EMPLOYEE` SET `Lname`='$employee_Lname' WHERE `EMP_id`='$empid'";
                mysqli_query($conn, $sql);
            }
            
            if(!empty($_POST["Pnumber"]))
            {
                $Phone_number=$_POST["Pnumber"];
                $sql="UPDATE `EMPLOYEE` SET `Phone_number`='$Phone_number' WHERE `EMP_id`='$empid'";
                mysqli_query($conn, $sql);
            }
            
            if(!empty($_POST["address"]))
            {
                $address=$_POST["address"];
                $sql="UPDATE `EMPLOYEE` SET `Address`='$address' WHERE `EMP_id`='$empid'";
                mysqli_query($conn, $sql);
            }
            
            if(!empty($_POST["jdate"]))
            {
                $joining_date=$_POST["jdate"];
                $sql="UPDATE `EMPLOYEE` SET `Joining_date`='$joining_date' WHERE `EMP_id`='$empid'";
                mysqli_query($conn, $sql);
            }
            
            if(!empty($_POST["email"]))
            {
                $email=$_POST["email"];
                $sql="UPDATE `EMPLOYEE` SET `Email`='$email' WHERE `EMP_id`='$empid'";
                mysqli_query($conn, $sql);
            }
            
            if(!empty($_POST["salary"]))
            {
                $salary=$_POST["salary"];
                $sql="UPDATE `EMPLOYEE` SET `Salary`='$salary' WHERE `EMP_id`='$empid'";
                mysqli_query($conn, $sql);
            }
            
            if(!empty($_POST["sex"]))
            {
                $sex=$_POST["sex"];
                $sql="UPDATE `EMPLOYEE` SET `Sex`='$sex' WHERE `EMP_id`='$empid'";
                mysqli_query($conn, $sql);
            }
            
            if(!empty($_POST["jtitle"]))
            {
                $job_title=$_POST["jtitle"];
                $sql="UPDATE `EMPLOYEE` SET `Job_title`='$job_title' WHERE `EMP_id`='$empid'";
                mysqli_query($conn, $sql);
            }
            if(!empty($_POST["super_id"]))
            {
                $supervisor_id=$_POST["super_id"];
                $sql="UPDATE `EMPLOYEE` SET `Super_id`='$supervisor_id' WHERE `EMP_id`='$empid'";
                mysqli_query($conn, $sql);
            }
            
        }
        require "employee.php";
        ?>
        
    </body>
</html>