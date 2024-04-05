<?php
// config.php file is included to create database connection.
include 'config.php';
// if statement to determine if the form has been submitted using the form name.
session_start();
if(isset($_POST['login']))
{
	// assigning values form the form to the variables.
	$mail=$_POST['email'];
	$pass=$_POST['password'];
	// Query to choose the information from the table to confirm the login information.
	$sql ="select * from details where Email='$mail' and Password='$pass'";
	$query=mysqli_query($con,$sql);
	// verifying the validity of the entered information.
	if(mysqli_num_rows($query)>0)
	// if the details are valid then
	{
		// displaying a successful login notification as a reminder.
		echo "<script>alert('login successful')</script>";
		// Redirecting to the dashboard page.
		echo "<script>window.open('dashboard.php','_self')</script>";
		$_SESSION['Email']=$mail;
		$_SESSION['Password']=$pass;
		
	}
	// if the details are invlaid
	else
	{
		// Alerting an Error Message
		echo "<script>alert('Invalid Login details')</script>";
		// Refreshing the login page to re-enter login details.
		echo "<script>window.open('login.html','_self')</script>";
	}

}
if(isset($_POST['admin-login']))
{
	// assigning values form the form to the variables.
	$mail=$_POST['email'];
	$pass=$_POST['password'];
	// Query to choose the information from the table to confirm the login information.
	$sql ="select * from admindetails where Email='$mail' and Password='$pass'";
	$query=mysqli_query($con,$sql);
	// verifying the validity of the entered information.
	if(mysqli_num_rows($query)>0)
	// if the details are valid then
	{
		// displaying a successful login notification as a reminder.
		echo "<script>alert('login successful')</script>";
		// Redirecting to the dashboard page.
		echo "<script>window.open('admin-dashboard.php','_self')</script>";
		$_SESSION['Email']=$mail;
		$_SESSION['Password']=$pass;
	}
	// if the details are invlaid
	else
	{
		// Alerting an Error Message
		echo "<script>alert('Invalid Login details')</script>";
		// Refreshing the login page to re-enter login details.
		echo "<script>window.open('admin-login.html','_self')</script>";
	}

}	// Admin login validation

?>

