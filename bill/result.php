<?php
$con = mysql_connect("localhost","root","fdkiller2011");
if (!$con) {
  die('Error: ' . mysql_error());
}

mysql_select_db("lib",$con);

$query = "SELECT * FROM bill WHERE tradeid = '" . $_POST["tradeid"] . "'";
$result = mysql_query($query);
if (!$result) {
  echo "No result for you!";
}
else {
 $r = 0;
 while ($row = mysql_fetch_array($result)) {
	echo "tradeid :     " . $row['tradeid'] ."<br />";
        echo "Title :       ".  $row['Title'] .  "<br />";
        echo "Isbn :        " . $row['Isbn'] . "<br />";
        echo "Author :      ".  $row['Author'] . "<br />";
        echo "Publiser :    ".  $row['Publiser'] .  "<br />";
        echo "trice :       ".  $row['tprice'] . "<br />";
        echo "tnumber :     ".  $row['tnumber'] ."<br />";
	echo "tradetime :   ".  $row['tradetime'] ."<br />";
        echo "type :        ".  $row['type'] . "</br>";
        echo "total_value : ".  $row['total_value'] . "</br>";
	echo "----------------------------------------------";
	echo  "<br />";
        $r ++;
  }
  if (!$r) echo "No result for you!";
}
?>
