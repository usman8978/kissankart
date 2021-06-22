<?php
    include('connection.php');
    $result="select * from SEEDS";
    echo  "<table border='1'>
          <tr>
    <th>ID</th>
    <th>PRODUCT NAME</th>
    <th>QUANTITY</th>
    <th>PRICE</th>
    </tr>
    ";
    while($row = mysqli_fetch_array($result))
{
    echo "<tr>";
    echo "<td>" . $row['ID'] . "</td>";
    echo "<td>" . $row['name'] . "</td>";
    echo "<td>" . $row['quantity'] . "</td>";
    echo "<td>" . $row['price'] . "</td>";
    echo "</tr>";
}
echo "</table>";

?>