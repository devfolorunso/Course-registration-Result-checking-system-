<?php 
  if(Input::exists()) {

  $sql = DB::getInstance()->query("SELECT *
   FROM tblresults where matric_no =? AND session =? AND semester=?", array(
      'matric_no' => $matric_no,
      'session' => input::get('session'),
      'semester' => input::get('semester')

   ));

        if ($sql->count())
        {
            echo $sql->first()->grade;
        }else{
          echo "No Records Found!!";
        }
      }

  ?>
