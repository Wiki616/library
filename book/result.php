<html>
<body>
<h1><pre>					Results for your search </pre></h1>
<a href = "book.php">Return</a></br>
<?php
$con = mysql_connect("localhost","root","fdkiller2011");
if (!$con) {
  die('Error: ' . mysql_error());
}

mysql_select_db("lib",$con);

$str = $_POST["keywords"];
echo "keywords is : " . " " . $str;
echo "<br />";
if ($str != "ALL") {
  $query = "SELECT * FROM book WHERE Isbn like'%" . $str . "%' or Title like'%" . $str . "%' or Publiser like '%" .$str . "%'or Author like '%" .$str . "%'";
}
else {
  $query = "SELECT * FROM book";
}
echo "<br />";
echo "result is : ";
echo "<br />";
echo "<br />";
$result = mysql_query($query);
if (!$result) {
  echo "No result for you!";
}
else {
while ($row = mysql_fetch_array($result)) {
	echo "Title :    " . $row['Title'] ."<br />";
        echo "Isbn :     " . $row['Isbn'] . "<br />";
        echo "Publiser : ".  $row['Publiser'] .  "<br />";
        echo "Author :   ".  $row['Author'] . "<br />";
        echo "Price :    ".  $row['price'] . "<br />";
        echo "Number :   ".  $row['number'] ."<br />";
	echo "----------------------------------------------";
	echo  "<br />";
}
}
?>
</body>
</html>