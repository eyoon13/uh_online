<?php include_once('table_builder.php');

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
  <?php include_once('resources/modals.html'); ?>

<!-- Course Table -->

            <div class="wrapper-table">
                <h2 class"page-header">Distance Learning Programs Offered At The University of Hawaiʻi</h2>
                <h3>Certificate Programs</h3>
                <?php
  					$htmlOutput = '<div class="table"><div class="row-table header"><div class="cell">Subject</div><div class="cell tab">Standard</div><div class="cell tab">Accelerated</div></div>';
            //building html table
  					foreach($CERT as $arr){
  						$name = $arr[0];
  						$modalA = $arr[1];
  						$htmlOutput .= '<div class="row-table"><div class="cell"><a href="#" data-toggle="modal" data-target="#'.$modalA.'" id="acc_modal">'.$name.'</a></div><div class="cell tab"><a href="AHBAAmericanStudies4.pdf" id="PDf">Sample 6 Year Plan</a></div><div class="cell tab"><a href="AHBAAmericanStudies4.pdf" id="PDf">Sample 4 Year Plan</a></div></div>';
            }
					print($htmlOutput);
  				?>
  			</div>
        <h3>Associate of Arts Degree Programs</h3>
                <?php
  					$htmlOutput = '<div class="table"><div class="row-table header"><div class="cell">Subject</div><div class="cell tab">Standard</div><div class="cell tab">Accelerated</div></div>';
            //building html table
  					foreach($AA as $arr){
  						$name = $arr[0];
  						$modalA = $arr[1];
  						$htmlOutput .= '<div class="row-table"><div class="cell"><a href="#" data-toggle="modal" data-target="#'.$modalA.'" id="acc_modal">'.$name.'</a></div><div class="cell tab"><a href="AHBAAmericanStudies4.pdf" id="PDf">Sample 6 Year Plan</a></div><div class="cell tab"><a href="AHBAAmericanStudies4.pdf" id="PDf">Sample 4 Year Plan</a></div></div>';
            }
					print($htmlOutput);
  				?>
  			</div>
            <h3>Bachelor Degree Programs</h3>
                <?php
  					$htmlOutput = '<div class="table"><div class="row-table header"><div class="cell">Subject</div><div class="cell tab">Standard</div><div class="cell tab">Accelerated</div></div>';
            //building html table
  					foreach($BA as $arr){
  						$name = $arr[0];
  						$modalA = $arr[1];
  						$htmlOutput .= '<div class="row-table"><div class="cell"><a href="#" data-toggle="modal" data-target="#'.$modalA.'" id="acc_modal">'.$name.'</a></div><div class="cell tab"><a href="AHBAAmericanStudies4.pdf" id="PDf">Sample 6 Year Plan</a></div><div class="cell tab"><a href="AHBAAmericanStudies4.pdf" id="PDf">Sample 4 Year Plan</a></div></div>';
            }
					print($htmlOutput);
  				?>
  			</div>
        <h3>Post-Baccalaureate Degree Programs</h3>
                <?php
            $htmlOutput = '<div class="table"><div class="row-table header"><div class="cell">Subject</div><div class="cell tab">Standard</div><div class="cell tab">Accelerated</div></div>';
            //building html table
            foreach($PBA as $arr){
              $name = $arr[0];
              $modalA = $arr[1];
              $htmlOutput .= '<div class="row-table"><div class="cell"><a href="#" data-toggle="modal" data-target="#'.$modalA.'" id="acc_modal">'.$name.'</a></div><div class="cell tab"><a href="AHBAAmericanStudies4.pdf" id="PDf">Sample 6 Year Plan</a></div><div class="cell tab"><a href="AHBAAmericanStudies4.pdf" id="PDf">Sample 4 Year Plan</a></div></div>';
            }
          print($htmlOutput);
          ?>
        </div>
        <h3>Graduate Certificate Degree Programs</h3>
                <?php
            $htmlOutput = '<div class="table"><div class="row-table header"><div class="cell">Subject</div><div class="cell tab">Standard</div><div class="cell tab">Accelerated</div></div>';
            //building html table
            foreach($GRAD_CERT as $arr){
              $name = $arr[0];
              $modalA = $arr[1];
              $htmlOutput .= '<div class="row-table"><div class="cell"><a href="#" data-toggle="modal" data-target="#'.$modalA.'" id="acc_modal">'.$name.'</a></div><div class="cell tab"><a href="AHBAAmericanStudies4.pdf" id="PDf">Sample 6 Year Plan</a></div><div class="cell tab"><a href="AHBAAmericanStudies4.pdf" id="PDf">Sample 4 Year Plan</a></div></div>';
            }
          print($htmlOutput);
          ?>
        </div>
        <h3>Master Degree Programs</h3>
                <?php
            $htmlOutput = '<div class="table"><div class="row-table header"><div class="cell">Subject</div><div class="cell tab">Standard</div><div class="cell tab">Accelerated</div></div>';
            //building html table
            foreach($MA as $arr){
              $name = $arr[0];
              $modalA = $arr[1];
              $htmlOutput .= '<div class="row-table"><div class="cell"><a href="#" data-toggle="modal" data-target="#'.$modalA.'" id="acc_modal">'.$name.'</a></div><div class="cell tab"><a href="AHBAAmericanStudies4.pdf" id="PDf">Sample 6 Year Plan</a></div><div class="cell tab"><a href="AHBAAmericanStudies4.pdf" id="PDf">Sample 4 Year Plan</a></div></div>';
            }
          print($htmlOutput);
          ?>
        </div>
        <h3>Doctorate Degree Programs</h3>
                <?php
            $htmlOutput = '<div class="table"><div class="row-table header"><div class="cell">Subject</div><div class="cell tab">Standard</div><div class="cell tab">Accelerated</div></div>';
            //building html table
            foreach($PHD as $arr){
              $name = $arr[0];
              $modalA = $arr[1];
              $htmlOutput .= '<div class="row-table"><div class="cell"><a href="#" data-toggle="modal" data-target="#'.$modalA.'" id="acc_modal">'.$name.'</a></div><div class="cell tab"><a href="AHBAAmericanStudies4.pdf" id="PDf">Sample 6 Year Plan</a></div><div class="cell tab"><a href="AHBAAmericanStudies4.pdf" id="PDf">Sample 4 Year Plan</a></div></div>';
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