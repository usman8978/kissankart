<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Kissankart</title>
        <link rel="stylesheet" href="navbar.css">
        <link rel="stylesheet"  href="Staatliches-Regular.ttf">
    </head>
    <header>
        <nav>
            <form action="logout.php">
              <input type="submit" value="logout" name="log">
</form>
<form action="clearcart.php">
              <input type="submit" value="clear cart" name="log">
</form>
        </nav>
    </header>
    <body>
        <div class="sidebar">
            <a href="#" onclick="getSeeds();">SEEDS</a>
            <a href="#news" onclick="getPest();">PESTICIDES</a>
            <a href="#contact" onclick="getFert();">FERTILIZERS</a>
            <a href="#about"onclick="getEnq();">CHECKOUT</a>
          </div>
          <div id="seeds" style="margin-left: 25%;display:none;">
            <form method="post" action="cart.php">
            <table style="width:50%">
              <tr>
                <th name="paddy">PADDY</th>
                <th name="wheet">WHEAT</th>
                <th name="ground">GROUND NUT</th>
              </tr>
              <tr>
                <td><img src="images/rice.png"style="width:100%;padding:25px"></td>
                <td><img src="images/wheet.jpeg"style="width:100%;padding:25px"></td>
                <td><img src="images/ground.jpeg"style="width:100%;padding:25px"></td>
              </tr>
              <tr class="quantity">
                <td style="text-align: center;">
                  <input type="text" name="q1" autocomplete="off">
                 </select>
               
                </td>
                <td style="text-align: center;">
                
                    <input type="text" name="q2" autocomplete="off">
                 </select>
               
                </td>
                <td style="text-align: center;">
                    <input type="text" name="q3" autocomplete="off">
                 </select>
               
                </td>
              </tr>
              <tr>
                <td style="text-align: center;">
                  <input type="submit" name="c1" width="35%">
                </td>
                <td style="text-align: center;">
                  <input type="submit" name="c2" width="35%">
                </td>
                <td style="text-align:center ;">
                  <input type="submit" name="c3" width="35%">
                </td>
              </tr>
              </form>
              </table>

            </table> 
          </div>
          <div id="pests" style="margin-left: 25%;display:none;">
            <table style="width:50%">
              <tr>
                <th>FOR WEED</th>
                <th>FOR INSECTES</th>
                <th>FOR GROWTH</th>
              </tr>
              <tr>
                <td><img src="images/p1.jpeg"style="width:100%;padding:25px"></td>
                <td><img src="images/p2.jpeg"style="width:100%;padding:25px"></td>
                <td><img src="images/p3.jpeg"style="width:100%;padding:25px"></td>
              </tr>
              <tr class="quantity">
                <td style="text-align: center;">
                  <select name = "dropdown" autocomplete="off">
                    <option value = "Java">quantity</option>
                    <option value = "1">1</option>
                    <option value = "2" >2</option>
                    <option value = "3">3</option>
                 </select>
               
                </td>
                <td style="text-align: center;">
                  <select name = "dropdown" autocomplete="off">
                    <option value = "Java">quantity</option>
                    <option value = "1">1</option>
                    <option value = "2" >2</option>
                    <option value = "3">3</option>
                 </select>
               
                </td>
                <td style="text-align: center;">
                  <select name = "dropdown" autocomplete="off">
                    <option value = "Java">quantity</option>
                    <option value = "1">1</option>
                    <option value = "2" >2</option>
                    <option value = "3">3</option>
                 </select>
               
                </td>
              </tr>
              <tr>
                <td style="text-align: center;">
                  <input type="image" src="images/cart.png" width="35%">
                </td>
                <td style="text-align: center;">
                  <input type="image" src="images/cart.png" width="35%">
                </td>
                <td style="text-align:center ;">
                  <input type="image" src="images/cart.png" width="35%">
                </td>
              </tr>
              <tr>
                <td style="text-align: center;">
                  <input type="image" src="images/buy.png" width="55%">
                </td>
                <td style="text-align: center;">
                  <input type="image" src="images/buy.png" width="55%">
                </td>
                <td style="text-align:center ;">
                  <input type="image" src="images/buy.png" width="55%">
                </td>
              </tr>
          
            </table> 
          </div>
          <div id="ferts" style="margin-left: 25%;display:none;">
            <p>chakri</p>

          </div>
          <div id="enq" style="margin-left: 25%;display:none;">
           <h2>CART DETAILS</h2>
           <?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "KISSANKART");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt select query execution
$sql = "SELECT * FROM SEEDS";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table border=6>";
            echo "<tr>";
                echo "<th>ID</th>";
                echo "<th>PRODUCT NAME</th>";
                echo "<th>QUANTITY</th>";
                echo "<th>PRICE</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['ID'] . "</td>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['quantity'] . "</td>";
                echo "<td>" . $row['price'] . "</td>";
            echo "</tr>";
        }
       
        echo "</table>";
        // Close result set
      //  mysqli_free_result($result);
    } else{
        echo "EMPTY CART.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

 
// Close connection
mysqli_close($link);
?>
  <input type=button value="total amount"> 
  <h4>
  <?php
    include("connection.php");
    $sql="select SUM(price) as 'output' from  SEEDS";
    $res=mysqli_query($con,$sql);
    $data=mysqli_fetch_array($res);
    echo "₹ ".$data['output']."/_";
?>
  </h4>
           
          </div>

    </div>
    </body>
    <script>
          
      function getSeeds()
      {
        var x=document.getElementById("pests");
        var y=document.getElementById("seeds");
        x.style.display="none";
        y.style.display="block";

        var z=document.getElementById("ferts");
        z.style.display="none";
        var a=document.getElementById("enq");
        a.style.display="none";


      }
      function getPest()
      {
        var x=document.getElementById("pests");
        var y=document.getElementById("seeds");
        x.style.display="block";
        y.style.display="none";

        var z=document.getElementById("ferts");
        z.style.display="none";
        var a=document.getElementById("enq");
        a.style.display="none";

      }
      function getFert()
      {
        var x=document.getElementById("pests");
        var y=document.getElementById("seeds");
        x.style.display="none";
        y.style.display="none";

        var z=document.getElementById("ferts");
        z.style.display="block";
        var a=document.getElementById("enq");
        a.style.display="none";

      }
      function getEnq()
      {
        var x=document.getElementById("pests");
        var y=document.getElementById("seeds");
        x.style.display="none";
        y.style.display="none";

        var z=document.getElementById("ferts");
        z.style.display="none";
        var a=document.getElementById("enq");
        a.style.display="block";

      }
    </script>
</html>