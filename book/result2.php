<?php
   $tmp1 = $_POST["Title"];
   $tmp2 = $_POST["Isbn"];
   $tmp3 = $_POST["Publiser"];
   $tmp4 = $_POST["Author"];
   $tmp5 = $_POST["Price"];
   $tmp6 = $_POST["Number"];
   $con = mysql_connect("localhost","root","fdkiller2011");
   if (!$con) {
     die('Error: ' . mysql_error());
   }

   mysql_select_db("lib",$con);
   $query = "insert into book values( 
   '" . $tmp1 . "' ,
   '" . $tmp2 . "' ,
   '" . $tmp3 . "' ,
   '" . $tmp4 . "' ,
   " . $tmp5 . " ,
   " . $tmp6 . ")"; 
   echo "Success to Add new books!";
   mysql_query($query);
   mysql_close($con);
?>
