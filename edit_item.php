<!-- PHP code -->

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname= "biriyani";

	// Create connection
$conn = new mysqli($servername, $username, $password, $dbname) or die("Connection failed: " . $conn->connect_error);
	 
	//insert query stored in a string
$sql = "UPDATE items SET price='$_POST[price]' WHERE name='$_POST[name]'";

	//insert data
if ($conn->query($sql) === TRUE) {
    echo "Item has been updated successfully";

	} 
else {
	    echo "Error to update: write the name properly" . $sql . "<br>" . $conn->error;
	}
?>


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
        <h1 class="logo"><a href="home.html">Biriyani Bazar</a>
        </h1>

        <ul>
            <li><a href="add_item.html">Update</a></li>
            
        </ul>   
           
    </nav>

    
    
    <form action="edit_item.php" method="post">
        <h2>Target item </h2>
        
      
        <div class="container">

            <label for="name">menu name</label><br>
            <input type="text" id="name" name="name"><br>
        </div>
      
    

        <h2>Change </h2>

        <div class="container">


            
            <label for="price">price</label><br>
            <input type="text" id="price" name="price"><br>
        </div>
      
        <div class="container" >
          <button type="submit" class="edit">Edit</button>
          
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
