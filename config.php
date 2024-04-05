<?php 
// Establishing connection to the locahost.
$con=mysqli_connect("localhost","root","","ffs");
if(!$con)
{

	//  if the connection fails then alerting a message stating connection failed.
	die("Error : Connection failed". mysqli_error($con));
}
 ?>