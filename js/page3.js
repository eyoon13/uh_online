$(document).ready(function(){

	$(".dropdown-toggle").dropdown();
	
	$('#degree_button').click(function(){
    	setTimeout(function(){
    		window.location.href='program-select.html';
    	}, 1000);

    });

    $('#togButton').click(function(){
    	$('#grad-table').slideToggle(500);
    	if( $(this).text() == 'Show' ) {
        $(this).text('Hide');
    	} else {
        $(this).text('Show');
    }

    });


});