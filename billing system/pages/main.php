<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Billing system</title>

	<link rel="stylesheet" type="text/css" href="../css/mycss.css">

	<link href="https://fonts.googleapis.com/css?family=Atomic+Age|Ubuntu+Condensed" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<style type="text/css">
		body{background-color: white;}
		.head{background-color: #D8572A;padding-left: 50px;} 
	</style>
</head>
<body>
<div class="head">
	<h1 style="text-align: left;">e-Billie <i class="fa fa-paw" aria-hidden="true"></i></h1>
</div>

<div class="main">
	<h2 style="float: left; display: inline-block;"><?php echo $_SESSION["name"];?></h2>
	<h4 style="float: right; display: inline-block;"><a href="logout.php">LogOut</a></h4>
	<form action="bill.php" method="POST">
		<input type="text" name="customer_email" class="txt-sml2" placeholder="Customer Email" required>

		<table id="list">
			<tr>
				<td><input type="text" name="product1" class="txt-lg3" placeholder="Item Name"></td>
				<td><input type="text" name="price1" class="txt-lg4" placeholder="Price" id="one"></td>
			</tr>

			<tr>
				<td><input type="text" name="product2" class="txt-lg3" placeholder="Item Name 2"></td>
				<td><input type="text" name="price2" class="txt-lg4" placeholder="Price" id="two"></td>
			</tr>

			<tr>
				<td><input type="text" name="product3" class="txt-lg3" placeholder="Item Name 3"></td>
				<td><input type="text" name="price3" class="txt-lg4" placeholder="Price" id="three"></td>
			</tr>

			<tr>
				<td><input type="text" name="product4" class="txt-lg3" placeholder="Item Name 4"></td>
				<td><input type="text" name="price4" class="txt-lg4" placeholder="Price" id="four"></td>
			</tr>

			<tr>
				<td><input type="text" name="product5" class="txt-lg3" placeholder="Item Name 5"></td>
				<td><input type="text" name="price5" class="txt-lg4" placeholder="Price" id="five"></td>
			</tr>
		</table>
		<input type="text" name="total" id="total" class="txt-lg4" placeholder="Total" style="margin-left: 50px"><br>

		<button class="btn" type="button" onclick="add()">Calculate Total</button> <button class="btn" type="submit">Finish Billing</button>
	</form>
</div>
</body>
<script type="text/javascript">
	function add(){
	var total=0;
	var a=parseInt(document.getElementById('one').value);
	var b=parseInt(document.getElementById('two').value);
	var c=parseInt(document.getElementById('three').value);
	
	var d=parseInt(document.getElementById('four').value);
	var e=parseInt(document.getElementById('five').value);

	total= a+b+c+d+e;

	document.getElementById('total').value= total;
}
</script>
</html>