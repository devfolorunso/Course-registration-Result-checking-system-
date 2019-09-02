<?php 
require_once 'core/init.php';


if(!$username = Input::get('user')){
Redirect::to('index.php');
}else{
		$user = new User($username);
		if (!$user->exists()) {
			# code...
			Redirect::to(404);
		}else{
			$data = $user->data();
		}
?>
<h3><?php echo escape($data->username);?></h3>
<p>1stname: <?php echo escape($data->firstname);?></p>

<?php
}
?>
