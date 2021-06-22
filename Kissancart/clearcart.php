<?php
    include("connection.php");
    $sql="truncate table SEEDS";
    if(mysqli_query($con,$sql))
    {
       header("Location:main.php");
    }
?>