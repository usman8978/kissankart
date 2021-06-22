<?php      
        include('connection.php');  
        $username = $_POST['Mobile'];  
        $password = $_POST['Pass'];  
          
            //to prevent from mysqli injection  
            $username = stripcslashes($username);  
            $password = stripcslashes($password);  
            $username = mysqli_real_escape_string($con, $username);  
            $password = mysqli_real_escape_string($con, $password);  
          
            $sql = "select *from registration where Mobile= '$username'";  
            $result = mysqli_query($con, $sql);  
            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
            $count = mysqli_num_rows($result);
            if($count==1)
            {
                $sql = "select *from registration where Mobile= '$username' and Password = '$password'";  
                $result = mysqli_query($con, $sql);  
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
                $count = mysqli_num_rows($result);  
                  
                if($count == 1){  
                    header("Location: main.php"); 
                }  
                else{   
                    echo '<script>alert("Invalid");window.location.href="login.html"</script>';
                    
                } 
            }   
            else
            {
                echo "Mobile number Not found";
            } 
        ?>  
