<?php      
        include('connection.php');  
        $username = $_POST['n'];  
        $password = $_POST['p'];
        $mobile=$_POST['m'];
          
            //to prevent from mysqli injection  
            $username = stripcslashes($username);  
            $password = stripcslashes($password);
            $mobile   =stripcslashes($mobile);
            $username = mysqli_real_escape_string($con, $username);  
            $password = mysqli_real_escape_string($con, $password);  
            $mobile = mysqli_real_escape_string($con, $mobile);  
            $sql = "insert into registration(Name,Mobile,Password) values('$username','$mobile','$password')";
            if (!mysqli_query($con,$sql)) {
                echo "Error: " . mysqli_error($con);
                }
        else
        {
            echo "successfully registred";
        }
        echo '<script language="javascript">';
echo 'window.location.href="login.html";';
echo '</script>'
?>  