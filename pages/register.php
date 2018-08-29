<?php
session_start();
require("db_connect.php");

$store_name=$_POST["name"];
$email=$_POST["email"];
$pass=$_POST["pass"];
$mobileno=$_POST["mobno"];
$uid=md5(microtime());

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql="INSERT into store_info (uid, name, email, mobno, pass) VALUES ('".$uid."', '".$store_name."', '".$email."', '".$mobileno."', '".$pass."')";

if (mysqli_query($conn, $sql))
{
  $_SESSION["name"]=$store_name;
  $_SESSION["email"]=$email;
  $_SESSION["mobno"]=$mobileno;
    $_SESSION["uid"]=$uid;
    header("location:./main.php");
}
else
{
	header("location:register_unsuccessful.html");
}
?>
