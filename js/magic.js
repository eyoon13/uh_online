// magic.js

$(document).ready(function(){

	//process the form
	$('#info_form_1').submit(fuction(event){

		$('.form-group').removeClass('has-error'); // remove the error class
    	$('.help-block').remove(); // remove the error text

		// get the form data
		// there are many ways to get this data using JQuery  (you can use the class or id also)
		var formData = {
			'email': $('input[name=email]').val()
		};

		//process the form
		$.ajax({
			type		:  'POST', //define the type of HTTP verb we want to use
			url			:  'process.php', // the url where we want to POST
			data 		:  formData, // our data object
			dataType	:  'json' // what type of data do we expect back from our server
		})
			.done(function(data){

				// log to console so we can see
				console.log(data);
				
				// handle the errors and validation messages
				if ( ! data.success){

					// handle errors for email
					if (data.errors.email){
						$('#email-group').addClass('has-error');
						$('#email-group').append('<div class="help-block">' + data.errors.email + '</div>'); // add the actual error message under our input
					}
				} else {

					// Everything is good. Show success message!
					$('#info_form_1').append('<div class="alert alert-success">'+ data.message +'</div>');

					// usually after form submission, you'll want to redirect
					// window.location = '/thank-you'; // redirect a user to another page

					alert('success'); // for now we'll just alert the user
				}

			});
	});
});