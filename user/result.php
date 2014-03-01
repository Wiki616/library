<?php
   session_start();
   $tmp1 = $_SESSION["username"];
   $tmp2 = $_POST["password"];
   $tmp2 = md5($tmp2);
   $tmp3 = $_POST["name"];
   $tmp4 = $_POST["Id"];
   $tmp5 = $_POST["year"];

   $con = mysql_connect("localhost","root","fdkiller2011");
   if (!$con) {
     die('Error: ' . mysql_error());
   }

   mysql_select_db("lib",$con);
   $query = "UPDATE admin SET 
   Password = '" . $tmp2 . "', Name = '" . $tmp3 . "', 
   Id = '" . $tmp4 . "', year = '" . $tmp5 . "'WHERE Username = '" . $tmp1 ."'";
   echo $query . "</br>";
   mysql_query($query);

   mysql_close($con);
   echo "Succuss!";
?>
