<?php
// config.php file is included to create database connection.
include 'config.php';
// if statement to determine if the form has been submitted using the form name.
if(isset($_POST['submit']))
{
	// assigning values form the form to the variables.
	$name= $_POST['username'];
	$pass= $_POST['password'];
	$email= $_POST['email'];
	$number= $_POST['phonenumber'];
	$dob= $_POST['dob'];
	// Query to insert values into the table.
	$sql="insert into details(Username,Email,Password,Phone,dob) 
	values('$name','$email','$pass','$number','$dob')";
	$select="select * from details where Email='$email'";
	$query=mysqli_query($con,$select);
	// restricting the duplication of email 
	if(mysqli_num_rows($query)>0)
	{
		echo "<script>alert('!Email is already registered! try registering with another email address')</script>";
		echo "<script>window.open('register.html','_self')</script>";
	}
	
	//  if the query executed successfully then 
	else if(mysqli_query($con,$sql))
	{
		// alerting a message.
		echo "<script>alert('Registeration Successful')</script>";	
		// redirecting to the login page .
		echo "<script>window.open('login.html','_self')</script>";
	}
	// if the query fails
	else
	{
		// displaying an error message.
		echo "error:Failed to connect";
	}
	// terminating the database connection.
	mysqli_close($con);
}

?>