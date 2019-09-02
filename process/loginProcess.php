<?php
if (Session::exists('login')) {
  echo '<h1 class="h4 text-gray-900 mb-4"> Welcome Back! ' . Session::flash('login') .'</h1>';       
  }   

  if (Input::exists())
  {
  if (Token::check(Input::get('token')))
  {
    
    $validate = new  Validate();
     $validation = $validate->check($_POST, array(
      'username' => array('required' => true),
      'password' => array('required' => true)
     ));

     if ($validation->passed())
     {
      $user = new User();

      $remember = (Input::get('remember')==='on') ? true : false;
      $login = $user->login(Input::get('username'),  Input::get('password'), $remember);


        if($login){

          Session::flash('complete', 'Welcome! Kindly Complete Your Profile');

              if ($user->hasPermission('admin'))
                        {

                            redirect::to('admin/index.php');
                        }
                        else
                        {
                            redirect::to('complete-profile.php');

                        }        

          }
          else
          {
          echo '<div class="alert alert-danger text-center" role="alert">
            <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
            <span class="sr-only">Error:</span>
          Sorry, Login Failed!! </div>';
        }

     }else
     {
      foreach ($validation->errors() as $error)
      {
          echo'<div class="alert alert-danger text-capitalize text-center" role="alert">
  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
  <span class="sr-only">Error:</span>' .
  $error . '</div>';
        
      }
     }

  }
}
?>