<?php
// process.php

	$errors = array();
	$data 	= array();

// validate the variables 
	// if any of the variables don't exist, add them to error array.

	if(empty($_POST['email']))
		$errors['email'] = 'Email Required';

	// return a response
		// if there are errors in our errors array, return a success boolean of false.
		if (! empty($errors)){

			// if there are errors in the array, return those errors
			$data['success'] = false;
			$data['errors']  = $errors;
		} else{

			// if there are no errors process our form, then return a message

			//PROCESSING GOES HERE
			//(LOGIN, SAVE, UPDATE)

			$data['success'] = true;
			$data['message'] = 'Success';
		}

	// return all our data to an AJAX call
	echo json_encode($data);

?>