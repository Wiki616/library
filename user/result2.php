<?php
   $tmp1 = $_POST["username"];
   $tmp2 = $_POST["password"];
   $tmp2 = md5($tmp2);
   $tmp3 = $_POST["name"];
   $tmp4 = $_POST["Id"];
   $tmp5 = $_POST["year"];
   $tmp6 = $_POST["gender"];
   $tmp7 = 'N';
   $con = mysql_connect("localhost","root","fdkiller2011");
   if (!$con) {
     die('Error: ' . mysql_error());
   }

   mysql_select_db("lib",$con);
   $query = "select * from admin where username = '" . $tmp1 . "'";
   $result = mysql_query($query);
   $row = mysql_fetch_array($result);
   if (!$row) {
   $query = "insert into admin values( 
   '" . $tmp1 . "' ,
   '" . $tmp2 . "' ,
   '" . $tmp3 . "' ,
   '" . $tmp4 . "' ,
   " . $tmp5 . " ,
   '" . $tmp6 . "' ,
   '" . $tmp7 . "')"; 
   mysql_query($query);

   echo "Succuss to create new account!";
   }
   else {
     echo "username has been registed!";
   }
?>
