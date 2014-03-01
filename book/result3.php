<?php
   $tmp1 = $_POST["Isbn"];
   $tmp2 = $_POST["Title"];
   $tmp3 = $_POST["Publiser"];
   $tmp4 = $_POST["Author"];
   $tmp5 = $_POST["Price"];
   $tmp6 = $_POST["Number"];
   $con = mysql_connect("localhost","root","fdkiller2011");
   if (!$con) {
     die('Error: ' . mysql_error());
   }

   mysql_select_db("lib",$con);
   $query = "UPDATE book SET Title =  
   '" . $tmp2 . "' ,Publiser =
   '" . $tmp3 . "' ,Author = 
   '" . $tmp4 . "' ,Price = 
   " . $tmp5 . " ,Number =
   " . $tmp6 . " WHERE Isbn = '" . $tmp1 . "'"; 
   echo "Success to modify the info of the books!";
   mysql_query($query);
   mysql_close($con);
?>
