<?php
session_start();
if (!isset($_SESSION['session_check'])) {
	header('location:./index.php');
}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Billing system</title>

		<link href="https://fonts.googleapis.com/css?family=Atomic+Age|Ubuntu+Condensed" rel="stylesheet">

		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="../css/mycss.css">
		<link rel="stylesheet" type="text/css" href="../css/style_bill.css">
		<script src="js/jquery-3.2.1.min"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script type="text/javascript">
			/*$(document).ready(function(){
				var add_row =5;
					$("#addrow").click(function(){
					add_row++;
					id++;
					p_id++;
					amount++;
					$("#list").append('<tr><td><input type="text" name="product'+p_id+'" id="item'+p_id+'" class="form-control" placeholder="Item Name'+' '+add_row+'" style="padding: 0px; border: 1px solid  #2B2B2B; margin-top: 20px; height: 38px; width: 300px; margin-left: 150px; padding-left: 5px;"></td><td><input style="padding: 0px;border: 1px solid  #2B2B2B;margin-top: -10px;height: 38px;width: 100px;margin-left: 50px;padding-left: 5px;position: absolute;" type="text" name="price'+amount+'" id="txt-lg'+ id +'" class="form-control" placeholder="Price" ></td></tr>');
			});
		});*/

		</script>

	</head>
	<body>
	<div class="head">
		<h1 class="header" >e-Billie <i class="fa fa-paw" aria-hidden="true"></i></h1>
	</div>
	<center>
		<div class="main" style="background-color: #028090">
			<div class="container" style="width: 700px; background-color: #ffffff;">
			<h2 style="position: absolute; display: inline-block; margin-top: 8px; margin-left: 25px;"><?php echo $_SESSION["name"];?></h2>
			<h4 style="display: inline-block; margin-top: 8px;"><a style="margin-left: 550px;" href="logout.php" id="anchor">LogOut</a></h4>
			<br>
			<hr>
			<center><h2 class="caption">Generate your E-Bill</h2></center>
			<center>
			<form action="bill.php" method="POST" class="userbill"onsubmit="pushData();">
				<center>
				<input type="email" name="customer_email" id="txt-sml2" class="form-control mr-sm-2" placeholder="Customer Email" style="display: inline-block;" required>
				<input type="number" name="mob_num" id="txt-sml3" class="form-control mr-sm-2" placeholder="Contact Number" style="display: inline-block;" aria-label="Search" required>
				</center>
				<center>
				<table id="list" class="userbill">
					<tr>
						<td><input type="text" name="product1" id="item1" class="form-control" placeholder="Item Name 1"></td>
						<td><input type="text" name="price1" id="txt-lg4" class="form-control" placeholder="Price"></td>
					</tr>

					<tr>
						<td><input type="text" name="product2" id="item2" class="form-control" placeholder="Item Name 2"></td>
						<td><input type="text" name="price2" id="txt-lg5" class="form-control" placeholder="Price"></td>
					</tr>

					<tr>
						<td><input type="text" name="product3" id="item3" class="form-control" placeholder="Item Name 3"></td>
						<td><input type="text" name="price3" id="txt-lg6" class="form-control" placeholder="Price"></td>
					</tr>

					<tr>
						<td><input type="text" name="product4" id="item4" class="form-control" placeholder="Item Name 4"></td>
						<td><input type="text" name="price4" id="txt-lg7" class="form-control" placeholder="Price" ></td>
					</tr>

					<tr>
						<td><input type="text" name="product5" id="item5" class="form-control" placeholder="Item Name 5" ></td>

						<td><input type="text" name="price5" id="txt-lg8" class="form-control" placeholder="Price" onkeydown="Javascript: if (event.which==9) add_row();"></td>
					</tr>

				</table>
				<i class="fa fa-plus-square" id="addrow" style="display: none;"></i>
				<table>
					<tr>
						<td></td>
						<td><input type="text" name="total"  id="ttl" class="form-control" placeholder="Total" required></td>
					</tr>
				</table>
				</center>
				<br>

				<center><button class="btn btn-dark" type="button" onclick="add()" id="control_buttons">Calculate Total</button> <button id="control_buttons" class="btn btn-dark" type="submit">Finish Billing</button></center>
				<textarea id="data_price_hidden" name="data_price" style="display:none;"></textarea>
				<textarea id="data_items_hidden" name="data_items" style="display:none;"></textarea>
			</form>
			</center>
			</div>
		</div>
	</center>
	</body>
	<script type="text/javascript">
		var price = [];
		var index=1;
		var items=[];
		var id = 8;
		var p_id=5;
		var amount=5;
		var cell=5;

		function pushData(){

			for(var i=1;i<=p_id;i++)
			{
				if(document.getElementById('item'+i+'').value=='')
				{
					continue;
				}
				items.push(document.getElementById('item'+i+'').value);

			}
			for (var i = 4 ; i <=id ; i++) {
			if (document.getElementById('txt-lg'+i+'').value=='') {
				continue;
			}

			 price.push(parseInt(document.getElementById('txt-lg'+i+'').value));
			}
			price.toString();
			items.toString();
			document.getElementById('data_price_hidden').value=price;
			document.getElementById('data_items_hidden').value=items;
			console.log(items);
		}

		function add(){

		var sum=0;
		document.getElementById('ttl').value=0;
		/*var a=parseInt(document.getElementById('txt-lg4').value);
		var b=parseInt(document.getElementById('txt-lg5').value);
		var c=parseInt(document.getElementById('txt-lg6').value);
		var d=parseInt(document.getElementById('txt-lg7').value);
		var e=parseInt(document.getElementById('txt-lg8').value);

		total= a+b+c+d+e;*/

		for (var i = 4 ; i <=id ; i++) {
			if (document.getElementById('txt-lg'+i+'').value=='') {
				continue;
			}
			sum += parseInt(document.getElementById('txt-lg'+i+'').value);


			}
		document.getElementById('ttl').value= sum;


	}
			/*$(document).keypress(function (e){
    		if(e.keyCode == 13){
       	    add_row();
   			}
			});
	function press(e){
		//var input = document.getElementById('#txt-lg'+id+'');
		if (e.keyCode==13) {
			add_row();
		}

	}*/
	function add_row()
		{
			var $el = $('#txt-lg'+id+''),
     		defaultKeypress = $el.attr('onkeypress');

			$el.removeAttr('onkeypress');

			cell++;
			id++;
			p_id++;
			amount++;
			var table=document.getElementById('list');
			var pos=(table.rows.length);
			var row=table.insertRow(pos);
			var newCell  = row.insertCell();
			newCell.outerHTML='<td><input type="text" name="product'+p_id+'" id="item'+p_id+'" class="form-control" placeholder="Item Name'+' '+cell+'" style="padding: 0px; border: 1px solid  #2B2B2B; margin-top: 20px; height: 38px; width: 300px; margin-left: 150px; padding-left: 5px;"></td><td><input style="padding: 0px;border: 1px solid  #2B2B2B;margin-top: -10px;height: 38px;width: 100px;margin-left: 50px;padding-left: 5px;position: absolute;" type="text" name="price'+amount+'" id="txt-lg'+ id +'" class="form-control" placeholder="Price" onkeydown="Javascript: if (event.which==9) add_row();"></td>';
			//alert(id);
			//document.getElementById('#txt-lg8').addEventListener("input",add_row);

			//document.getElementById('#txt-lg'+id+'').removeEventListener("input",add_row);


		}

</script>
</html>
