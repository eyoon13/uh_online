<?php

if(isset($_POST['gen_info'])){
	$name = "Name: ".$_POST['first_name']." ".$_POST['last_name'];
	$from =  "Email: ".$_POST['email'];
	$cID = "Program: ".$_POST['course_code'];
	echo($name);
	echo($from);
	echo($cID);
}
if(isset($_POST['A'])){
	$name = "Name: ".$_POST['first_name']." ".$_POST['last_name'];
	$from =  "Email: ".$_POST['email'];
	echo($name);
	echo($from);
}

?>
