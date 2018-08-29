<?php
session_start();
$_SESSION['cus_email']=$_POST['customer_email'];
$_SESSION['cus_mob']=$_POST['mob_num'];
require 'db_connect.php';
$counter1=1;
$counter2=1;
$array_price=explode(',',$_POST['data_price']);
$array_items=explode(',',$_POST['data_items']);
$total=$_POST["total"];
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
							<div class="container" style="width: 700px; background-color: #f0f3bd;">
							<center><h2 class="caption">E-Bill from <?php echo $_SESSION["name"]?></h2></center>
							<hr>
							<center>

								 <table id="list" class="userbill">
                   <?php


                     ?><tr><td><?php foreach ($array_items as $value)
                     {
                     	echo "$value <br>";

                     } ?>
                   </td><td><?php foreach ($array_price as $value)
                   {
                    echo "$value <br>";

                  }?></td></tr>
				 				</table>
							</center>
              <span>Total: <?php echo $total ?></span>
            </div>
          </div>
							<style>
								#item
								{
									padding-right:50px;
								}
								.userbill
								{
									margin:0 !important;
									font-size:30px;
								}
							</style>
					</body>
				</html>
