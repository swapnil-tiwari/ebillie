<?php
session_start();
require("db_connect.php");

$userid=$_POST["email"];
$pass=$_POST["pass"];;

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM store_info WHERE email='".$userid."' AND pass='".$pass."'" ;
$query=mysqli_query($conn, $sql);
if ($query) 
{
	if(mysqli_num_rows($query)==1)
	{
		
		while($row = mysqli_fetch_assoc($query)) 
		{
			$_SESSION["name"]=$row["name"];
			$_SESSION["email"]=$row["email"];
			$_SESSION["mobno"]=$row["mobno"];
  			$_SESSION["uid"]=$row["uid"];
		}
		header("location:main.php");
	}
	else
	{
		header("location:login_eror.html");
	}
} 
else 
{
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>