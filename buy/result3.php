<?php
  $con = mysql_connect("localhost","root","fdkiller2011");
  if (!$con) {
    die('Error: ' . mysql_error());
  }

  mysql_select_db("lib",$con);
  
  $tmp1 = $_POST['tradeid'];
  $tmp2 = $_POST['operation'];
  $query =  "SELECT * from buy WHERE tradeid = '" . $tmp1 . "'";
  $tmp3 = mysql_query($query);
  $tmp4 = mysql_fetch_array($tmp3);
  if ($tmp4 && $tmp4['state'] == 'F') {
  if ($tmp2 == "Drop") {
     $query = "UPDATE buy SET state = 'O' WHERE tradeid = '" . $tmp1 . "'";
     echo "Success to drop the bill";
     mysql_query($query);
  }
  else {
     $query = "UPDATE buy SET state = 'T' WHERE tradeid = '" . $tmp1 . "'";
     mysql_query($query);
     $query = "SELECT * FROM buy WHERE tradeid = '" . $tmp1 . "'";
     $result = mysql_query($query);
     $row = mysql_fetch_array($result);
     $time = getdate();
     $query = "INSERT INTO bill VALUES( '" . $tmp1 . "',
					   '" . $row['Author'] . "' ,
					   '" . $row['Isbn'] . "' ,
					   '" . $row['Title'] . "' ,
					   '" . $row['Publiser'] . "' ,
					   '" . $time['year'] . "-" . $time['mon'] . "-" . $time['mday'] ."',
					   " . $row['bprice'] . ",
                                           " . $row['bnumber'] . ",
                                           'B' ,
                                           " . $row['bprice'] * $row['bnumber'] . ")";
     echo "Succuss to pay for the bill";
     $query = "SELECT * FROM book WHERE Isbn = '" . $row['Isbn'] . "'";
     $result2 = mysql_query($query);
     $row2 = mysql_fetch_array($result2);
     if ($row2) {
       $query = "UPDATE book SET number = number + " . $row['bnumber'] . " WHERE Isbn = '" . $row['Isbn'] ."'";
     }
     else {
        $query = "INSERT INTO book VALUES(    '" . $row['Title'] . "' ,
					   '" . $row['Isbn'] . "' ,
					   '" . $row['Publiser'] . "' ,
					   '" . $row['Author'] . "' ,
					   " . $row['price'] . ",
                                           " . $row['bnumber'] . ")";
     }
     mysql_query($query);
  }
  }
  else {
     echo "This bill is valied ,cannot drop or pay!";
  }
?>
