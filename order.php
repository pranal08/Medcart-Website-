<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
	if(!isset($_REQUEST['sub'])){
		?>
	<form name="f1" action="<?php $_SERVER['PHP_SELF'] ?>">
		MEDICINES : <input type="text" name="tna"> <br>
	    <!--T-Shirt Size : <input type="text" name="tsi"> <br>-->
		Quantity : <input type="text" name="qty"> <br>
		<input type="submit" name="sub" value="Add to Cart"> 
		<input type="submit" name="sub" value="Order Now">
		<input type="reset" name="sub" value="Cancel">

	</form>
	<?php 
	} else{
		$sub = $_REQUEST['sub'];
		if($sub == "Add to Cart"){
			$tna = $_REQUEST['tna'];
			$tsi = $_REQUEST['tsi'];
			$qty = $_REQUEST['qty'];
			$link = new mysqli("localhost", "root", "" , "dotg");
			$res = $link->query("select price from catalog where tname = '$tna' and tsize = '$tsi'");
			$row = mysqli_fetch_row($res);
			$price = $row[0];
			$amount = $price * $qty;
			$link -> query("insert into cart values('$tna', '$tsi', $price, $qty, $amount)");
			$link -> close();
			header("location:order.php");
		} else if($sub == "Order Now"){
			header("location:bill.php");

		}
	}
?>
</body>
</html>