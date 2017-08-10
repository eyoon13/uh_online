<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="css/styles.css" rel="stylesheet">

</head>



		
		<form>
			<div class="col-md-4">
			<label for="time-y">Please Select Number of Years for Flowchart:</label>
			<select class="form-control" name="pick_length" id="time-y">
				<option value="2">2 Years</option>
				<option value="3">3 Years</option>
				<option value="4">4 Years</option>
				<option value="5">5 Years</option>
			</select>
			<input type="submit" class="btn btn-primary" id="year_submit">
			</div>
		</form>



		<form method="GET" action="flow_helper.php">
			<select class="select-style" name="year" id="year_select">
				<option value="2">Year 1</option>
				<option value="3">Year 2</option>
				<option value="4">Year 3</option>
				<option value="5">Year 4</option>
			</select>

			<select class="select-style" name="term" id="term_list">
				<option value="Fall">Fall</option>
				<option value="Spring">Spring</option>
				<option value="Summer">Summer</option>
			</select>
			<input type="submit" class="btn btn-primary" value="Edit">
		</form>

	</body>
 
	<script src="js/flowchart.js"></script>

</html>
