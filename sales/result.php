<?php
  $con = mysql_connect("localhost","root","fdkiller2011");
  if (!$con) {
    die('Error: ' . mysql_error());
  }

  mysql_select_db("lib",$con);
  
  $tmp1 = $_POST["Isbn"];
  $tmp2 = $_POST["snumber"];
  $query = "SELECT * FROM book WHERE
	Isbn = '" . $tmp1 . "'";
  $result = mysql_query($query);
  if (!$result) {
     echo "failed , no books in the library" . "</br>";
  }
  else {
    $row = mysql_fetch_array($result);
    if ($row['number'] < $tmp2) {
        echo "failed , the number of the books is not enough!" . "</br>";
    }
    else {
        $time = getdate();
	$query = "INSERT INTO bill VALUES( '" . $time[0] . "',
					   '" . $row['Author'] . "' ,
					   '" . $row['Isbn'] . "' ,
					   '" . $row['Title'] . "' ,
					   '" . $row['Publiser'] . "' ,
					   '" . $time['year'] . "-" . $time['mon'] . "-" . $time['mday'] ."',
					   " . $row['price'] . ",
                                           " . $tmp2 . ",
                                           'S' ,
                                           " . $row['price'] * $tmp2 . ")";                    
	mysql_query($query);
        $query = "UPDATE book SET number = number - " . $tmp2 . " WHERE
	Isbn = '" . $tmp1 . "'";
        echo "Success to sell the books!";
	mysql_query($query);
	echo "<br />";
    }
  }
  mysql_close($con);
?>