<?php require_once 'core/init.php';
	
	// USED TO CALL DATA OF STUDENT
	 $user = new User();
	 if ($user->isLoggedIn())
	 {

	  include 'data/studentsData.php';
		if ($user->hasPermission('admin'))
		{
			redirect::to('admin.php');
		}

	
	// DATA PASSED FROM HTTP REDIRECT.
	    $regcourse_id = input::get('regcourse_id');
  		 $session = input::get('session');
		  $semester = input::get('semester');

	
	// QUERY TO DELETE THE SELECTED COURSE
		$deleteCourse = DB::getInstance()->query("
		DELETE FROM tblstdtregcourse 
		 WHERE regcourse_id =?
		  AND matric_no =?",
	     array(
	     'regcourse_id' =>  $regcourse_id,
	     'matric_no' => $matric_no
		));

	if ($deleteCourse)
	{
	echo'<script>
		window.alert("SUCESS!!!");
	     window.location.href="remove-course.php?semester='.$semester.'&&session='.$session.'";
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