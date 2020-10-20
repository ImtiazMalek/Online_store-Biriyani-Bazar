<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Biriyani Bazar || order </title>
    <style>
        .GFG {
            text-shadow: 0 0 3px #FF0000, 0 0 5px #0000FF;
          }

        table, th, td {
            border: 1px solid black;
            padding: 5px;
          }
        table {
            border-spacing: 15px;
          }   
    </style>
</head>
<body>

    <nav id="navbar">
        <h1 class="logo"><a href="../home.html">Biriyani Bazar</a>
        </h1>
           
    </nav>

    
    
    <form action="selling_info.php" method="post">
        <h2>Enter date (Selling information) </h2>
        
      
        <div class="container">

            <br>
            <input type="date" id="date_time" name="date_time"><br>

            <label for="s_id"><h1>Item</h1></label><br>
            <input type="radio" id="id" name="s_id" value="18">
            <label for="s_id">mutton kacchi</label><br>
            <input type="radio" id="id" name="s_id" value="19">
            <label for="s_id">beef kacchi</label><br>

        </div>
      <br>
      <br>


        <div class="container" >
          <button type="submit" class="edit">Process</button>
          
        </div>
      </form>
      <br>
      <br>
      <hr>
      <footer>
          <h4> @imtiaz_malek_2020 </h4>
      </footer>
      <hr>

</body>
</html>





<!--   Report     -->

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "biriyani";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sale_amount = 0;
$sale_plates = 0;

//  amount of plates //

$sql = "SELECT number_of_plates FROM selling_data WHERE (date_time='$_POST[date_time]' and item_id='$_POST[s_id]')";

$result = $conn->query($sql);
echo '<center>';
echo "report";
if ($result->num_rows > 0) {
  // output data of each row
    while($row = $result->fetch_assoc()) {
        $sale_plates = $sale_plates + $row["number_of_plates"];
    }
} 
else {
}
echo "<h2>Number of Plates Sold: ".$sale_plates." plates </h2>";
echo '</center>';

// daily amount of money (sell) 


$sql_1 = "SELECT total_price FROM selling_data WHERE (date_time='$_POST[date_time]')";

$result = $conn->query($sql_1);
echo '<center>';

if ($result->num_rows > 0) {
  // output data of each row
    while($row = $result->fetch_assoc()) {
        $sale_amount = $sale_amount + $row["total_price"];
    }
} 
else {

}
echo "<h2>Total sale amount of the day(Daily): ".$sale_amount." Tk/- </h2>";
echo '</center>';



$conn->close();
?>





<!-- order table -->



<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "biriyani";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}



$sql = "SELECT item_id, number_of_plates, total_price,date_time FROM selling_data";
$result = $conn->query($sql);
echo '<center>';
if ($result->num_rows > 0) {
  // output data of each row
    echo "<table><tr><th>ID</th><th>Number Of Plates</th><th>Total PRICE TK/-</th><th> Date time</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo  "<tr><td>" . $row["item_id"]. "</td><td>" . $row["number_of_plates"]. "</td><td>" . $row["total_price"]. "</td><td>".$row["date_time"]."</td></tr><br>";
    }echo "</table>";
} 
else {
  echo "0 results";
}
echo '</center>';
$conn->close();
?>

