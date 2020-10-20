<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
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
        <h1 class="logo"><a href="home.html">Biriyani Bazar[Home]</a>
        </h1>
        <ul>
            <li><a href="add_item.html">Add/Delete/Update item</a></li>
            
        </ul>   
    </nav>


    <div id="showcase">
        <div class="container">
        <div class="showcase-content">
            <h1 class="GFG" style="font-size:60px">Biriyani Bazar</h1>
            
        </div>
        </div>
    </div>

    <section id="menu" class="py-3">
        <div class="container">
          <h2 class="l-heading">Popular Item Menu</h2>
          <div class="menu bg-primary">
            <img src="./images/beef.jpg" alt="profile" width="50" height="100" />
            <p>
              Beef Biriyani
              <br>Price: 220 Tk/-</br>
            </p>
          </div>
          <div class="menu bg-primary">
            <img src="./images/chicken.jpg" alt="profile" width="50" height="100" />
            <p>
              Chicken Biriyani
              <br>Price: 220 Tk/-</br>
            </p>
          </div>
        </div>
     </section>
     <br>
     <center>
      <ul>
        <li>
        <form action="table.php" method="post"> 
        <button type="submit" class="edit"> Show Main Menu</button>
        </form>
        </li><br>
        <li><button onclick="document.location='task2/order.php'"> Oder Food</button></li><br>
        <li><button onclick="document.location='task3/info.php'">Selling Information</button></li>
      </ul>
    </center>
     
</body>
</html>



<!-- php codes -->



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
  } echo "</table>";
}
 else {
  echo "0 results";
}
echo '</center>';
$conn->close();
?>