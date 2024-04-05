`<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>CRS - Dashboard</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="user-assests/img/.png" rel="icon">
  <link href="user-assests/img/.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="user-assests/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="user-assests/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="user-assests/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="user-assests/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="user-assests/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="user-assests/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="user-assests/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="user-assests/css/style.css" rel="stylesheet">
</head>

<body>
  <?php
  // Session start
  session_start();
  // checking whether the user logged in or not 
  if($_SESSION['Email'])
  {
    // if login is successful then the page is redirected normally.
  }
  // if the user tried to access the dashbaord page without any login
  else
  {
    // redirecting to login page .
    header("location:login.html");
  }
  ?>
  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <i class="bi bi-list toggle-sidebar-btn"></i>
      <a href="index.html" class="logo d-flex align-items-center" style="margin-left:20px ;">
        <img src="user-assests/img/" alt="">
        <span class="d-lg-block">CRS</span>
      </a>
    </div><!-- End Logo -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item">
          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="index.html" 
          style="margin-right:20px">
            <i class="bi bi-house-door"></i>
            <span class="d-none d-md-block ps-2">Home</span>
          </a>
        </li>
        <br>
        <?php
            require'config.php';
            $mail=$_SESSION['Email'];
            $sql ="select * from admindetails where Email='$mail'";
            $query=mysqli_query($con,$sql) or die(mysqli_error());
            while($fetch=mysqli_fetch_array($query)){
                    ?>
        <li class="nav-item dropdown pe-3">
          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="user-assests/img/.png" alt="" class="rounded-circle">
            <i class="bi bi-person"></i>
            <span class="d-none d-md-block dropdown-toggle ps-2"><?php echo $fetch['Username']?></span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6><?php echo $fetch['Username']?></h6>
              <span><?php echo $fetch['dob']?></span>
            </li>
            <?php
              }
            ?>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="admin-profile.php">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="signout.php">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="dashboard.php">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="admin-profile.php">
          <i class="bi bi-person"></i>
          <span>Profile</span>
        </a>
      </li><!-- End Profile Page Nav -->
    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">
        <div class="col-lg-6">
          <div class="card info-card" >
            <div class="card-body">
              <h5 class="card-title">Year <span>| Sem</span></h5>
                <div class="d-flex">
                    <div class="ps-3">
                      <h6 class="text-center">E-3</h6>
                      <span class="small pt-1 fw-bold">Sem -1</span> 
                      <br>
                      <br>
                    </div>

                  </div>
            </div>
        </div>
      </div>
        <div class="col-lg-6">
          <div class="card info-card">
            <div class="card-body">
              <h5 class="card-title">Lab Subjects <span>| Subject code</span></h5>
                <div class="d-flex align-items-center">
                    <div class="ps-3">
                      <h5>Operating System <span class="text-muted small pt-2 ps-1">| CS3183</span></h5>
                      <h5>Software Engineering<span class="text-muted small pt-2 ps-1">| CS3103</span></h5>
                      <h5>Computer Networks<span class="text-muted small pt-2 ps-1">| CS3102</span></h5>
                    </div>
                  </div>
            </div>
          </div>
        </div>
      
            <!-- Records list -->
            <div class="col-12">
              <div class="card recent-sales overflow-auto">
                <div class="card-body">
                    <h5 class="card-title">Subjects <span>| Records</span></h5>
                  <table class="table table-borderless datatable ">
                    <thead  class="text-center">
                      <tr>
                        <th scope="col">User Email</th>
                        <th scope="col">Subject Code</th>
                        <th scope="col">Subject Name</th>
                        <th scope="col">Record Name</th>
                        <th scope="col">Date created</th>
                        <th scope="col">funtion</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                        require'config.php';
                        $sql ="select * from recorddetails";
                        $query=mysqli_query($con,$sql) or die(mysqli_error());
                        if($num=mysqli_num_rows($query)>0)
                        {
                         while($fetch=mysqli_fetch_array($query)){
                      ?>                      
                      <tr>
                        <td scope="row"><?php echo $fetch['mail']?></td>
                        <th scope="row"><?php echo $fetch['subjectcode']?></th>
                        <td><?php echo $fetch['subjectname']?></td>
                        <td><a href="#" class="text-primary">OS Record</a></td>
                        <td><?php echo $fetch['date']?></td>
                        <td><a href='getrecord_data.php?id="<?php echo $fetch['mail'];?>"'
                          class="link-success">View Record</a></td>
                      </tr>
                      <!-- <tr>
                        <th scope="row"><a href="#">CS3103</a></th>
                        <td>Software Engineering</td>
                        <td><a href="#" class="text-primary">SE Record</a></td>
                        <td><span class="badge bg-warning">Pending</span></td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#">CS3101</a></th>
                        <td>Computer Network</td>
                        <td><a href="#" class="text-primary">CN Record</a></td>
                        <td><span class="badge bg-danger">Rejected</span></td>
                      </tr>   -->
                      <?php
                        }
                      }
                    ?>            
                    </tbody>
                  </table>

                </div>

              </div>
            </div><!-- End Recent Sales -->

          </div>
        </div><!-- End Left side columns -->

        <!-- Right side columns -->
        <div class="col-lg-4">        

      </div>
    </section>

  </main><!-- End #main -->

    <footer id="footer" class="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>CRS</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by CSE - Students
      </div>
    </div>
  </footer><!-- End Footer -->

  <!-- Vendor JS Files -->
  <script src="user-assests/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="user-assests/vendor/quill/quill.min.js"></script>
  <script src="user-assests/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="user-assests/vendor/tinymce/tinymce.min.js"></script>

  <!-- Template Main JS File -->
  <script src="user-assests/js/main.js"></script>

</body>

</html>