<?php
    include('connection.php');
    if(isset($_POST["c1"]))
    {
        $username ="PADDY";  
        $password = $_POST['q1'];
        $mobile=$password*2500;
          
            //to prevent from mysqli injection  
            $username = stripcslashes($username);  
            $password = stripcslashes($password);
            $mobile   =stripcslashes($mobile);
            $username = mysqli_real_escape_string($con, $username);  
            $password = mysqli_real_escape_string($con, $password);  
            $mobile = mysqli_real_escape_string($con, $mobile);  
            $sql = "insert into SEEDS(name,quantity,price) values('$username','$password','$mobile')";
            if (!mysqli_query($con,$sql)) {
                echo "Error: " . mysqli_error($con);
                }
        else
        {
            header("Location:main.php");
        }
    }
    else if(isset($_POST["c2"]))
    {
        $username ="WHEET";  
        $password = $_POST['q2'];
        $mobile=$password*3500;
          
            //to prevent from mysqli injection  
            $username = stripcslashes($username);  
            $password = stripcslashes($password);
            $mobile   =stripcslashes($mobile);
            $username = mysqli_real_escape_string($con, $username);  
            $password = mysqli_real_escape_string($con, $password);  
            $mobile = mysqli_real_escape_string($con, $mobile);  
            $sql = "insert into SEEDS(name,quantity,price) values('$username','$password','$mobile')";
            if (!mysqli_query($con,$sql)) {
                echo "Error: " . mysqli_error($con);
                }
        else
        {
            header("Location:main.php");
        }
    }
    else if(isset($_POST["c3"]))
    {
        $username ="GROUNDNUT";  
        $password = $_POST['q3'];
        $mobile=$password*3500;
          
            //to prevent from mysqli injection  
            $username = stripcslashes($username);  
            $password = stripcslashes($password);
            $mobile   =stripcslashes($mobile);
            $username = mysqli_real_escape_string($con, $username);  
            $password = mysqli_real_escape_string($con, $password);  
            $mobile = mysqli_real_escape_string($con, $mobile);  
            $sql = "insert into SEEDS(name,quantity,price) values('$username','$password','$mobile')";
            if (!mysqli_query($con,$sql)) {
                echo "Error: " . mysqli_error($con);
                }
        else
        {
            header("Location:main.php");
        }
    }

?>