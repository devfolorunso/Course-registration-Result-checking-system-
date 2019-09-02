  <?php

          $sumUnit=  DB::getInstance()->query("
            SELECT SUM(course_unit) FROM tblstdtregcourse
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
        
          if (!$sumUnit->count())
          {      
            echo "TEMP_ERROR!"; 
          }
          else
          {
           foreach ($sumUnit->results() as $sumUnit)
           {
           
            // Serialize Converts Object SumUnit to string
            $courseUnit = serialize($sumUnit);;
              
            // echo $courseUnit

            // Preg Match Picks All Numeric Values
            preg_match_all('!\d+!', $courseUnit, $newUnit);
           
            // print_r($newUnit);

            // Displays Numric Value on the indexe 0,4
            echo $newUnit[0][4];
           

           }
          }
      ?>    