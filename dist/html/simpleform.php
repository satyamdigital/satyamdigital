<?php 
 $host = "localhost";
$username = "root";
$password = "";
$dbname = "user";

$conn = mysqli_connect($host,$username,$password,$dbname);

if ($conn) {
	echo "Connection Ok";
}
else{
	die("reason" .mysqli_connect_error());
}
error_reporting(0);




 ?>