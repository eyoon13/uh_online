$(document).ready(function () {

	$(".dropdown-toggle").dropdown();

    $('#myModal2').on('shown.bs.modal', function(event){
      var button = $(event.relatedTarget);
      var obj = button.val();
      var modal = $(this);
      modal.find('#course_code').val(obj);
    });

    $('#reg_form').on('shown.bs.modal', function(event){
      var button = $(event.relatedTarget);
      var obj = button.val();
      var modal = $(this);
      modal.find('#campus_value').val(obj);
    });


    $('#apply').click(function(){
    	console.log('hello');
    	$('#myModal').modal('toggle');
    	setTimeout(function(){
    		window.location.href='https://www.sis.hawaii.edu/uhdad/bwskalog.P_DispLoginNon';
    	}, 1000);

    });

    $('#trigger').click(function(){
      $('#dialog').dialog();
    }); 

	$('#form_2').submit(function(event) {
    	console.log('hello');	
    });

});


