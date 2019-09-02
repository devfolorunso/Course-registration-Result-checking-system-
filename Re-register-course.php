<?php require_once 'core/init.php';
 
        
        $user = new User();
        if ($user->isLoggedIn()) {


        include 'data/studentsData.php';
        
         if ($user->hasPermission('admin'))
         {   
            redirect::to('admin.php');
         }
    
	$session = input::get('session');
	$semester = input::get('semester');

	$re_register = DB::getInstance()->query("DELETE From tblstdtregcourse 
		WHERE matric_no =?
	    AND level =?
	    AND semester =? 
	    AND programme =?
	    AND session = ?",
	     array(
	    'matric_no' => $matric_no,
	    'level' => $level,
	    'semester' => input::get('semester'),
	    'programme' => $programme,
	    'session' => input::get('session')
	  ));

	if ($re_register)
	{
		echo'<script>
	     window.location.href="course-registration.php?semester='.$semester.'&&session='.$session.'";
	    </script>';
	}
	else
	{
	 	echo'<script>
	     window.alert("ACTION FAILED! PLS TRY AGAIN");
	    </script>';
	}
}
?>