<?php
  $con = mysql_connect("localhost","root","fdkiller2011");
  if (!$con) {
    die('Error: ' . mysql_error());
  }

  mysql_select_db("lib",$con);
  
  $tmp1 = $_POST["Title"];
  $tmp2 = $_POST["isbn"];
  $tmp3 = $_POST["Publiser"];
  $tmp4 = $_POST["Author"];
  $tmp5 = $_POST["bnumber"];
  $tmp6 = $_POST["bprice"];
  $tmp7 = $_POST["price"];
  $query = "SELECT * FROM book WHERE
	Isbn = '" . $tmp1 . "'";
  $result = mysql_query($query);
  if (!$result) {
     echo "failed , no books in the library" . "</br>";
  }
  else {
    $time = getdate();
    $row = mysql_fetch_array($result);
	$query = "INSERT INTO buy VALUES(  '" . $time[0] . "',
 					   '" . $tmp1 . "',
					   '" . $tmp2 . "' ,
					   '" . $tmp3 . "' ,
					   '" . $tmp4 . "' ,
					   " . $tmp5 . " ,
					   " . $tmp6 .",
					   " . "'F'" . ",
                                           " . $tmp7 . ")";
        echo "Success to take bill!" . "</br>";                          
	mysql_query($query);
	echo "<br />";
  }
  mysql_close($con);
?>