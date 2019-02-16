<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<script
  src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
  integrity="sha256-3edrmyuQ0w65f8gfBsqowzjJe2iM6n0nKciPUp8y+7E="
  crossorigin="anonymous"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<title></title>
	<style type="text/css">
		.price{
			/*text-align: right;*/
			font-size: 18pt;
			float: right;
		}
		.description{
			float: left;
			padding-top: 1.5%;
		}
		html,body{
			height: 100%;
		}
		.fill { 
    min-height: 100%;
    height: 100%;
}
	</style>

	<script>
		
		function alertmsg()
		{
			alert("OOPSS LOGIN TO BUY THE PRODUCT!!");
		}

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
	    		<li onclick="document.location.href='menu.php'"><a href="#">Catalog</a></li>
	    		<!-- <li onclick="show(('order.php'))"><a href="#">Order</a></li>
	    		<li onclick="show(('bill.php'))"><a href="#">Bill</a></li> -->
          <li onclick="show(('about-us.html'))"><a href="#">About Us</a></li>
	    	</ul>

	    	<ul class="nav navbar-nav navbar-right">
          <li> <a href="#"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true" style="padding-top: 15%;"></span></a></li>
	    		<li  onclick="document.location.href='login.php'"><a href="#">Log in</a></li> 
	    		<li  onclick="document.location.href='signup.php'"><a href="#">Sign up </a></li>
	    	</ul>
    	</div>
</div>
    </nav>

	<div class="container fill">
		<div class="row">
	      <div class="col-lg-4 col-md-6 col-xs-12">
	      	<div class="thumbnail">
	          <img src="images/med2(cro).jpg">
	          <div class="description">CROCIN ADVANCED</div>
	        	<div class="price" > Rs. 30</div>
	        <button class="btn btn-success btn-block" onclick="alertmsg()">Add to cart</button>
	        </div>
	      </div>
	      
	    	<div class="col-lg-4 col-md-6 col-xs-12">
	        <div class="thumbnail">
	          <img src="images/med1(painre).jpg" height="223px" width="226px">
	          <div class="description">PAIN RELEIVER</div>
	        <div class="price" > Rs. 95</div>
	        <button class="btn btn-success btn-block" onclick="alertmsg()">Add to cart</button>
	        </div>
	      </div>
	  	
	  		<div class="col-lg-4  col-md-6 col-xs-12">
	        <div class="thumbnail" height="200px">
	          <img src="images/med3(allergy).jpg" height="223px" width="226px">
	          <div class="description">ANTI ALLERGIC</div>
	        <div class="price" > Rs. 99</div>
	        <button class="btn btn-success btn-block" onclick="alertmsg()">Add to cart</button>
	        </div>
	      </div>
	    </div>
	    <!-- <div class="row">  
	  		<div class="col-lg-4  col-md-6 col-xs-12">
	        <div class="thumbnail">
	          <img src="images/syrup1.jpg" height="223px" width="226px">
	          <div class="description">HIMCOCID</div>
	        <div class="price" > Rs. 35</div>
	        <button class="btn btn-success btn-block">Add to cart</button>
	        </div>
	      </div>
	  		<div class="col-lg-4  col-md-6 col-xs-12">
	        <div class="thumbnail">
	          <img src="images/syrup2.jpg" height="223px" width="226px">
	          <div class="description">DIAKOF</div>
	        <div class="price" > Rs. 40</div>
	        <button class="btn btn-success btn-block">Add to cart</button>
	        </div>
	      </div>
	  		<div class="col-lg-4  col-md-6 col-xs-12">
	        <div class="thumbnail">
	          <img src="images/syrup3.jpg" height="223px" width="226px">
	          <div class="description">TONSARI COUGH SYRUP</div>
	        <div class="price" > Rs. 40</div>
	        <button class="btn btn-success btn-block">Add to cart</button>
	        </div>
	      </div>
	    </div> --> 
	    <div class="row">  
	      	<div class="col-lg-4  col-md-6 col-xs-12">
	        <div class="thumbnail">
	          <img src="images/eno.jpg" height="223px" width="226px">
	          <div class="description">ENO (LEMON)</div>
	        <div class="price" > Rs. 49</div>
	        <button class="btn btn-success btn-block" onclick="alertmsg()">Add to cart</button>
	        </div>
	      </div>
	  		<div class="col-lg-4  col-md-6 col-xs-12">
	        <div class="thumbnail">
	          <img src="images/nicotex.jpg" height="223px" width="226px">
	          <div class="description">NICOTEX</div>
	   			<div class="price" > Rs. 57</div>
	        <button class="btn btn-success btn-block" onclick="alertmsg()">Add to cart</button>
	        </div>
	      </div>
	      <div class="col-lg-4  col-md-6 col-xs-12">
	        <div class="thumbnail">
	          <img src="images/bandaid.jpg" height="223px" width="226px">
	          <div class="description">BANDAID</div>
	   			<div class="price" > Rs. 85</div>
	        <button class="btn btn-success btn-block" onclick="alertmsg()">Add to cart</button>
	        </div>
	      </div>
	    </div>
	    
	  	</div>
	</div>

</body>
</html>