<?php
  $con = mysql_connect("localhost","root","fdkiller2011");
  if (!$con) {
    die('Error: ' . mysql_error());
  }

  mysql_select_db("lib",$con);
  
  $tmp1 = $_POST["isbn"];
  $tmp2 = $_POST["bnumber"];
  $tmp3 = $_POST["bprice"];
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
 					   '" . $row['Title'] . "',
					   '" . $row['Isbn'] . "' ,
					   '" . $row['Publiser'] . "' ,
					   '" . $row['Author'] . "' ,
					   " . $tmp2 . " ,
					   " . $tmp3 .",
					   " . "'F'" . ",
                                           " . $row['price'] . ")";
        echo "Success to take bill!" . "</br>";                       
	mysql_query($query);
	echo "<br />";
  }
  mysql_close($con);
?>