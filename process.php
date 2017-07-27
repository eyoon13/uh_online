<?php
// process.php
//$errors;      // array to hold validation errors
//$data;      // array to pass back data

// validate the variables ======================================================
    // if any of these variables don't exist, add an error to our $errors array
    if (empty($_POST['email']))
        $errors['email'] = 'Email is required.';


// Check to see if name was filled out ======================================================

    if (! empty($_POST['sender'])){
    	$to     = 'AAAAA';
    } else{
    	$to     = 'DDDDD';
    }

// return a response ===========================================================

    // if there are any errors in our errors array, return a success boolean of false
    if ( ! empty($errors)) {

        // if there are items in our errors array, return those errors
        $data['success'] = false;
        $data['errors']  = $errors;
    } else {

        // if there are no errors process our form, then return a message

        // DO ALL YOUR FORM PROCESSING HERE
        // THIS CAN BE WHATEVER YOU WANT TO DO (LOGIN, SAVE, UPDATE, WHATEVER)
    	$question      = $_POST['info'];
    	$first_name    = $_POST['first_name'];
    	$last_name     = $_POST['last_name'];

    	// create the email
    	$email_body    = "Here is the message: \n $question";
    	$from          = $_POST['email']; // Servers email address.
    	$to            = "t6754177@gmail.com"; //Email of UH staff who will recieve all incoming submissions.
    	$subject = "Form submission";
    	$subject2 = "Copy of your form submission";
    	$message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $question;
    	$message2 = "Here is a copy of your message " . $first_name . "\n\n" . $question;

    	$headers = "From:" . $from;
        mail($to,$subject,$message,$headers);
        // show a message of success and provide a true success variable
        $data['success'] = true;
        $data['from']   = $_POST['email'];
        $data['to']  = $to;
        $data['message'] = 'Success';
    }

    // return all our data to an AJAX call
    echo json_encode($data);
?>
