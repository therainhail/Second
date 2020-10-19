<?php {
?>
    <form class="form_auth_style" style="
    display: grid;
    grid-template-rows: 1fr 1fr 1fr 1fr 1fr 1fr 1fr;
    width: 50%;
    background-color: #7300AB;
    border-radius: 10px;
    border: 1px solid black;"action="../index.php" method="POST" >
    <label align="center">Your email</label>
      <input type="email" name="auth_email" placeholder="Your Email" required>
      <label align="center">Your Name</label>
      <input type="name" name="auth_name" placeholder="Your Name" required>
      <label align="center" >Your Password</label>
      <input type="password" name="auth_pass" placeholder="Your Password" required >
      <button class="form_auth_button" type="submit" name="form_auth_submit">Sign In</button>
    </form>
<?php
}
?>
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

$mysqli = new mysqli($db_host,$db_user,$db_password,$db_base);

  if ($mysqli->connect_error) {
      die('Ошибка : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
  }


$result = $sql->query("INSERT INTO".$db_table." (auth_email,auth_name,auth_pass) VALUES ('$mail', '$name', '$pass')");

if($result==true) {
  echo "Yes"
} else {
  echo "No"
}
}
?> 