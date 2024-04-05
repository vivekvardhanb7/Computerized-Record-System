<?php
include 'config.php';
?>
<!DOCTYPE html>
<html>
<head>
  <title>PHP Print</title>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="print.css" media="print">
</head>
<body>

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h2>Record content</h2>
      <div class="col-lg-8 text-center">
          <?php          
          if(isset($_GET['id']))
    	{        
    	  $code=$_GET['id'];
          $sql="SELECT * from recorddetails where mail=$code";
          $query=mysqli_query($con,$sql) or die(mysqli_error());
          while($fetch=mysqli_fetch_assoc($query))
          {
          ?>
          	<div class="col-lg-6"><?php echo $fetch['content']?></div>
          <?php
          }
         }
          ?>
      </div>
      <div class="text-center">
        <button onclick="window.print();" class="btn btn-primary" id="print-btn">Print
        </button>
      </div>
    </div>
  </div>
</div>
</body>
</html>