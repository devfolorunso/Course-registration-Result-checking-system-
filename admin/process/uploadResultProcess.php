<?php
              if (isset($_FILES['resultsheet'])) {
                            $allowedFile =  array("csv", "CSV");
                            $upload = new Upload($_FILES['resultsheet'], "results/", 10000000000 ,$allowedFile);
                            $file = $upload->GetFile();
                        
                    //set temp name and then open
                    $handle = fopen($file, 'r');
                        //loop through the file and get contents via fgetcsv into an array

                while(($line=fgetcsv($handle, 1000, ",")) !== FALSE)
                {

                   $matric = $line[0];
                    $course_code = $line[1];
                     $course_unit = $line[2];
                      $score = $line[3];
                       $grade = $line[4];
                        $programme = input::get('programme');
                         $level = input::get('level');
                         $semester = input::get('semester');
                          $session = input::get('session');
    
                    $tbl18 = DB::getInstance()->query("INSERT INTO tblresults (matric_no, course_code, course_unit, score, grade, programme, level, semester,session) 
                      values ('" . $matric . "','" . $course_code . "','" . $course_unit . "','" . $score . "','" . $grade . "','" . $programme . "','" . $level . "','" . $semester . "','" . $session . "')");

                   }
                if($tbl18)
                {
               ?>      
             <div class="alert alert-info text-capitalize" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <span class="fa fa-volume-up"></span> RECORDS INSERTED SUCCESSFULLY!!
              </div>
               <?php
                }else
                  {
                ?>
                 <div class="alert alert-error text-capitalize" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <span class="sr-only"></span>EROR!!! RECORDS NOT INSERTED!!
                  </div>
              <?php
          } 
        }
?>
