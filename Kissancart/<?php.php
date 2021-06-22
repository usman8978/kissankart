<?php      
        include('connection.php');  
        $username = "usman";  
        $password = 20;
        $mobile=40;
          
            //to prevent from mysqli injection  
            $username = stripcslashes($username);  
            $password = stripcslashes($password);
            $mobile   =stripcslashes($mobile);
            $username = mysqli_real_escape_string($con, $username);  
            $password = mysqli_real_escape_string($con, $password);  
            $mobile = mysqli_real_escape_string($con, $mobile);  
            $sql = "insert into SEEDS(name,quantity,price) values('$username','$mobile','$password')";
            if (!mysqli_query($con,$sql)) {
                echo "Error: " . mysqli_error($con);
                }
        else
        {
            echo "successfully registred";
        }
?>  