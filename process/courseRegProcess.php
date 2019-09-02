<?php
   $courseenrol = DB::getInstance()->query("SELECT * FROM tblregcourse WHERE course_code =?", array(
            'course_code' => $code

          ));
   
        if ($courseenrol->count())
        {
            $stdCourseInsert = DB::getInstance()->insert('tblstdtregcourse', array(

          			'course_title' => $courseenrol->first()->course_title,
           			'course_code' =>	$courseenrol->first()->course_code,
           			'course_code' =>	$courseenrol->first()->course_code,
      					'course_unit' => $courseenrol->first()->course_unit,
      					'programme' => $programme ,
                'session' => input::get('session'),
                'semester' => input::get('semester'),
      					'matric_no' => $matric_no,
      					'level' => $level
            ));
            if ($stdCourseInsert) {
               echo'
                <script>
                 window.alert("SUCESS!!");
                 window.location.href="view-courses.php?semester='.input::get('semester').'&&session='.input::get('session').'";
                </script>
              ';
            }
          
        }
?>