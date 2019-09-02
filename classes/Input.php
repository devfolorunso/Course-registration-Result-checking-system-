<?php 
class Input{
	public static function exists($type= 'post'){
		switch($type){
			case 'post';
			return (!empty($_POST)) ? true : false;
			break;
			case 'get';
			return (!empty($_GET)) ? true : false;
			break;
			case 'file';
			return (!empty($_FILE)) ? true : false;
			break;

			default;
				return false;
			break;
		}
	}

	public static function get($item){
		if (isset($_POST[$item])) {

			return $_POST[$item];

		}else if (isset($_GET[$item])) {
			
			return $_GET[$item];
		
		}else if (isset($_FILE[$item])) {
			
			return $_FILE[$item];
		
		}

		return '';
	}
}
?>   