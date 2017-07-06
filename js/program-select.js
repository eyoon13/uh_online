$(document).ready(function () {

	$('#myModal').on('shown.bs.modal', function () {
        $('#myInput').focus();

    });

    $('#buttonB').click(function(){
    	var val = $('#buttonB').val();
    	$('#course_code').val(val);
    	$('#myModal2').modal('hide');
    	$('#approvedModal').modal('show');

    });

    $("a.dropdown-toggle").click(function(ev) {
            $("a.dropdown-toggle").dropdown("toggle");
            return false;
          });

     $("ul.dropdown-menu a").click(function(ev) {
              $("a.dropdown-toggle").dropdown("toggle");
              return false;
          });

});