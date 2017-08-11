<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="css/styles.css" rel="stylesheet">

</head>



	<div class="container-fluid">
		<form method="get" action="flow_helper.php" id="year_form">
			<div class="col-md-3">
				<label for="time-y">Please Select Number of Years for Flowchart:</label>
			</div>
			<div class="col-md-4">
				<select class="form-control" name="years" id="time-y">
					<option value="2">2 Years</option>
					<option value="3">3 Years</option>
					<option value="4">4 Years</option>
					<option value="5">5 Years</option>
					<option value="6">6 Years</option>
					<option value="7">7 Years</option>
					<option value="8">8 Years</option>
				</select>
			</div>
			<div class="col-md-4">	
				<input type="submit" class="btn btn-primary" id="year_submit">
			</div>
		</form>
	</div>


	</body>
 
	<script src="js/flowchart.js"></script>

</html>
