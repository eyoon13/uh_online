$(document).ready(function () {

	$(".dropdown-toggle").dropdown();

	$('#myModal').on('shown.bs.modal', function () {
        $('#myInput').focus();

    });

    $('#myModal2').on('shown.bs.modal', function(event){
      var button = $(event.relatedTarget);
      var obj = button.val();
      var modal = $(this);
      modal.find('#course_code').val(obj);
    });

    $('#buttonB').click(function(){
    	var val = $('#buttonB').val();
    	$('#course_code').val(val);
    	$.ajax({
    		type: "POST",
    		url: "hello.php",
    		data: $('form.form_2').serialize(),
    			success: function(msg){
    				$('#myModal2').modal('hide');
    				$('#approvedModal').modal('toggle');
    				return false;
    			},
   			error: function(){
   				alert("failure");
   			}
    	});

    });

    $('#apply').click(function(){
    	$('#myModal').modal('toggle');
    	setTimeout(function(){
    		window.location.href='https://www.sis.hawaii.edu/uhdad/bwskalog.P_DispLoginNon';
    	}, 1000);

    });

});