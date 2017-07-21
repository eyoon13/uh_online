$(document).ready(function () {

	$(".dropdown-toggle").dropdown();

    $('#myModal2').on('shown.bs.modal', function(event){
      var button = $(event.relatedTarget);
      var obj = button.val();
      var modal = $(this);
      modal.find('#course_code').val(obj);
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

    $('#acc_modal').click(function(e){
    	$('.modal-container').load('resources/modals/modalAcc.html',function(result){
    		$('#mymodal').modal({show:true});
    	});
   	});

    $('#ca_modal').click(function(e){
    	$('#stud').load('resources/modals/modalCA.html','#acc_CA');
    	console.log($('#stud'));
    		$('#stud').modal('toggle');
    });
});


