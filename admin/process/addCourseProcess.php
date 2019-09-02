<?php
 if (Input::exists()) 
    {  
$addcourse = DB::getInstance()->insert('tblregcourse', array(
	
	'session' => input::get('session'),
	
	'level' => input::get('level'),

	'programme' => input::get('programme'),

	'semester' => input::get('semester'),
	
	'course_title' => input::get('course_title'),
	
	'course_unit' => input::get('course_unit'),
	
	'course_code' => input::get('course_code')
));
        if ($addcourse){

?>      
             <div class="alert alert-info text-capitalize" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <span class="fa fa-volume-up"></span> Courses Were Added Successfully!
              </div>
              <script>
              setTimeout(function(){
              window.location.href= "add-course.php";
              }, 700);
              </script>

<?php
            
            }
            else
            {
              echo ' <div class="alert alert-error text-capitalize" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <span class="fa fa-volume-up"></span>EROR!!! Something Went Wrong!!
              </div>';
            }
}
?>