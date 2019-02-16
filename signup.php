<!DOCTYPE html>
<html>
<head>
	<title>SIGN UP</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<script
  src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
  integrity="sha256-3edrmyuQ0w65f8gfBsqowzjJe2iM6n0nKciPUp8y+7E="
  crossorigin="anonymous"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<script>
	function signupsuccess() {
		alert("SIGNUP SUCCESSFULL.. LOGIN TO CONTINUE");
	}
</script>

</head>
<body style="background-color: #F8F8F8">
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
	    		<li onclick="document.location.href='menu.php'"><a href="#">Catalog</a></li>
	    		<!-- <li onclick="show(('order.php'))"><a href="#">Order</a></li>
	    		<li onclick="show(('bill.php'))"><a href="#">Bill</a></li> -->
          <li onclick="show(('about-us.html'))"><a href="#">About Us</a></li>
	    	</ul>

	    	<ul class="nav navbar-nav navbar-right">
          <li> <a href="#"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true" style="padding-top: 15%;"></span></a></li>
	    		<li  onclick="document.location.href='login.php'"><a href="#">Log in</a></li> 
	    		<li  onclick="document.location.href='login.php'"><a href="#">Sign up </a></li>
	    	</ul>
    	</div>
</div>
    </nav>      

<?php 
if(!isset($_REQUEST['sub']))
{
?>


<div class="container" align="center">
    <div class="row">
		<div class="span12">
			<form class="form-horizontal" action='' method="POST">
			  <fieldset>
			    <div id="legend">
			      <legend class="">SIGN UP</legend>
			    </div>
			    <div class="control-group">
			      <!-- Username -->
			      <label class="control-label"  for="username">Username</label>
			      <div class="controls">
			        <input type="text" id="username" name="tus" placeholder="" class="input-xlarge">
			      </div>
			    </div>
			    <div class="control-group">
			      <!-- Password-->
			      <label class="control-label" for="password">Password</label>
			      <div class="controls">
			        <input type="password" id="password" name="tpa" placeholder="" class="input-xlarge">
			      </div>
			      <div class="control-group">
			      <!-- address -->
			      <label class="control-label"  for="address">Address</label>
			      <div class="controls">
			  	  <textarea id="address" name="tad" placeholder="Address" rows="3" cols="22"></textarea>
			      </div>
			    </div>
			      <!-- <div class="control-group"> 
						
						<div class="controls"> 
							<input type = "checkbox" name="checkbox" id="checkbox" value = "keep" class="control-label">
							<label class="control-label" for="checkbox">Keep me logged in</label>	
						</div>
			      </div> --> 
			    </div>
			
			    <br> <br>
	
			        <!-- <button class="btn btn-success btn-lg" name="sub" value="login">Log  in</button> <br> <br> -->
			        <button class="btn btn-success btn-lg"  name="sub" value="sign up" onclick="signupsuccess()">Sign up</button>
			  </fieldset>
			</form>
		</div>
	</div>
</div>
<?php
}
else{
	$us = $_REQUEST['tus'];
	$pa = $_REQUEST['tpa'];
	$ad = $_REQUEST['tad'];
	$sub = $_REQUEST['sub'];
	if($sub == "sign up"){
		$link = new mysqli("localhost","root","","nova");
		$link -> query("insert into login values ('$us', '$pa', '$ad')");
		$link -> close();
		header("location:login.php");
	}
}
?>

</body>
</html>