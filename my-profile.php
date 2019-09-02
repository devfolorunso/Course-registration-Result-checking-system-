<?php require_once 'core/init.php';?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
       <?php
        
          $user = new User();
         if ($user->isLoggedIn()) {


          include 'data/studentsData.php';
         if ($user->hasPermission('admin')) {
            # code...
            redirect::to('admin.php');
         }
         ?>
  <title><?php echo $firstname .' '. $lastname;?> </title>

  <link rel="shortcut icon" href="src/media/favico.ico" type="image/x-icon">

  <!-- Custom fonts-->
  <link href="src/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles-->
  <link href="src/css/admin.min.css" rel="stylesheet">


</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="home.php">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3"><?php echo $firstname;?> <sup><?php echo $matric_no;?></sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="home.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        <span style="color:#ce99;">Courses</span>
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
    
    <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="course-registration-stepi.php">
          <i class="fas fa-fw fa-edit"></i>
          <span>Course Registration</span></a>
      </li>
    

    <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="edit-courses-i.php">
          <i class="fas fa-fw fa-folder"></i>
          <span>Edit Registered Courses</span></a>
      </li>

      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="view-courses.php">
          <i class="fa fa-eye"></i>
          <span>View Registered Courses</span></a>
      </li>


            <li class="nav-item">
        <a class="nav-link" href="print-courses-i.php">
          <i class="fas fa-fw fa-print"></i>
          <span>Print Registered Courses</span></a>
      </li>

      </li>

      <hr class="sidebar-divider">

            <!-- Heading -->
      <div class="sidebar-heading">
        <span style="color:#ce99;">Result Checker</span>
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
    
    <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="check-result.php">
          <i class="fas fa-fw fa-eye"></i>
          <span>Check Result</span></a>
      </li>
    

    <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="print-result.php">
          <i class="fas fa-fw fa-print"></i>
          <span>Print Result</span></a>
      </li>

      </li>
      
      <hr class="sidebar-divider">

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-wrench"></i>
          <span>Others</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom:</h6>
            <a class="collapse-item" href="my-profile.php">My Profile</a>
          </div>
        </div>
      </li>

      <hr class="sidebar-divider">

      <li class="nav-item">
        <a class="nav-link" href="logout.php">
          <i class="fas fa-fw fa-sign-out-alt"></i>
          <span>Logout</span></a>
      </li>
      <!-- Divider -->

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $firstname .' '. $lastname;?></span>
                <img class="img-profile rounded-circle" src="<?php echo $studentimg;?>">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
              <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="logout.php" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Hello! <?php echo $firstname;?></h1>
            
          </div>
          <hr class="mb-4 text-gray-400">
          <!-- Content Row -->
            <div class="jumbotron shadow p-3 mb-5 bg-white text-center">
              
              <div class="row mt-5">
                
                <div class="col-md-2">
                  <img class="img-thumbnail" width="150" height="150" src="<?php echo $studentimg;?>">
                </div>
                
                <div class="col-md-10">
                  <h3 class="h3 font-weight-bold display-4 text-black"><?php echo $firstname .' '. $lastname .' '.$othernames;?></h3>
                <div class="row text-md-right">
                
                  <div class="col-md-5">
                    <p>Date Of Birth: <?php echo $dob;?></p>
                    <p>State Of Origin: <?php echo $sog;?></p>
                    <p>Email: <?php echo $email?></p>
                    <p>Phone: <?php echo $phone ?></p>
                 </div>
                
                  <div class="col-md-5">
                    <p>Department: <?php echo $department;?></p>
                    <p>Registration No: <?php echo $matric_no;?></p>
                    <p>Programme: <?php echo $programme;?></p>
                    <p>Level: <?php echo $level;?></p>


                  </div>

                </div>

                <p>Address: <?php echo $street?> <?php echo $city?> <?php echo $state?>.</p>
                 
              </div>  
            </div>
            <a class="btn btn-lg btn-round bg-gradient-primary" href="edit-profile.php?students_id=<?php echo $student_id;?>" role="button">Edit</a>
            </div> <!-- Jumbotron -->
            
      </div>
      <!-- End of Main Content -->
    <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
           <span>Copyright &copy; Course Registration & Result Checker</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>
<?php 
}else{
  redirect::to('login.php');
}
?>
  <!-- Bootstrap core JavaScript-->
  <script src="src/vendor/jquery/jquery.min.js"></script>
  <script src="src/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="src/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="src/js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="src/vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="src/js/demo/chart-area-demo.js"></script>
  <script src="src/js/demo/chart-pie-demo.js"></script>

</body>

</html>
