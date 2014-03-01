<?php
  session_start();
  $tmp1 =  $_SESSION["username"];
  $con = mysql_connect("localhost","root","fdkiller2011");
    if (!$con) {
       die('Error: ' . mysql_error());
     }
    mysql_select_db("lib",$con);
    $tmp1 = $_SESSION["username"];
    $query = "SELECT * FROM admin WHERE
	Username = '" . $tmp1 . "'";
    $result = mysql_query($query);
    $row = mysql_fetch_array($result);
    
  echo "<h1><pre>					User management</pre></h1>";
  echo "Hello , " . $tmp1 . "!</br>";
  echo "Function selection
	<ol><a href = 'info.php' target = 'blank'>My info</a></ol></br>
	    <ol><a href = 'update.php' target = 'blank'>Update my info</a></ol></br>";
  if ($row['authority'] == 'S') {
         echo "
	    <ol><a href = 'create.php' target = 'blank'>Create new account</a></ol></br>
         </ol>
         ";
   }
?>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
<hr style="color : blue; background-color : white; height : 2;width : 40">
<p>copyright &copy; 2013 WikiSoft Company&trade;<br>
   contack with us by 18817362348</p>
<hr style="color : blue; background-color : white; height : 2;width : 40">