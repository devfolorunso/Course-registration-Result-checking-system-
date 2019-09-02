<?php require_once 'core/init.php';
  if (input::get('semester') || input::get('session'))
  {
    
  }else{
    redirect::to('print-result-i.php');
  }
    $user = new User();
   if ($user->isLoggedIn()) {


    include 'data/studentsData.php';
   if ($user->hasPermission('admin')) {
      # code...
      redirect::to('admin.php');
   }
    
$session= input::get('session');
$semester= input::get('semester');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
   <!-- Custom styles-->
  <link href="src/css/admin.min.css" rel="stylesheet">
  <link href="src/css/print.css" rel="stylesheet">

  <title>Print Result</title>
  <link rel="shortcut icon" href="src/media/favico.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <!-- Custom styles-->
</head>
<body>

<div class="container mt-5" style="border:1px solid #666;">

<!-- =====Mapoly TITLE AND LOGO ===== -->
  <div class="row py-2">
    <div class="col-md-3">
      <img src="src/media/mapoly.jpg" width="150" height="150" class="img-thumbnail">
    </div>
    <div class="col-md-9">
      <h1 class="text-center font-weight-bold mt-5" style="color:#000;">MOSHOOD ABIOLA POLYTECHNIC</h1>
    </div>
  </div>

  <hr>



<!-- =====STUDENT DETAILS AND PASSPORT ===== -->
  <div class="row py-2 border">
      <div class="col-4 text-justify ml-5 mt-2">
        <p>Name: <?php echo $firstname .' '. $lastname;?></p>
        <p>Matric No: <?php echo $matric_no;?></p>
        <p>Department: <?php echo $department;?></p>
        <p>Level: <?php echo $level . " " .$programme; ?> </p>
      </div>

      <div class="col-6 mr-5">
        <img src="<?php echo $studentimg;?>" width="150" height="150" class="rounded float-right img-thumbnail">
      </div>
  </div>


<!--=====COURSES LIST TABLE======-->
  <div class="row mt-3">

    <div class="col-md-1"></div>

    <div class="col-md-10">
     <h5 class="text-center"><b><u><b><u><?php echo $mysession . ' ' .$semester ?>  RESULT </u></b></h5>
     <div class="table-responsive">
      <table class="table" border="1">
      <?php
      $printResult = DB::getInstance()->query("SELECT *
       FROM tblresults where matric_no =? AND session =? AND semester=?", array(
          'matric_no' => $matric_no,
          'session' => $session,
          'semester' => $semester

       ));

 if(!$printResult->count())
 {
    
    echo '<div class="alert alert-warning text-capitalize" role="alert">
    <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
    <span class="sr-only">Error:</span><marquee>TABLE IS EMPTY!!!  TABLE IS EMPTY!! TABLE IS EMPTY!!TABLE IS EMPTY!!</marquee></div>';

        }else
        {
        ?>
           <thead class="text-center">
            <tr>
              <th>Course Code</th>
              <th>Course Unit</th>
              <th>Score</th>
              <th>Grade</th>
            </tr>
          </thead>
       <?php
        foreach($printResult->results() as $printResult)
        {
        ?>
          <tbody>
            <tr>

              <td style="text-align:center; text-transform:capitalize;">
                <?php echo $printResult->course_code;?>
              </td>


             <td style="text-align:center; text-transform: capitalize;">
                <?php echo $printResult->course_unit;?>
              </td>

             <td style="text-align:center; text-transform:capitalize;">
                <?php echo $printResult->score;?>
            </td>

            <td style="text-align:center; text-transform:capitalize;">
                <?php echo $printResult->grade;?>
            </td>

            </tr>
      <?php
      }

      } 
      }

      ?>
                  </tbody>
                </table>
                 </div>
      </div> <!-- Col md 6 -->

    <div class="col-md-1"></div>

  </div>
<!-- =====HOD SIGNATURE ===== -->

<!--   <hr width="50%" class="mt-5" style="background-color:#000000;">
  <p class="text-center">HOD'S SIGNATURE</p> -->

</div> <!--container -->


<form class="user text-center mt-1">
  <button class="btn btn-user btn-success" id="printPageButton" onClick="window.print();">Print <i class="fa fa-print"></i></button>
 </form>
<script type="text/javascript">
    function printPreView(reportCategory,reportType,transactionType,searchOption,customerRokaID,utilityCompany,fromDate,toDate,telcoName,bank){

var request = "selectedMenu="+reportCategory+"&loginStatus=success&criteria="+searchOption+"&customer="+customerRokaID+"&from="+fromDate+"&to="+toDate+"&nspTypes="+utilityCompany+"&trxTypes="+transactionType+"&options="+reportType+"&telcoTypes="+telcoName+"&bankTypes="+bank+"&printable=yes";

window.open ("report/showReport.action?"+request,null,"location=no,menubar=0,resizable=1,scrollbars=1,width=600,height=700");
}
</script>



</body>
</html>