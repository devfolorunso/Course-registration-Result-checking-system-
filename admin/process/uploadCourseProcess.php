                       <?php
              if (isset($_FILES['courselist'])) {
                            $allowedFile =  array("csv", "CSV");
                            $upload = new Upload($_FILES['courselist'], "courses/", 10000000000 ,$allowedFile);
                            $file = $upload->GetFile();
                        
                    //set temp name and then open
                    $handle = fopen($file, 'r');
                        //loop through the file and get contents via fgetcsv into an array

                while(($line=fgetcsv($handle, 1000, ",")) !== FALSE)
                {

                   $course_title = $line[0];
                    $course_unit = $line[1];
                     $course_code = $line[2];
                      $programme = input::get('programme');
                       $level = input::get('level');
                         $semester = input::get('semester');
                          $session = input::get('session');
                    $tbl18 = DB::getInstance()->query("INSERT INTO tblregcourse (course_title, course_code, course_unit, programme, level, semester,session) 
                      values ('" . $course_title . "','" . $course_code . "','" . $course_unit . "','" . $programme . "','" . $level . "','" . $semester . "','" . $session . "')");

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
