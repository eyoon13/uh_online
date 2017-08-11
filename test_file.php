<?php







?>



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
			<div class="col-md-4 col-md-offset-1">
			<label for="time-y">Please Select Number of Years for Flowchart:</label>
			<select class="form-control" name="pick_length" id="time-y">
				<option value="2">2 Years</option>
				<option value="3">3 Years</option>
				<option value="4">4 Years</option>
				<option value="5">5 Years</option>
				<option value="6">6 Years</option>
				<option value="7">7 Years</option>
				<option value="8">8 Years</option>
			</select>
			<button class="btn btn-info" id="year_submit">Submit</button>
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

			 <!-- Modal -->
  <div class="modal fade" id="course_lists" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h4 class="modal-title">Course Listing</h4>
        </div>
        <div class="modal-body">
			<div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <div id="tableDiv">
                            <table id="courseTable" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Course Name</th>
                                        <th>Course Code</th>
                                        <th>Select</th>
                                    </tr>
                                </thead>
                                <tbody>
                                	<tr>
                                		<td>Course A</td>
                                		<td>AMST101</td>
                                		<td><input class="course-checkbox" type="checkbox" value="AMST 101"/>&nbsp;</td>
                                	</tr>
                                	<tr>
                                		<td>Course B</td>
                                		<td>AMST201</td>
                                		<td><input class="course-checkbox" type="checkbox" value="AMST 201"/>&nbsp;</td>
                                	</tr>
                                	<tr>
                                		<td>Course C</td>
                                		<td>AMST400</td>
                                		<td><input class="course-checkbox" type="checkbox" value="AMST 400"/>&nbsp;</td>
                                	</tr>
                                	<tr>
                                		<td>Course D</td>
                                		<td>AMST501</td>
                                		<td><input class="course-checkbox" type="checkbox" value="AMST 501"/>&nbsp;</td>
                                	</tr>
                                	<tr>
                                		<td>Course E</td>
                                		<td>AMST601</td>
                                		<td><input class="course-checkbox" type="checkbox" value="AMST 601"/>&nbsp;</td>
                                	</tr>
                                	<tr>
                                		<td>Course F</td>
                                		<td>AMST622</td>
                                		<td><input class="course-checkbox" type="checkbox" value="AMST 622"/>&nbsp;</td>
                                	</tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
				</div>
			</div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" data-dismiss="modal" id="modalButton">Add Courses</button>
        </div>
      </div>
    </div>
  </div>





	</body>
 
	<script src="js/flowchart.js"></script>

</html>
