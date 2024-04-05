<?php
session_start();
include 'config.php';
unset($_SESSION['Email']);
echo "<script>alert('Logout succesful')</script>";
header("location:login.html");
?>	