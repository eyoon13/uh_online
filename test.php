<?php
	
	function test_input($data) {
  	    $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
  		return $data;
	}

if(isset($_POST['submit'])){

	// validate email
	$email = test_input($_POST["email"]);
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      die("invalid email");
    }

    $to = "t6754177@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = test_input($_POST['f_name']);
    $last_name = test_input($_POST['l_name']);
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['question'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['question'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    //mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo($to."</br>".$from."</br>".$message."</br>");
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    // You cannot use header and echo together. It's one or the other.
    }

?>