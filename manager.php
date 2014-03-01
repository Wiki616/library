<?php
   session_start();
   $_SESSION["username"] = $_POST["username"];
?>
<html>
<head>
<title>Management
</title>
<link rel="stylesheet" type="text/css" href="ftol_156/style.css" />
</head>

<body>

<div id = "header">
<a class = "main_logo" href = "manager.php"><img src = "image/cl.jpg" class = "" alt= "" border = "0px /></a>
<div class="block_text_1">
<h1>Welcome! Please choose what your want to do!</h1></br>
<h1>Hello,We will support the best service for you!</h1></br>
</div>
<ul class="menu_1">
<li><a href = "book/book.php" target = "blank">Search for books</a></li>
<li><a href = "buy/buy.php" target = "blank">Buy the new books</a></li>
<li><a href = "sales/sales.php" target = "blank">Sales of the books</a></li>
<li><a href = "bill/bill.php" target = "blank">Bill Management</a></li>
<li><a href = "user/user.php">Go to User Management</a></li>
<li><a href = "login.php">Return to the login</a></li>
</ul>
</div>

<?php
  $con = mysql_connect("localhost","root","fdkiller2011");
  if (!$con) {
    die('Error: ' . mysql_error());
  }
  mysql_select_db("lib",$con);
  $tmp1 = $_POST["username"];
  $tmp2 = $_POST["password"];
  $query = "SELECT * FROM admin WHERE
	Username = '" . $tmp1 . "'";
  $result = mysql_query($query);
  $row = mysql_fetch_array($result);

  if (!$row) {
     echo "account is wrong!";
     sleep(3);
     header("Location: http://localhost:8080/Database%20PJ/login.php");
     exit;
  }
  else {
     if ($row['Password'] != md5($tmp2)) {
 	 echo "password is wrong!";
         sleep(3);
         header("Location: http://localhost:8080/Database%20PJ/login.php");
         exit;
     }
  }
  mysql_close($con);
?>


  		<div id="content">
			
			<div class="img_gallery"><img src="image/top.jpg" class="" alt="" border="0px" /></div>
			<p style="color:white;font-size:16px;">Function Recommand</p>
			<a class="stop_gallery_1" href="#">stop</a>
			<div class="cL"></div>
			<div class="bg_text_1">
				<div class="block_text_1">
					<h1>Search for books</h1>
					<div class="line_1"></div>
					<p class="font_1">You can search the info of the book you need.<a class="more_3" href="#"></a></p>
				</div>
				<div class="block_text_1">
					<h1>Buy the new books</h1>
					<div class="line_1">You can buy books in or not in the library when you know it's isbn.</div>
					<p class="font_1"><a class="more_3" href="#"></a></p>
				</div>
				<div class="block_text_1">
					<h1>Sales of the books</h1>
					<div class="line_1"></div>
					<p class="font_1">Sell the books on this , very easy!<a class="more_3" href="#"></a></p>
				</div>
				<div class="block_text_2">
					<h1>Bill Management</h1>
					<div class="line_1"></div>
					<p class="font_1">You can check the bills during the time.<a class="more_3" href="#"></a></p>
				</div>
				<div class="cL"></div>
							
		</div>	
			

<div id="footer">
			
			<p>copyright &copy; 2013 WikiSoft Company&trade;</p></br>
                        <p>contack with us by 18817362348</p></br>
			
		</div>


</body>

</html>
