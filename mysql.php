 <?php
$servername = "localhost";
$username = "root";
$password = "Q1qw2we3e!";
$dbname = "db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["first_name"]. " " . $row["second_name"].  " " .$row["email"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?> 