<?php
  session_start();
  $tmp1 =  $_SESSION["username"];
  $con = mysql_connect("localhost","root","fdkiller2011");
  if (!$con) {
    die('Error: ' . mysql_error());
  }
  mysql_select_db("lib",$con);
  $query = "SELECT * FROM admin WHERE
	Username = '" . $tmp1 . "'";
  $result = mysql_query($query);
  $row = mysql_fetch_array($result);

  if (!$row) {
     echo "account is wrong!";
     sleep(3);
     header("Location: http://localhost:8080/Database%20PJ/login.php");
     exit;
  }
  else {
     echo $tmp1 . "'s info" . "</br>";
     echo "Username : " . $row['Username'] . "</br>";
     echo "Name     : " . $row['Name'] . "</br>";
     echo "Id       : " . $row['Id'] . "</br>";
     echo "year     : " . $row['year'] . "</br>";
     echo "gender   : " . $row['gender'] . "</br>";
     echo "authority :" . $row['authority'] . "</br>";  
  }
  mysql_close($con);
?>
<a href = "user.php">Return</a>