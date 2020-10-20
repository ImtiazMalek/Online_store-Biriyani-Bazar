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
