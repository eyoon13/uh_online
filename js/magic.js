// magic.js
$(document).ready(function() {

    // process the form
    $('#info_form_1').submit(function(event) {

    	event.preventDefault(); // Prevent Default Submission
        // get the form data
        // there are many ways to get this data using jQuery (you can use the class or id also)
        // get the form data
        // there are many ways to get this data using jQuery (you can use the class or id also)
        var formData = {
            'email'             : $('input[name=email]').val(),
        };

        // process the form
        $.ajax({
 			url: 'process.php',
 			type: 'POST',
 			data: $(this).serialize(), // it will serialize the form data
        	dataType: 'html'
    	})
    		.done(function(data){
    			$('#filler').html("<div id='message'>Hello</div>")
     		    //$('#form-content').fadeOut('slow', function(){
          		//$('#form-content').fadeIn('slow').html(data);
        	});
    	})
	});
