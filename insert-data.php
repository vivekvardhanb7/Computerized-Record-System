<?php
// config.php file is included to create database connection.
include 'config.php';
// if statement to determine if the form has been submitted using the form name.
session_start();
if(isset($_POST['submit']))
{
	// assigning values form the form to the variables.
	$subcode='CS3103';
	$subname='Operating system';
	$content=$_POST['content'];
	$mail=$_SESSION['Email'];
	$date=date("Y/m/d");
	if(!empty($content))
	{		
		$select="select * from recorddetails where mail='$mail' and subjectcode='$subcode'";
		$query=mysqli_query($con,$select);
		$sql="insert into recorddetails(subjectname,subjectcode,content,date,mail) 
		values('$subname','$subcode','$content','$date','$mail')";

		if(mysqli_num_rows($query)>0)
		{
			echo "<script>alert('!Record is already suubmitted ')</script>";
			echo "<script>window.open('sub-1.php','_self')</script>";
		}
		//  if the query executed successfully then 
		else if(mysqli_query($con,$sql))
		{
			// alerting a message.
			echo "<script>alert('Content saved')</script>";
			// redirecting to the login page .
			echo "<script>window.open('dashboard.php','_self')</script>";
		}
			

		// if(mysqli_query($con,$query))
		// {
		// 	echo "<script>alert('Content saved')</script>";
		// 	echo $content;
		// 	echo $subname;
		// 	echo $subcode;
		// 	echo $name;
		// 	echo $date;
		// 	// header("location:dashboard.php");
		// }
		else
		{
			echo "<script>alert('Error occured ')</script>";
		}
	}
	else
	{
		echo "<script>Please add content in the editor</script>";
	}
	
}
?>


