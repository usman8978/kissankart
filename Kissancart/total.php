<?php
    include("connection.php");
    $sql="select SUM(price) as 'output' from  SEEDS";
    $res=mysqli_query($con,$sql);
    $data=mysqli_fetch_array($res);
    echo "sum:".$data['output'];
?>