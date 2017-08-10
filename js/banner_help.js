$(document).ready(function () {
	$('#banner_link').click(function(){
		window.open('https://www.sis.hawaii.edu/uhdad/bwskalog.P_DispLoginNon');
	});

	$('#togButton').click(function(){
    	$('#select-campus').slideToggle(500);
    	if( $(this).text() == 'Show' ) {
        $(this).text('Hide');
    	} else {
        $(this).text('Show');
   		}
	});
    $('#mainbanner').click(function(){
        $('#banner-main').slideToggle(500);
        if( $(this).text() == 'Show' ) {
        $(this).text('Hide');
        } else {
        $(this).text('Show');
        }
    });

});