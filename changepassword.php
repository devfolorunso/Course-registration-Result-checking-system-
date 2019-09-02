<?php
require_once 'core/init.php';
$user = new User();


if (!$user->isLoggedIn()) {
	# code...
	Redirect::to('index.php');
}

if (Input::exists()) {

	if (Token::check(Input::get('token'))) {

		$validate = new Validate();
		$validation = $validate->check($_POST, array(

			'password_current' => array(
				'required' => true,
				'min' => 5
			),

			'password_new' => array(
				'required' => true,
				'min' => 5

			),

			'password_new_again' => array(
				'required' => true,
				'min' => 5,
				'matches'=> 'password_new'
			)

		));

		if ($validation->passed()) {
			
				if (Hash::make(Input::get('password_current'), $user->data()->salt) !== $user->data()->password) {
						
						echo 'Your current pass =key is wrong';


					}else{

						$salt = Hash::salt(32);

						$user ->update(array(
							'password' => Hash::make(Input::get('password_new'), $salt),
							'salt' => $salt
						));

						Session::flash('home', 'Your password has been changed');
						Redirect::to('index.php');

					}

		}else{
			foreach ($validation->errors() as $error){
				# code...

				echo $error;
			}
		}



	}

}
?>

<form action="" method="post">
	<input type="password" placeholder="CURRENT PASS" name="password_current" id="password_current">

	<input type="password" placeholder="NEW!!! PASS" name="password_new" id="password_new">

	<input type="password" placeholder="NEW!!! PASSAGAIN AGAIN!:" name="password_new_again" id="password_new_again">

	<input type="submit" value="CHange">

	<input type="hidden" name="token" value="<?php echo Token::generate(); ?>">


</form>