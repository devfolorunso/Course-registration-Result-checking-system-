<?php require_once 'core/init.php';?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

   <title>Welcome - Complete Profile</title>
  <link rel="shortcut icon" href="src/media/favico.ico" type="image/x-icon">
  <!-- Custom fonts-->
  <link href="src/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles-->
  <link href="src/css/admin.min.css" rel="stylesheet">
    <link rel="stylesheet" href="src/swal/sweetalert2.css">
  <link rel="stylesheet" href="src/swal/sweetalert2.min.css">
<!--===============================================================================================-->
    <!-- SWEETALERT CDN -->
  <script src="src/swal/sweetalert2.all.min.js"></script>
  <script src="src/swal/sweetalert2.min.js"></script>
    <script src="src/swal/sweetalert2.all.min.js"></script>
    <script src="src/swal/sweetalert2.js"></script>
    <!-- SWEETALERT CDN -->
</head>
            <?php
        
          $user = new User();
         if ($user->isLoggedIn()) {


          include 'data/studentsData.php';

         if ($user->hasPermission('admin')) {
            # code...
            redirect::to('admin.php');
         }

         if ($studentimg != 'studentimg/avatar.png') {

            redirect::to('home.php');
         }else{        ?>
<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

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

         <?php
                    if (Session::exists('complete'))
                    {
                    echo '<div class="alert alert-info text-capitalize" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> 
                    <i class="fa fa-volume-up"></i>
                    '. Session::flash('complete') .'</div>';
                    }   
                  ?>
          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

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
          <div class="d-md-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Upload Profile Picture</h1>
                     

          </div>

        <!-- /.container-fluid -->
        <hr>                

         <div class="row ml-auto mt-5">
            <div class="col-md-2"></div>
            <!-- Area Chart -->
            <div class="col-xl-8 col-lg-7">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Complete Your Profile</h6>



                  <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-user text-black"></i>
                    </a>
                  </div>
                </div>

                <!-- Card Body -->
                <div class="card-body">
                              
                  <div class="row">
                
                    <div class="col-md-2"></div>
                
                    <div class="col-md-8">        
                      <?php 
                      include 'process/completeProfileProcess.php';
                      ?>
    
          <form class="user" method="POST" action="" enctype="multipart/form-data">
                

              <div class="form-group">
                <label>Select A Picture:</label>

                    <input type="file" class="form-control form-control-user" name="image"> 
          
              </div>
    
              <input type="hidden" name="token" value="<?php echo Token::generate();?>">


                      <div class="row" style="margin-top: 5%;">
                            <div class="col-md-6">
                              <div class="form-group">
                                  <input type="submit" class="btn btn-primary btn-user btn-block" value="SUBMIT">
                              </div>
                      </div>


                          <div class="col-md-6">
                            <div class="form-group">
                                <input type="reset" class="btn btn-danger btn-user btn-block" style="float: right;" value="CANCEL">
                            </div>
                          </div>
                        
                        </div>
        </form>
          </div>
                
                    <div class="col-md-2"></div>
                
                  </div> <!-- DIV CLASS ROW -->
                
                </div>
              </div>
            </div>

      </div>

        <hr>
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
         <a class="btn btn-primary" href="logout.php">Logout</a>
        </div>
      </div>
    </div>
  </div>


<?php
    }
  }
?><!-- Bootstrap core JavaScript-->
  <script src="src/vendor/jquery/jquery.min.js"></script>
  <script src="src/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="src/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugins -->
  <script src="src/vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="src/vendor/datatables/dataTables.bootstrap4.min.js"></script>
  <!-- Custom scripts for all pages-->
  <script src="src/js/admin.min.js"></script>
  <!-- Page level custom scripts -->
  <script src="src/js/demo/datatables-demo.js"></script>
</body>

</html>
