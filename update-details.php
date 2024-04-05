<?php
    require'config.php';
    session_start();

        if(isset($_POST['update']))
        {
            $name= $_POST['username'];
            $pass=$_SESSION['Password'];
            $email= $_POST['email'];
            $number= $_POST['phone'];
            $dob= $_POST['date'];
            // Query to insert values into the table.
            $sql="update details set Username='$name',Email='$email',Password='$pass',Phone='$number',dob='$dob'";
            if(mysqli_query($con,$sql))
            {
                // alerting a message.
                echo "<script>alert('Details updated successfully')</script>";  
                // redirecting to the login page .
                echo "<script>window.open('users-profile.php','_self')</script>";
            }
            // if the query fails
            else
            {
                // displaying an error message.
                echo "error:Failed to connect";
            }
        }        
    else if (isset($_POST['change'])) 
    {
        $mail=$_SESSION['Email'];
        $currentpass=$_POST['password'];
        $newpass=$_POST['newpassword'];
        $confirm=$_POST['confirmpass'];
        $result = mysql_query("SELECT Password FROM details WHERE Email='$mail'");
        if($password!= mysql_result($result, 0))
        {
        echo "You entered an incorrect current password";
        }
        else if($newpass = $confirm)
        {
            $sql=mysql_query("UPDATE details SET Password='$newpass' where Email='$mail'");
            
            if($sql)
            {
                echo "Congratulations You have successfully changed your password";
            }
            else
            {
                echo "Error occured";
            }
        }
        else
        {
            echo "<script>alert('new password and confim password didn't match please re-enter the passowrds to update your password')</script>";
            echo "<script>window.load('users-profile.php','_$_self')</script>";
        }
    }
?>