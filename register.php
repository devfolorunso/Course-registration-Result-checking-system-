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

            $validate = new Validate();
            $validation = $validate->check($_POST, array(
                'matric_no' => array(
                  'required' => true,
                  'min'=>2,
                  'max'=>50,
                  'unique' => 'tblstudents' 
                ),


	          'firstname' =>array(
              'required' => true,
	            'min'=>2,
	            'max'=>50
	          ),


	          'lastname' =>array(
              'required' => true,
	            'min'=>2,
	            'max'=>50
	          ),


	          'othernames' =>array(
              'required' => true,
	            'min'=>2,
	            'max'=>50
	          ),

	         'phone' =>array(
	           'required' => true,
	            'min'=>2,
	            'max'=>50
            ),

	         'department' =>array(
	            'required' => true,
              'min'=>2,
	            'max'=>50
	          ),

	        'level' =>array( 
              'required' => true,
	            'min'=>2,
	            'max'=>50
	          ),

	        'session' =>array(
	            'required' => true,
              'min'=>2,
	            'max'=>50
	          ),

	       'street' =>array(
          'required' => true,
	            'min'=>2,
	            'max'=>50
	          ),

	       	'city' =>array(
            'required' => true,
	            'min'=>2,
	            'max'=>50
	          ),

	       'state' =>array(
          'required' => true,
	            'min'=>2,
	            'max'=>50
	          ),

	       	'sog' =>array(
            'required' => true,
	            'min'=>2,
	            'max'=>50
	          ),

	       	'dob' =>array(
            'required' => true,
	            'min'=>2,
	            'max'=>50
	          )

      ));
            if ($validation->passed()) {
          $user = new User();
          $salt = Hash::salt(32);

          try{

            $user->Create(array(
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

              'institution' => Input::get('institution'),

              'studentimg' => 'studentimg/avatar.png',

              'joined' => date('Y-m-d H:i:s'),
           
              'group' => 1

            ));?>
            <script>

				Swal.fire({
				  type: 'success',
				  title: 'Done! Some Moments PLS!',
				  showConfirmButton: false,
				})


                setTimeout(function(){
              window.location.href= "login.php";
              }, 700);

              </script>
          
          <?php }catch(Exception $e){
            die($e->getMessage());
          }
          Session::flash('login', 'Your Matric No Is Your Password!');
        }else{
          
          foreach ($validation->errors() as $error) {?>
  <div class="alert alert-danger" role="alert">
  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
  <span class="sr-only">Error:</span>
  <?php echo $error;?>
   </div><?php
          }
        }
    }
}
?>
          <div class="row">
              
              <div class="col-md-6">
                <div class="form-group">
                	<label>Firstname:</label>
              	<input type="text" class="form-control form-control-user" name="firstname" placeholder="Firstname">
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                	<label>Lastname:</label>
              	<input type="text" class="form-control form-control-user" name="lastname" placeholder="Lastname">
                </div>
              </div>

          </div>

        <div class="form-group">
                	<label>Othernames:</label>
              	<input type="text" class="form-control form-control-user" name="othernames" placeholder="Othernames">
        </div>

      <div class="row">
          
          <div class="col-md-6">
            <div class="form-group">
            	<label>E-mail:</label>
          	<input type="email" class="form-control form-control-user" name="email" placeholder="Email">
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
            	<label>Phone:</label>
          	<input type="text" class="form-control form-control-user" name="phone" placeholder="Phone">
            </div>
          </div>

       </div>


        <div class="row">
            
            <div class="col-md-5">
              <div class="form-group">
              	<label>Department:</label>
            	<input type="text" class="form-control form-control-user" name="department" placeholder="Department">
              </div>
            </div>

            <div class="col-md-5">
              <div class="form-group select">
              	<label>Level:</label>
                <select  name="level" class="form-control">
                  <option value="100 L"> 100 Level</option>
                  <option value="200 L"> 200 Level</option>
                  <option value="300 L"> 300 Level</option>
                  <option value="400 L"> 400 Level</option>
                </select>
              </div>
            </div>

            <div class="col-md-2">
              	<label>Programme:</label>
              <div class="form-group">
            	<input type="radio" style="width:20px; height: 20px;" name="programme"  value="Full Time"/> Full Time
            	<input type="radio" style="width:20px; height: 20px;" name="programme" value="Part Time"/>Part Time
              </div>
            </div>

         </div>

         <div class="row">
            <div class="col-md-6">
              <div class="form-group">
              	<label>Registration No:</label>
            	<input type="text" class="form-control form-control-user" name="matric_no" placeholder="Matric No">
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
              	<label>Session:</label>
            	<input type="text" class="form-control form-control-user" name="session" placeholder="Session">
              </div>
            </div>
         </div>

         <div class="row">
           <div class="col-md-12">
              <label>Institution:</label>
                <div class="form-group">
                  <input type="radio" style="width:20px; height: 20px;" name="institution"  value="university"/> University
                  <input type="radio" style="width:20px; height: 20px;" name="institution" value="polytechnic"/> Polytechnic
                  <input type="radio" style="width:20px; height: 20px;" name="institution" value="college of education"/> College Of Education
                </div>
            </div>
         </div>

         <div class="row">

       <div class="col-md-12">
          <div class="form-group">
        	<label>Address:</label>
                  <input type="text" class="form-control form-control-user" name="street"  placeholder="Street">
           </div>
       </div>

       <div class="col-md-6">
        	 <div class="form-group">
                <input type="text" class="form-control form-control-user" name="city"  placeholder="City"> 
            </div>
  			</div>
               
        <div class="col-md-6">
          <div class="form-group">
              <input type="text" class="form-control form-control-user"  name="state"  placeholder="State">
          </div>
        </div>

            </div>



     <div class="row">
            
            <div class="col-md-6">
              <div class="form-group">
              	<label>State Of Origin:</label>
            	<input type="text" class="form-control form-control-user" name="sog" placeholder="State Of Origin">
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
              	<label>Date Of Birth:</label>
            	<input type="date" class="form-control form-control-user" name="dob" placeholder="Date Of Birth">
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
        <a class="small" href="login.php">Already have an account? Login!</a>
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
