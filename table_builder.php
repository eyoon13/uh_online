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