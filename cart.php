<!DOCTYPE html>
<html>
<head>
	<title>USER'S CART</title>
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

    <h1 align="center">ITEMS IN YOUR CART</h1><br><br><br>

    <?php
		$con=mysqli_connect("localhost","root","","nova");
		$result = mysqli_query($con,"SELECT * FROM cart");

		echo "<table class='table table-bordered  table-dark' align='center'>
		<thead class='thead-dark'>
		<tr>
		<th scope='col' class='bg-dark text-white'>ITEM SELECTED</th>
		<th scope='col' class='bg-dark text-white'>PRICE</th>
		</tr>
		</thead";

		while($row = mysqli_fetch_array($result))
		{
		echo "<tbody> <tr>";
		echo "<td class='text-uppercase' class='bg-light text-dark'>" . $row['item_selected'] . "</td>";
		echo "<td class='bg-light text-dark'>" . $row['price'] . "</td>";
		echo "</tr>";
		}
		echo "</tbody> </table>";

		mysqli_close($con);
		?>

		<button class="btn btn-success" name="sub" onclick="document.location.href='bill.php'">CONFIRM TO GENERATE BILL</button>

</body>
</html>