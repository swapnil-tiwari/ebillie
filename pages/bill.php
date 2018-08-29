<?php
session_start();
$_SESSION['cus_email']=$_POST['customer_email'];
$_SESSION['cus_mob']=$_POST['mob_num'];
require 'db_connect.php';
$array_price=explode(',',$_POST['data_price']);
$array_items=explode(',',$_POST['data_items']);
$total=$_POST["total"];
$bill_id=md5(microtime());

$filename=$bill_id.".html";

$string_content='<table id="bill"><tr><th>Items</th><th>Price</th></tr>';

foreach ($array_items as $key => $value)
 {
	 $local='<tr><td>'.$value.'</td><td>&#x20B9;'.$array_price[$key].'</td></tr>';
	 $string_content=$string_content . $local;
}
$myfile=fopen("bills/$filename", "w");
$content='<!DOCTYPE html>
				<html>
					<head>
						<title>Billing system</title>

						<link href="https://fonts.googleapis.com/css?family=Atomic+Age|Ubuntu+Condensed" rel="stylesheet">

						<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
						<link rel="stylesheet" type="text/css" href="../../css/bootstrap.css">
						<link rel="stylesheet" type="text/css" href="../../css/bootstrap.min.css">
						<link rel="stylesheet" type="text/css" href="../../css/mycss.css">
						<link rel="stylesheet" type="text/css" href="../../css/style_bill.css">

					</head>
					<body>
					<div class="head">
						<h1 class="header" >e-Billie <i class="fa fa-paw" aria-hidden="true"></i></h1>
					</div>
					<center>
						<div class="main" style="background-color: #028090">
							<div class="container" style="width: 700px; background-color: #ffffff;">
							<center><h2 class="caption">E-Bill from '.$_SESSION["name"].'</h2></center>
							<hr>
							<center>
								'.$string_content.'
								<td id="total_prev">Total</td><td id="total">&#x20B9;'.$total.'</td>
								</table>
							</center>
							<style>
									#bill
									{

										 border-collapse: collapse;
										 width: 100%;
									}
									#bill td, #bill td {
												border: 1px solid #ddd;
												padding: 8px;
									}

										#bill td:{background-color: white !important;}

										#bill tr:hover {background-color: #ddd;}

										#bill th {
												padding-top: 12px;
												padding-bottom: 12px;
												text-align: left;
												background-color: #5BB7FB;
												font-size:larger;
										 }

							</style>

					</body>
				</html>';
fwrite($myfile, $content);
fclose($myfile);
/*require 'send_sms.php'*/;
/*require 'send_email.php'*/;
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
						<center>	<h3>Thank you for choosing E-billie!</h3> </center>
			<center><h4>The e-bill has been sent to <?php echo $_SESSION["cus_email"]?> and <br> Mobile Number:<?php echo $_SESSION["cus_mob"]?></h4></center>
			<center>
