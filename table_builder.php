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

  if(! empty($_POST['areaOfStudy'])){
    	$val = $_POST['areaOfStudy'];
  }else{
  	$_valueDropdown ="";
  	$val = 0;
  }
  
  if($_POST['credential'] != ""){
      $cred = $_POST['credential'];
      if($_POST['areaOfStudy']!= ""){
        $val = $_POST['areaOfStudy'];
      }else{ $val = 0;}
  }else{$cred = "";};

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
    //create new array for table for Accounting
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

  case 2:
    $programType = "Business";
    //create new array for table Business
  $CERT        = array();
  $AA          = array();
  $BA          = array();
  foreach($course_array as $program){
    if($program->level=="CERT"){
      $double_arr = array();
      $ar = $program->value;
      foreach($ar as $nums){
        if($nums == "2"){
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
        if($nums == "2"){
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
        if($nums == "2"){
          array_push($double_arr,  $program->course_name);
          array_push($double_arr,  $program->modal);
          array_push($BA, $double_arr);
        }
      }
    }
  }
    break;

  case 3:
    $programType = "Disability Studies";
    //create new array for table Disability Studies
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

  case 4:
    $programType = "Education";
    //create new array for table Education
  $CERT        = array();
  $AA          = array();
  $BA          = array();
  foreach($course_array as $program){
    if($program->level=="CERT"){
      $double_arr = array();
      $ar = $program->value;
      foreach($ar as $nums){
        if($nums == "4"){
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
        if($nums == "4"){
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
        if($nums == "4"){
          array_push($double_arr,  $program->course_name);
          array_push($double_arr,  $program->modal);
          array_push($BA, $double_arr);
        }
      }
    }
  }
    break;

  case 5:
    $programType = "Indigenous Language";
    //create new array for table Indigenous Language and Culture Education
  $CERT        = array();
  $AA          = array();
  $BA          = array();
  foreach($course_array as $program){
    if($program->level=="CERT"){
      $double_arr = array();
      $ar = $program->value;
      foreach($ar as $nums){
        if($nums == "5"){
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
        if($nums == "5"){
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
        if($nums == "5"){
          array_push($double_arr,  $program->course_name);
          array_push($double_arr,  $program->modal);
          array_push($BA, $double_arr);
        }
      }
    }
  }
    break;

  case 6:
    $programType = "Interdisciplinary Studies";
    //create new array for table Interdisciplinary Studies
  $CERT        = array();
  $AA          = array();
  $BA          = array();
  foreach($course_array as $program){
    if($program->level=="CERT"){
      $double_arr = array();
      $ar = $program->value;
      foreach($ar as $nums){
        if($nums == "6"){
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
        if($nums == "6"){
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
        if($nums == "6"){
          array_push($double_arr,  $program->course_name);
          array_push($double_arr,  $program->modal);
          array_push($BA, $double_arr);
        }
      }
    }
  }
    break;

  case 7:
    $programType = "Kinesiology and Rehabilitation Science";
    //create new array for table Kinesiology and Rehabilitation Science
  $CERT        = array();
  $AA          = array();
  $BA          = array();
  foreach($course_array as $program){
    if($program->level=="CERT"){
      $double_arr = array();
      $ar = $program->value;
      foreach($ar as $nums){
        if($nums == "7"){
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
        if($nums == "7"){
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
        if($nums == "7"){
          array_push($double_arr,  $program->course_name);
          array_push($double_arr,  $program->modal);
          array_push($BA, $double_arr);
        }
      }
    }
  }
    break;

  case 8:
    $programType = "Liberal Arts";
    //create new array for table Liberal Arts
  $CERT        = array();
  $AA          = array();
  $BA          = array();
  foreach($course_array as $program){
    if($program->level=="CERT"){
      $double_arr = array();
      $ar = $program->value;
      foreach($ar as $nums){
        if($nums == "8"){
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
        if($nums == "8"){
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
        if($nums == "8"){
          array_push($double_arr,  $program->course_name);
          array_push($double_arr,  $program->modal);
          array_push($BA, $double_arr);
        }
      }
    }
  }
    break;

  case 9:
    $programType = "Library and Information Sciences";
    //create new array for table Library and Information Sciences
  $CERT        = array();
  $AA          = array();
  $BA          = array();
  foreach($course_array as $program){
    if($program->level=="CERT"){
      $double_arr = array();
      $ar = $program->value;
      foreach($ar as $nums){
        if($nums == "9"){
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
        if($nums == "9"){
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
        if($nums == "9"){
          array_push($double_arr,  $program->course_name);
          array_push($double_arr,  $program->modal);
          array_push($BA, $double_arr);
        }
      }
    }
  }
    break;

  case 10:
    $programType = "Management";
    //create new array for table Management
  $CERT        = array();
  $AA          = array();
  $BA          = array();
  foreach($course_array as $program){
    if($program->level=="CERT"){
      $double_arr = array();
      $ar = $program->value;
      foreach($ar as $nums){
        if($nums == "10"){
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
        if($nums == "10"){
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
        if($nums == "10"){
          array_push($double_arr,  $program->course_name);
          array_push($double_arr,  $program->modal);
          array_push($BA, $double_arr);
        }
      }
    }
  }
    break;

  case 11:
    $programType = "Nursing";
    //create new array for table Nursing
  $CERT        = array();
  $AA          = array();
  $BA          = array();
  foreach($course_array as $program){
    if($program->level=="CERT"){
      $double_arr = array();
      $ar = $program->value;
      foreach($ar as $nums){
        if($nums == "11"){
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
        if($nums == "11"){
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
        if($nums == "11"){
          array_push($double_arr,  $program->course_name);
          array_push($double_arr,  $program->modal);
          array_push($BA, $double_arr);
        }
      }
    }
  }
    break;

  case 12:
    $programType = "Political Science";
    //create new array for table Political Science
  $CERT        = array();
  $AA          = array();
  $BA          = array();
  foreach($course_array as $program){
    if($program->level=="CERT"){
      $double_arr = array();
      $ar = $program->value;
      foreach($ar as $nums){
        if($nums == "12"){
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
        if($nums == "12"){
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
        if($nums == "12"){
          array_push($double_arr,  $program->course_name);
          array_push($double_arr,  $program->modal);
          array_push($BA, $double_arr);
        }
      }
    }
  }
    break;

  case 13:
    $programType = "Psychology";
    //create new array for table Psychology
  $CERT        = array();
  $AA          = array();
  $BA          = array();
  foreach($course_array as $program){
    if($program->level=="CERT"){
      $double_arr = array();
      $ar = $program->value;
      foreach($ar as $nums){
        if($nums == "13"){
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
        if($nums == "13"){
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
        if($nums == "13"){
          array_push($double_arr,  $program->course_name);
          array_push($double_arr,  $program->modal);
          array_push($BA, $double_arr);
        }
      }
    }
  }
    break;

  case 14:
    $programType = "Public Administration";
    //create new array for table Public Administration
  $CERT        = array();
  $AA          = array();
  $BA          = array();
  foreach($course_array as $program){
    if($program->level=="CERT"){
      $double_arr = array();
      $ar = $program->value;
      foreach($ar as $nums){
        if($nums == "14"){
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
        if($nums == "14"){
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
        if($nums == "14"){
          array_push($double_arr,  $program->course_name);
          array_push($double_arr,  $program->modal);
          array_push($BA, $double_arr);
        }
      }
    }
  }
    break;

  case 15:
    $programType = "RMI";
    //create new array for table Risk Management and Insurance (RMI)
  $CERT        = array();
  $AA          = array();
  $BA          = array();
  foreach($course_array as $program){
    if($program->level=="CERT"){
      $double_arr = array();
      $ar = $program->value;
      foreach($ar as $nums){
        if($nums == "15"){
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
        if($nums == "15"){
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
        if($nums == "15"){
          array_push($double_arr,  $program->course_name);
          array_push($double_arr,  $program->modal);
          array_push($BA, $double_arr);
        }
      }
    }
  }
    break;

  case 16:
    $programType = "Social Work";
    //create new array for table Social Work
  $CERT        = array();
  $AA          = array();
  $BA          = array();
  foreach($course_array as $program){
    if($program->level=="CERT"){
      $double_arr = array();
      $ar = $program->value;
      foreach($ar as $nums){
        if($nums == "16"){
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
        if($nums == "16"){
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
        if($nums == "16"){
          array_push($double_arr,  $program->course_name);
          array_push($double_arr,  $program->modal);
          array_push($BA, $double_arr);
        }
      }
    }
  }
    break;

  case 17:
    $programType = "SAAS";
    //create new array for table Substance Abuse and Addictions Studies
  $CERT        = array();
  $AA          = array();
  $BA          = array();
  foreach($course_array as $program){
    if($program->level=="CERT"){
      $double_arr = array();
      $ar = $program->value;
      foreach($ar as $nums){
        if($nums == "17"){
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
        if($nums == "17"){
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
        if($nums == "17"){
          array_push($double_arr,  $program->course_name);
          array_push($double_arr,  $program->modal);
          array_push($BA, $double_arr);
        }
      }
    }
  }
    break;

  case 18:
    $programType = "Writing";
    //create new array for table Writing
  $CERT        = array();
  $AA          = array();
  $BA          = array();
  foreach($course_array as $program){
    if($program->level=="CERT"){
      $double_arr = array();
      $ar = $program->value;
      foreach($ar as $nums){
        if($nums == "18"){
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
        if($nums == "18"){
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
        if($nums == "18"){
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
  $PBA         = array();
  $GRAD_CERT   = array();
  $MA          = array();
  $PHD         = array();

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
    if($program->level=="PBA"){
      $double_arr = array();
        array_push($double_arr,  $program->course_name);
        array_push($double_arr,  $program->modal);
        array_push($PBA, $double_arr);
    }
    if($program->level=="GRAD_CERT"){
      $double_arr = array();
        array_push($double_arr,  $program->course_name);
        array_push($double_arr,  $program->modal);
        array_push($GRAD_CERT, $double_arr);
    }
    if($program->level=="MA"){
      $double_arr = array();
        array_push($double_arr,  $program->course_name);
        array_push($double_arr,  $program->modal);
        array_push($MA, $double_arr);
    }
    if($program->level=="PHD"){
      $double_arr = array();
        array_push($double_arr,  $program->course_name);
        array_push($double_arr,  $program->modal);
        array_push($PHD, $double_arr);
    }
  }
}

switch ($cred) {
  case 'CERT':
    $AA = array();
    $BA = array();
    break;
  
  case 'AA':
    $CERT = array();
    $BA   = array();
    break;

  case 'BA':
    $AA   = array();
    $CERT = array();
    break;

  default:
    break;
}

?>