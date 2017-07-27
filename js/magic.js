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
        	'first_name'        : $('input[name=f_name').val(),
        	'last_name'         : $('input[name=l_name').val(),
            'email'             : $('input[name=email]').val(),
            'info'              : $('textarea[name=question').val(),
            'sender'            : $('input[name=campus_mail').val(),
        };
        console.log($(formData));

        // process the form
        $.ajax({
 			url: 'process.php',
 			type: 'POST',
 			data: formData, // it will serialize the form data
        	dataType: 'json'
    	})
    		.done(function(data){
    			console.log(data);
    			$('#form_group').html("<form><h1 id='message'>Your message has been submitted</h1></form>");
    	})
    		event.preventDefault();
	});
});
