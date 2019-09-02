<?php 


    $getStudents = DB::getInstance()->get('tblstudents', array('students_id', '=', $students_id));

    if (!$getStudents->count()) {

    echo "Empty Table!!";               

    }
    else
    {

$updatestudent_id = escape($getStudents->first()->students_id);

$updatefirstname = escape($getStudents->first()->firstname);

$updatelastname = escape($getStudents->first()->lastname);

$updateothernames = escape($getStudents->first()->othernames);

$updatedob = escape($getStudents->first()->dob);

$updatephone = escape($getStudents->first()->phone);

$updatesog = escape($getStudents->first()->sog);

$updateemail = escape($getStudents->first()->email);

$updatestreet = escape($getStudents->first()->street);

$updatecity = escape($getStudents->first()->city);

$updatestate = escape($getStudents->first()->state);

$updateprogramme = escape($getStudents->first()->programme);

$updatesession = escape($getStudents->first()->session);

$updatematric_no = escape($getStudents->first()->matric_no);


$updatedepartment = escape($getStudents->first()->department);

$updatejoined = escape($getStudents->first()->joined);

$updategroup = escape($getStudents->first()->group);

$updatestudentimg = escape($getStudents->first()->studentimg);

  }
?>
