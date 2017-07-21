<?php

  if(! empty($_POST['buttonB'])){
    $_courseID = $_POST['buttonB'];
  }else{$_courseID ="";}
  if(! empty($_POST['first_name'])){
    $_fName = $_POST['first_name'];
  }else{$_fName ="";}
  if(! empty($_POST['last_name'])){
    $_lName =$_POST['last_name'];
  }else{$_lName ="";}
  if(! empty($_POST['course_dropdown'])){
    	$val = $_POST['course_dropdown'];
  }else{
  	$_valueDropdown ="";
  	$val = 0;
  }

	class program{
		
		public $course_name;
		public $college;
		public $value;
		public $level;
		public $modal;

	}

	$course_array = array();

	$json_file = file_get_contents("programs.json");
	$array     = json_decode($json_file);
	foreach ($array as $key => $jsons) { // search each program
		$course = new program();
     foreach($jsons as $key => $value) { 
     	if($key==="name"){
     		$course->course_name = $value;
     	}
     	if($key==="college"){
     		$course->college = $value;
     	}
     	if($key==="value"){
     		$course->value = $value;
     	}
     	if($key==="level"){
     		$course->level = $value;
     	}
     	if($key==="modal"){
     		$course->modal = $value;
     	}     	
     // get each value within the program    
     }
     array_push($course_array, $course);
}

switch ($val){
  case 1:
    $programType = "Accounting";
    //create new array for table
    $CERT        = array();
    $AA          = array();
    $BA          = array();
    foreach($course_array as $program){
    if($program->level=="CERT"){
      $double_arr = array();
      $ar = $program->value;
      foreach($ar as $nums){
        if($nums == "1"){
          array_push($double_arr,  $program->course_name);
          array_push($double_arr,  $program->modal);
          array_push($CERT, $double_arr);
        }
      }
    }
    if($program->level=="AA"){
      $double_arr = array();
      $ar = $program->value;
      foreach($ar as $nums){
        if($nums == "1"){
          array_push($double_arr,  $program->course_name);
          array_push($double_arr,  $program->modal);
          array_push($AA, $double_arr);
        }
      }
    }
    if($program->level=="BA"){
      $double_arr = array();
      $ar = $program->value;
      foreach($ar as $nums){
        if($nums == "1"){
          array_push($double_arr,  $program->course_name);
          array_push($double_arr,  $program->modal);
          array_push($BA, $double_arr);
        }
      }
    }
  }
  break;

  case 3:
    $programType = "Business";
    //create new array for table
  $CERT        = array();
  $AA          = array();
  $BA          = array();
  foreach($course_array as $program){
    if($program->level=="CERT"){
      $double_arr = array();
      $ar = $program->value;
      foreach($ar as $nums){
        if($nums == "3"){
          array_push($double_arr,  $program->course_name);
          array_push($double_arr,  $program->modal);
          array_push($CERT, $double_arr);
        }
      }
    }
    if($program->level=="AA"){
      $double_arr = array();
      $ar = $program->value;
      foreach($ar as $nums){
        if($nums == "3"){
          array_push($double_arr,  $program->course_name);
          array_push($double_arr,  $program->modal);
          array_push($AA, $double_arr);
        }
      }
    }
    if($program->level=="BA"){
      $double_arr = array();
      $ar = $program->value;
      foreach($ar as $nums){
        if($nums == "3"){
          array_push($double_arr,  $program->course_name);
          array_push($double_arr,  $program->modal);
          array_push($BA, $double_arr);
        }
      }
    }
  }
    break;


  default:
    $programType = "All Programs";
  $CERT        = array();
  $AA          = array();
  $BA          = array();
  foreach($course_array as $program){
    if($program->level=="CERT"){
      $double_arr = array();
        array_push($double_arr,  $program->course_name);
        array_push($double_arr,  $program->modal);
        array_push($CERT, $double_arr);
    }
    if($program->level=="AA"){
      $double_arr = array();
        array_push($double_arr,  $program->course_name);
        array_push($double_arr,  $program->modal);
        array_push($AA, $double_arr);
    }
    if($program->level=="BA"){
      $double_arr = array();
        array_push($double_arr,  $program->course_name);
        array_push($double_arr,  $program->modal);
        array_push($BA, $double_arr);
    }
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Distance Learning at University of Hawaii</title>
    <script src="js/vendor/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->

  <link href="css/old-styles.css" rel="stylesheet">
  <link href="css/flat-ui.css" rel="stylesheet">
  <link href="css/styles-chasek.css" rel="stylesheet">

    <!-- Custom Fonts -->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body data-spy="scroll" data-target=".bd-sidenav-active">
  <header>
   <?php include_once('resources/templates/header.php'); ?>
  </header>

            <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="z-index: 1400;">
      <div class="modal-dialog modal-lg" role="document">
        <?php include('resources/modals/modalAcc.html'); ?>
      </div>
    </div>

            <!-- Modal2 -->
      <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="z-index: 2000;">
        <div class="modal-dialog modal-lg" role="document">
          <?php include('resources/modals/formA.html'); ?>
        </div>
      </div>

      <!-- Modal 3-->    
      <div class="modal fade" id="approvedModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="z-index: 2000;">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-body">
              <h1>Email Received</h1>
              <h2><button data-dismiss="modal" class="btn btn-danger">Dismiss</button></h2>
            </div>
          </div>
        </div>
      </div>
<!-- Acc CA-->    
      <div class="modal fade" id="acc_CA" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="z-index: 1600;">
        <div class="modal-dialog modal-lg" role="document">
          <?php include('resources/modals/modalCA.html'); ?>
        </div>
</div>

<!-- Acc CA-->    
      <div class="modal fade" id="ASHL" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="z-index: 1600;">
        <div class="modal-dialog modal-lg" role="document">
          <?php include('resources/modals/ASHL.html'); ?>
        </div>
</div>

<!-- Course Table -->

            <div class="wrapper-table">
                <h2 class"page-header">Distance Learning Programs Offered At The University of Hawaiʻi</h2>
                <h3>Certificate Programs</h3>
              <div class="table">
                <div class="row-table header">
                  <div class="cell">
                    Subject
                  </div>
                  <div class="cell">
                    Path to Graduation
                  </div>
                </div>
                <?php
  					$htmlOutput = "";
  					//building html table
  					foreach($CERT as $arr){
  						$name = $arr[0];
  						$modalA = $arr[1];
  						$htmlOutput .= '<div class="row-table"><div class="cell"><a href="#" data-toggle="modal" data-target="#'.$modalA.'" id="acc_modal">'.$name.'</a></div><div class="cell"><a href="AHBAAmericanStudies4.pdf" id="PDf">Sample 6 Year Plan</a></div></div>';
  					}
					print($htmlOutput);
  				?>
  			</div>
        <h3>Associate of Arts Degree Programs</h3>
              <div class="table">
                <div class="row-table header">
                  <div class="cell">
                    Subject
                  </div>
                  <div class="cell">
                    Path to Graduation
                  </div>
                </div>
                <?php
  					$htmlOutput = "";
  					//building html table
  					foreach($AA as $arr){
  						$name = $arr[0];
  						$modalA = $arr[1];
  						$htmlOutput .= '<div class="row-table"><div class="cell"><a href="#" data-toggle="modal" data-target="#'.$modalA.'" id="acc_modal">'.$name.'</a></div><div class="cell"><a href="AHBAAmericanStudies4.pdf" id="PDf">Sample 6 Year Plan</a></div></div>';
  					}
					print($htmlOutput);
  				?>
  			</div>
            <h3>Bachelor Degree Programs</h3>
              <div class="table">
                <div class="row-table header">
                  <div class="cell">
                    Subject
                  </div>
                  <div class="cell">
                    Path to Graduation
                  </div>
                </div>
                <?php
  					$htmlOutput = "";
  					//building html table
  					foreach($BA as $arr){
  						$name = $arr[0];
  						$modalA = $arr[1];
  						$htmlOutput .= '<div class="row-table"><div class="cell"><a href="#" data-toggle="modal" data-target="#'.$modalA.'" id="acc_modal">'.$name.'</a></div><div class="cell"><a href="AHBAAmericanStudies4.pdf" id="PDf">Sample 6 Year Plan</a></div></div>';
  					}
					print($htmlOutput);
  				?>
  			</div>
        </div>
  <div class="parallax p2" id="section-2">
    <hgroup id="form_group">
      <form id="info_form_1" method="post" action="process.php">
        <div class="col-md-12">
          <h1>Please fill out this form to receive more information</h1>
        </div>
        <div class="form-group col-md-6">
          <input type="text" name="f_name" value="<?php echo($_fName)?>" placeholder="First Name" class="form-control" />
        </div>
        <div class="form-group col-md-6">
          <input type="text" name="l_name" value="<?php echo($_lName)?>" placeholder="Last Name" class="form-control" />
        </div>
        <div class="form-group col-md-12" id="email-group">
          <input type="email" name="email" placeholder="Email" class="form-control" required>
        </div>
        <div class="form-group col-md-12">
          <textarea class="form-control" name="question" id="exampleTextarea" rows="3" placeholder="Have a General Question? Ask it here!"></textarea>
        </div>
          <input type="hidden" name="campus_mail" value="">
        <h2 class="col-md-12">
          <button type="submit" name="gen_info" form="info_form_1" id="gen_info" va class="btn btn-primary">Submit</button>
        </h2>
      </form>
    <hgroup>
  </div>
        <?php include_once('resources/templates/footer.php'); ?>
  </body>

      <!-- Include all compiled plugins (below), or include individual files as needed -->
      <script src="js/vendor/jquery.min.js"></script>
    <script src="js/vendor/video.js"></script>
    <script src="js/flat-ui.min.js"></script>
    <script src="docs/assets/js/application.js"></script>
    <script src="js/magic.js"></script>
    <script src="js/program-select.js"></script>
    <script src="js/set-height.js"></script>
    <script>
      videojs.options.flash.swf = "dist/js/vendors/video-js.swf"
    </script>
</html>