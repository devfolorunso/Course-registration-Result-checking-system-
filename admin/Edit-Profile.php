<?php require_once 'core/init.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Students || Sign Up</title>
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

<body class="bg-gradient-primary">

 <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
    
      <div class="card-body">

      	<div class="col-lg-12">
      		<h4 class="text-center">Create An Account</h4>
      	</div>

      			<hr width="50%">
      	    <div class="row p-3">
    			<div class="col-lg-2"></div>                            
	             
             <div class="col-lg-8">

            <form class="user" method="POST" action="">
    <?php 

      if(Input::exists()){

     if (Token::check(Input::get('token'))) {


       $update = DB::getInstance()->update('tblstudents', $id, array(


            'email' => Input::get('email'),

	           'username' => Input::get('email'),

              'password' => Hash::make(Input::get('matric_no'), $salt),
              
              'salt' => $salt,
              
              'firstname' => Input::get('firstname'),
              
              'lastname' => Input::get('lastname'),

              'othernames' => Input::get('othernames'),
              
              'phone' => Input::get('phone'),

              'matric_no' => Input::get('matric_no'),

              'session' => Input::get('session'),

              'programme' => Input::get('programme'),

              'dob' => Input::get('dob'),
              
              'sog' => Input::get('sog'),
              
              'street' => Input::get('street'),
              
              'city' => Input::get('city'),

              'state' => Input::get('state'),

              'department' => Input::get('department'),

              'level' => Input::get('level'),

              'studentimg' => 'studentimg/avatar.png',

              'joined' => date('Y-m-d H:i:s'),
           
              'group' => 1

            ));
        if ($update){
            ?>
            <script>

				Swal.fire({
				  type: 'success',
				  title: 'Done! Some Moments PLS!',
				  showConfirmButton: false,
				})


                setTimeout(function(){
              window.location.href= "manage-students.php";
              }, 700);

              </script>
          <?php
        }else{
         echo "Unable to update" . error();
        }
      }
    }?>
                  <div class="row">
                    <?php include 'toupdate.php'?>
                    <div class="col-md-6">
                      <div class="form-group">
                      	<label>Firstname:</label>
                    	<input type="text" class="form-control form-control-user"  value="<?php echo $updatefirstname?>"name="firstname">
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                      	<label>Lastname:</label>
                    	<input type="text" class="form-control form-control-user"  value="<?php echo $updatelastname?>" name="lastname">
                      </div>
                    </div>

                </div>

    	        <div class="form-group">
                      	<label>Othernames:</label>
                    	<input type="text" class="form-control form-control-user" value="<?php echo $updateothernames?>"  name="othernames">
	            </div>

                <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                      	<label>E-mail:</label>
                    	<input type="email" class="form-control form-control-user"  value="<?php echo $updateemail?>" name="email" readonly>
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                      	<label>Phone:</label>
                    	<input type="text" class="form-control form-control-user" value="<?php echo $updatephone?>" name="phone">
                      </div>
                    </div>

                 </div>


                <div class="row">
                    
                    <div class="col-md-5">
                      <div class="form-group">
                      	<label>Department:</label>
                    	<input type="text" class="form-control form-control-user" value="<?php echo $updatedepartment?>" name="department" readonly>
                      </div>
                    </div>

                    <div class="col-md-5">
                      <div class="form-group">
                      	<label>Level:</label>
                    	<input type="text" class="form-control form-control-user" name="level" value="<?php echo $updatelevel?>" readonly>
                      </div>
                    </div>

                    <div class="col-md-2">
                      	<label>Programme:</label>
                      <div class="form-group">
                    	<input type="text" class="form-control form-control-userr" name="programme" value="<?php echo $updateprogramme?>" readonly> 
                      </div>
                    </div>

                 </div>

                 <div class="row">
                    
                    <div class="col-md-6">
                      <div class="form-group">
                      	<label>Registration No:</label>
                    	<input type="text" class="form-control form-control-user" value="<?php echo $updatematric_no?>" name="matric_no" readonly>
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                      	<label>Session:</label>
                    	<input type="text" class="form-control form-control-user" name="session" value="<?php echo $updatesession?>" placeholder="Session" readonly>
                      </div>
                    </div>

                 </div>

                 <div class="row">

                     <div class="col-md-12">
                        <div class="form-group">
                      	<label>Address:</label>
                                <input type="text" class="form-control form-control-user" value="<?php echo $updatestreet?>" name="street">
                         </div>
                     </div>
        
                       <div class="col-md-6">
                        	<div class="form-group">
                                <input type="text" class="form-control form-control-user" value="<?php echo $updatecity?>" name="city"> 
                            </div>
						</div>
                       
                       <div class="col-md-6">
                        	<div class="form-group">
                                <input type="text" class="form-control form-control-user" value="<?php echo $updatestate?>"  name="state">
                            </div>
						</div>

                    </div>



	           <div class="row">
                    
                    <div class="col-md-6">
                      <div class="form-group">
                      	<label>State Of Origin:</label>
                    	<input type="text" class="form-control form-control-user" name="sog" value="<?php echo $updatesog;?>" readonly>
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                      	<label>Date Of Birth:</label>
                    	<input type="date" class="form-control form-control-user" name="dob" value="<?php echo $updatedob?>" readonly>
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
                <a class="small" href="forgot-password.html">Forgot Password?</a>
              </div>

              <div class="text-center">
                <a class="small" href="login.html">Already have an account? Login!</a>
              </div>
                       
            </div> <!-- DIV CLASS ROW -->
    
    	</div>

	</div>

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
