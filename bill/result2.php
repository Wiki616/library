<?php
$con = mysql_connect("localhost","root","fdkiller2011");
if (!$con) {
  die('Error: ' . mysql_error());
}

mysql_select_db("lib",$con);

$tmp1 = $_POST["fromtime"];
$tmp2 = $_POST["totime"];
$tmp3 = $_POST["type"];
$query = "SELECT * FROM bill WHERE (tradetime between '" . $tmp1 . " 00:00:00' and '" . $tmp2 . " 23:59:59')";
if ($tmp3 != 'A')
  $query = $query . "and type = '" . $tmp3 . "'"; 
$result = mysql_query($query);
if (!$result) {
  echo "No result for you!";
}
else {
 $r = 0;
 while ($row = mysql_fetch_array($result)) {
	echo "tradeid :     " . $row['tradeid'] ."<br />";
        echo "Title :       ".     $row['Title'] .  "<br />";
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
