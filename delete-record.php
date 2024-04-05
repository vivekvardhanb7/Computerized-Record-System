<?php
    require'config.php';
    session_start();
    if(isset($_GET['id']))
    {        
        $code=$_GET['id'];
        // echo "<script>alert($code)</script>";
        // echo "<script>alert($mail)</script>";
        $sql="DELETE FROM recorddetails WHERE subjectcode=$code";
        $query=mysqli_query($con,$sql);
        if($query)
        {
            echo "<script>alert('Record deleted successfully')</script>";
            echo "<script>window.open('dashboard.php','_self')</script>";
        }
        else
        {
            echo "<script>alert('Error Occured')</script>";
            echo "<script>window.open('dashboard.php','_self')</script>";
        }

    }
    else
    {
        echo "!!!!Error occured !!!! Failed to delete the file";

    }

?>