<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
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
    <title>Biriyani Bazar || order </title>
</head>
<body>
    <nav id="navbar">
        <h1 class="logo"><a href="../home.html">Biriyani Bazar</a>
        </h1>
    </nav>

    
    
    <h2>Order Items </h2>
    
    <form action="storing_order_process.php" method="post">
        
      
        <div class="container">

            <label for="id"><h3 style="color:green">Choose Item</h3></label><br>
            <input type="radio" id="id" name="id" value="18">
            <label for="mutton kacchi">mutton kacchi</label><br>
            <input type="radio" id="id" name="id" value="19">
            <label for="beef kacchi">beef kacchi</label><br>
            
            <label for="number_of_plates"><h3 style="color:green">Number Of platets</h3></label><br>
            <input type="number" placeholder="Quantity" name="number_of_plates">
            <label for="total_price"><h3 style="color:green">Total Price</h3></label><br>
            <input type="number" placeholder="Ammount" name="total_price">
            <label for="date_time"><h3 style="color:green">Date</h3></label><br>
            <input type="date" placeholder="Date" name="date_time">

        </div>
        <br>
        <br>
      
        <div class="container" >
          <button type="submit" class="Add"  name="add">Place Order</button>
        </div>

    </form>

    
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

$sql = "SELECT id, name, price FROM items";
$result = $conn->query($sql);
echo '<center>';
echo '<br>';
echo '<br>';

if ($result->num_rows > 0) {
  // output data of each row
    echo "<table><tr><th>ID</th><th>NAME</th><th>PRICE TK/-</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo  "<tr><td>" . $row["id"]. "</td><td>" . $row["name"]. "</td><td>" . $row["price"]. "</td></tr><br>";
  }
} else {
  echo "0 results";
}
echo '</center>';
$conn->close();
?>