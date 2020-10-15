 <?php
 if (isset($_POST['auth_email']) && isset($_POST['auth_name']) && isset($_POST['auth_pass'])) {
$mail = $_POST['auth_email'];
$name = $_POST['auth_name'];
$pass = $_POST['auth_pass'];

$servername = "localhost";
$username = "root";
$password = "Q1qw2we3e!";
$dbname = "db";
$db_table = 'users';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM users";
$result = $sql->query("INSERT INTO".$db_table." (name,text) VALUES ('$mail', '$name', '$pass')");

if($result==true) {
	echo "Yes"
} else {
	echo "No"
}
}


/*$result = $conn->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["first_name"]. " " . $row["second_name"].  " " .$row["email"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();*/
?> 