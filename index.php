<?php
  ini_set('display_errors', '1');
  ini_set('display_startup_errors', '1');
  error_reporting(E_ALL);

  $db_servername = "localhost";
  $db_username = "root";
  $db_password = "Q1qw2we3e!";
  $db_name = "db";
  $db_table = 'users';


  $mysqli = new mysqli($db_servername,$db_username,$db_password,$db_name);

  if ($mysqli->connect_error) {
      die('Ошибка : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
  }
?>

<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
<form class="form_auth_style" style="
display: grid;
grid-template-rows: 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr;
width: 50%;
background-color: #7300AB;
border-radius: 10px;
border: 1px solid black;" action="" method="POST" >
  <label align="center">Your Name</label>
  <input type="name" name="name" placeholder="Your Name" required>
    <label align="center">Your Sname</label>
  <input type="name" name="sname" placeholder="Your Name" required>
    <label align="center">Your email</label>
  <input type="email" name="email" placeholder="Your Email" required>
  <label align="center" >Your Password</label>
  <input type="password" name="pass" placeholder="Your Password" required >
  <button class="form_auth_button" type="submit" name="form_auth_submit">Sign In</button>
</form>
</body>
</html>

 <?php
 if (isset($_POST['name']) && isset($_POST['sname']) && isset($_POST['email']) && isset($_POST['pass'])) {
  $mail = $_POST['email'];
  $name = $_POST['name'];
  $sname = $_POST['sname'];
  $pass = $_POST['pass'];

  $result = $mysql->query("INSERT INTO ".$db_table." (first_name,second_name,email,password) VALUES ('$name','$sname','$mail','$pass')");

   /*if($result==true) {
      echo "Yes"
    } else {
      echo "No"
    }*/
}
?> 





