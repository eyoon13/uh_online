<?php

class program{
		
		public $course_name;
		public $college;
		public $value;
		public $level;
		public $modal;

	}

class course{
		public $name;
		public $course_number;
}





	$program   = array();
	$semesters = array();
	$courses   = array();



$year = $_GET['year'];
$term = $_GET['term'];

echo($year."</br>");
echo($term);



?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<script src="js/flowchart.js"></script>
</head>
	<body>

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

  	<div class="row">
		<div class="col-md-4">
			<button type="button" data-toggle="modal" href="#course_lists" class="btn btn-success" id="add_course">Add a Course</button>
		</div>
		<div class="col-md-4">
			<button type="button" class="btn btn-danger" id="clear_course">Clear All Courses</button>
		</div>
	</div>

		<div class="row">
			<div class="col-md-12">
					<ul id="course_listings">
					</ul>
			</div>
		</div>
	</body>

</html>

