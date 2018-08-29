<?php
session_start();
$a=$_POST["product1"];
$b=$_POST["price1"];

$c=$_POST["product2"];
$d=$_POST["price2"];


$e=$_POST["product3"];
$f=$_POST["price3"];


$g=$_POST["product4"];
$h=$_POST["price4"];


$i=$_POST["product5"];
$j=$_POST["price5"];

$total=$_POST["total"];


$bill_id=md5(microtime());

$filename=$bill_id.".html";

$myfile=fopen($filename, "w");

$content= "<html> <body>
			<h1>Your Bill From ".$_SESSION['name']."</h1>
			 <table> 
				<tr><td>".$a."</td> <td>".$b."</td></tr>	
				<tr><td>".$c."</td> <td>".$d."</td></tr>
				<tr><td>".$e."</td> <td>".$f."</td></tr>
				<tr><td>".$g."</td> <td>".$h."</td></tr>
				<tr><td>".$i."</td> <td>".$j."</td></tr>		
			 </table> </body> </html>";
fwrite($myfile, $content);
fclose($myfile);

include "php/qrlib.php";
$qr="http://localhost/billing%20system/pages/".$filename;
QRcode::png($qr);

$to=$_POST["customer_email"];

$content2= "<html> <body>
			<h1>Your Bill From".$_SESSION['name']."</h1>
			 <table> 
				<tr><td>".$a."</td> <td>".$b."</td></tr>	
				<tr><td>".$c."</td> <td>".$d."</td></tr>
				<tr><td>".$e."</td> <td>".$f."</td></tr>
				<tr><td>".$g."</td> <td>".$h."</td></tr>
				<tr><td>".$i."</td> <td>".$j."</td></tr>		
			 </table> 
			 You can access it at <a href='http://localhost/billing%20system/pages/".$filename."'>here</a></body> </html>";
$subject="Bill From Your Transaction at".$_SESSION['name']."";

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <noreply@ebillie.com>' . "\r\n";
$headers .= 'Cc: fojiaysin@gmail.com' . "\r\n";

$mail=mail($to,$subject,$content,$headers);
if($mail)
{
	header("location:mail.php");
}
else
{
echo "<div class=\"alert alert-danger\">Something Went Wrong!Contact System Administrator.</div>";
}
?>