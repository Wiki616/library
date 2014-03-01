<form action = "result3.php" method = "post">
<pre><b> tradeid   <input type = "text" name = "tradeid"></b></pre>
<pre><b> <input type = "radio" name = "operation" value = "Pay" checked = "checked"> Pay for the bill</b></pre>
<pre><b> <input type = "radio" name = "operation" value = "Drop"> Drop the bill</b></pre>
<pre><b> <input type = "submit"></b></pre>
</form>
</form>
<pre>The list of the books you buy but you need to do with it</pre>
<?php
  $con = mysql_connect("localhost","root","fdkiller2011");
  if (!$con) {
    die('Error: ' . mysql_error());
  }

  mysql_select_db("lib",$con);

  $result = mysql_query("SELECT * FROM buy WHERE
	state = 'F'");

  while ($row = mysql_fetch_array($result)) {
        echo "Tradeid :  " . $row['tradeid'] . "</br>";
	echo "Title :    " . $row['Title'] ."<br />";
        echo "Isbn :     " . $row['Isbn'] . "<br />";
        echo "Publiser : ".  $row['Publiser'] .  "<br />";
        echo "Author :   ".  $row['Author'] . "<br />";
        echo "bprice :    ".  $row['bprice'] . "<br />";
        echo "bnumber :   ".  $row['bnumber'] ."<br />";
	echo "----------------------------------------------";
	echo "<br />";
  }
  mysql_close($con);
?>