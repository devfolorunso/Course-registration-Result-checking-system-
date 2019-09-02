<?php 
if (input::get('student_id')){

$ID = input::get('student_id');
$getStudents = DB::getInstance()->query("SELECT * FROM  tblstudents WHERE student_id =".$ID."");

if ($getStudents->count())
{

$modalstudent_id = escape($getStudents->first()->students_id);

$modalfirstname = escape($getStudents->first()->firstname);

$modallastname = escape($getStudents->first()->lastname);

$modalothernames = escape($getStudents->first()->othernames);

$modaldob = escape($getStudents->first()->dob);

$modalphone = escape($getStudents->first()->phone);

$modalsog = escape($getStudents->first()->sog);

$modalemail = escape($getStudents->first()->email);

$modalstreet = escape($getStudents->first()->street);

$modalcity = escape($getStudents->first()->city);

$modalstate = escape($getStudents->first()->state);

$modalprogramme = escape($getStudents->first()->programme);

$modalsession = escape($getStudents->first()->session);

$modalmatric_no = escape($getStudents->first()->matric_no);


$modaldepartment = escape($getStudents->first()->department);

$modaljoined = escape($getStudents->first()->joined);

$modalgroup = escape($getStudents->first()->group);

$modalstudentimg = escape($getStudents->first()->studentimg);

}

}
?>



