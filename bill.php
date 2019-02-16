<!DOCTYPE html>
<html>
<head>
	<title>BILL GENERATION</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<script
	  src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
	  integrity="sha256-3edrmyuQ0w65f8gfBsqowzjJe2iM6n0nKciPUp8y+7E="
	  crossorigin="anonymous">
	</script>

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
	</script>
</head>
<body style="background-color: rgba(248,248,248,0.5);">

	<nav class="navbar navbar-default">
	<div class="container">
    	<div class="navbar-header">
    		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mynavbar" aria-expanded="false">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
    		<a href="main.php" class="navbar-brand">MED CART</a>
    	</div>
    	<div class="collapse navbar-collapse" id="mynavbar">
	    	<ul class="nav navbar-nav">
	    		<li onclick="document.location.href='authorizedmenu.php'"><a href="#">Catalog</a></li>
	    		<!-- <li onclick="show(('order.php'))"><a href="#">Order</a></li>
	    		<li onclick="show(('bill.php'))"><a href="#">Bill</a></li> -->
          <li onclick="show(('about-us.html'))"><a href="#">About Us</a></li>
	    	</ul>

	    	<ul class="nav navbar-nav navbar-right">
          <li onclick="document.location.href='cart.php'"> <a href="#"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true" style="padding-top: 15%;"></span></a></li>
	    		<li ><a href="#">MY CART</a></li> 
	    		<li  onclick="document.location.href='login.php'"><a href="#">LOG OUT </a></li> 
	    	</ul>
    	</div>
</div>
    </nav>

<?php
	$link = new mysqli("localhost", "root", "", "nova");
	$res = $link->query("select max(bill_no) from bill");
	$row = mysqli_fetch_row($res);
	$billno = $row[0];
	$billno++;
	session_start();
	$us = $_SESSION['user'];
	$res = $link -> query("select sum(price) from cart");
	$row = mysqli_fetch_row($res);
	$price = $row[0];
	$discount = $price * .1;
	$amount = $price - $discount;
	$res = $link -> query("select address from login where username = '$us' ");
	$row = mysqli_fetch_row($res);
	$ad = $row[0];
	$link -> query("insert into bill values ($billno, '$us', $price , $discount , $amount , '$ad')");
	$link->query("delete from cart");
	echo "<h1 align='center' class='text-uppercase'>CONGRATULATIONS " .$us. "</h1></br></br>";
	echo "<h3 align='center'>YOU WILL RECIEVE YOUR ITEMS SHORTLY. PLEASE KEEP THE BILL AMOUNT READY.</h3>";
	echo "<h3 align='center'>YOUR BILL AMOUNT IS " .$amount. " Rs</h3>";
	echo "<h3 align='center'>REFERENCE ID FOR CASH ON DELIVERY: " .$billno;

	 //  $header = "From:pranalpk8@gmail.com.com \r\n";
	 // mail("pranal.150410107086@gmail.com","My subject","checking",$header);

	$link->close();
?>
<br><br><br></br>
<h4 align="center"><a href="authorizedmenu.php">CLICK TO CONTINUE SHOPPING</a></h4>


</body>
</html>