<?php require_once 'core/init.php';
$students_id = input::get('students_id');
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>STUDENT | EDIT PROFILE</title>
  <link rel="shortcut icon" href="src/media/favico.ico" type="image/x-icon">
  <!-- Custom fonts for this template-->
  <link href="src/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="src/css/sb-admin-2.min.css" rel="stylesheet">
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
?>
<body class="bg-gradient-primary">

 <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
    
      <div class="card-body">

        <div class="col-lg-12">
          <h4 class="text-center">Edit STUDENTS</h4>
        </div>

            <hr width="50%">
            <div class="row p-3">
          <div class="col-lg-2"></div>                            
               
             <div class="col-lg-8">

            <form class="user" method="POST" action="" enctype="multipart/form-data">
    <?php 
    if (isset($_FILES['image'])) {
      $allowedFile =  array("jpg","JPG", "PNG","JPEG", "png", "jpeg");
      $upload = new Upload($_FILES['image'], "studentimg/", 10000000000 ,$allowedFile);
      $image = $upload->GetFile();
    }

      if(Input::exists()){

     if (Token::check(Input::get('token'))) {

      try{
      $user->update(array(

              
              'firstname' => Input::get('firstname'),
              
              'email' => Input::get('email'),
              
              'username' => Input::get('email'),
              
              'lastname' => Input::get('lastname'),

              'othernames' => Input::get('othernames'),
              
              'phone' => Input::get('phone'),

              'matric_no' => Input::get('matric_no'),

              'session' => Input::get('session'),
              'studentimg' => $image,

              'programme' => Input::get('programme'),

              'dob' => Input::get('dob'),
              
              'sog' => Input::get('sog'),
              
              'street' => Input::get('street'),
              
              'city' => Input::get('city'),

              'state' => Input::get('state'),

              'department' => Input::get('department'),

              'level' => Input::get('level')

            ));?>
            <script>
                  Swal.fire({
                    type: 'success',
                    title: 'Done! Some Moments PLS!',
                    showConfirmButton: false,
                  })

                  setTimeout(function(){
                  window.location.href= "my-profile.php";
                  }, 700);
            </script>
      <?php
        } 
        catch(Exception $e)
        {
           die($e->geMessage());
        }
      }
    }
    ?>
                  <div class="row">
            <?php
            include 'data/studentsData.php';
            if ($user->hasPermission('admin'))
            {
            redirect::to('admin.php');
            }
            ?>                

             <div class="col-md-6">
                      <div class="form-group">
                        <label>Firstname:</label>
                      <input type="text" class="form-control form-control-user"  value="<?php echo $firstname?>"name="firstname">
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Lastname:</label>
                      <input type="text" class="form-control form-control-user"  value="<?php echo $lastname?>" name="lastname">
                      </div>
                    </div>

                </div>

              <div class="form-group">
                        <label>Othernames:</label>
                      <input type="text" class="form-control form-control-user" value="<?php echo $othernames?>"  name="othernames">
              </div>

        <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>E-mail:</label>
              <input type="email" class="form-control form-control-user"  value="<?php echo $email?>" name="email">
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label>Phone:</label>
              <input type="text" class="form-control form-control-user" value="<?php echo $phone?>" name="phone">
              </div>
            </div>

         </div>


      <div class="row">
          
          <div class="col-md-6">
            <div class="form-group">
              <label>Department:</label>
            <input type="text" class="form-control form-control-user" value="<?php echo $department?>" name="department" readonly>
            </div>
          </div>


          <div class="col-md-6">
              <label>Programme:</label>
            <div class="form-group">
            <input type="text" class="form-control form-control-user" name="programme" value="<?php echo $programme?>" readonly> 
            </div>
          </div>

       </div>

       <div class="row">
          
          <div class="col-md-6">
            <div class="form-group">
              <label>Registration No:</label>
            <input type="text" class="form-control form-control-user" value="<?php echo $matric_no?>" name="matric_no" readonly>
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <label>Session:</label>
            <input type="text" class="form-control form-control-user" name="session" value="<?php echo $mysession?>" placeholder="Session" readonly>
            </div>
          </div>

       </div>

         <div class="row">

             <div class="col-md-12">
                <div class="form-group">
                <label>Address:</label>
                        <input type="text" class="form-control form-control-user" value="<?php echo $street?>" name="street">
                 </div>
             </div>

               <div class="col-md-6">
                  <div class="form-group">
                        <input type="text" class="form-control form-control-user" value="<?php echo $city?>" name="city"> 
                    </div>
                   </div>
               
               <div class="col-md-6">
                  <div class="form-group">
                        <input type="text" class="form-control form-control-user" value="<?php echo $state?>"  name="state">
                    </div>
                </div>
            </div>

             <div class="form-group">
                <label>Select A Picture:</label>
                <input type="file" class="form-control form-control-user" name="image"> 
              </div>

             <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>State Of Origin:</label>
                      <input type="text" class="form-control form-control-user" name="sog" value="<?php echo $sog;?>" readonly>
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Date Of Birth:</label>
                      <input type="date" class="form-control form-control-user" name="dob" value="<?php echo $dob?>" readonly>
                      </div>
                    </div>

                 </div>

                   <input type="hidden" name="token" value="<?php echo Token::generate();?>">

               <div class="row mt-3">
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

                </div>

             </div>

            </form>
                      <hr>
              <div class="text-center">
                <a class="small" href="forgot-password.php">Reset Password?</a>
              </div>

            </div> <!-- DIV CLASS ROW -->
    
      </div>

  </div>
<?php
}
?>
</div>

  <!-- Bootstrap core JavaScript-->
  <script src="src/vendor/jquery/jquery.min.js"></script>
  <script src="src/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="src/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="src/js/sb-admin-2.min.js"></script>

</body>

</html>
