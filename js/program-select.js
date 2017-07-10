$(document).ready(function () {

	$(".dropdown-toggle").dropdown();

	$('#myModal').on('shown.bs.modal', function () {
        $('#myInput').focus();

    });
    $('#apply').click(function(){
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
    				return false;

    			},
   			error: function(){
   				alert("failure");
   			}
    	});

    });

     $('#gen_info').click(function(){
     	console.log("button");
    });
    
    $(function() {
    function reposition() {
        var modal = $(this),
            dialog = modal.find('.modal-dialog');
        modal.css('display', 'block');
        
        // Dividing by two centers the modal exactly, but dividing by three 
        // or four works better for larger screens.
        dialog.css("margin-top", Math.max(0, ($(window).height() - dialog.height()) / 4));
    }
    // Reposition when a modal is shown
    $('.modal').on('show.bs.modal', reposition);
    // Reposition when the window is resized
    $(window).on('resize', function() {
        $('.modal:visible').each(reposition);
    	});
	});

function setModalMaxHeight(element) {
  this.$element     = $(element);  
  this.$content     = this.$element.find('.modal-content');
  var borderWidth   = this.$content.outerHeight() - this.$content.innerHeight();
  var dialogMargin  = $(window).width() < 768 ? 20 : 60;
  var contentHeight = $(window).height() - (dialogMargin + borderWidth);
  var headerHeight  = this.$element.find('.modal-header').outerHeight() || 0;
  var footerHeight  = this.$element.find('.modal-footer').outerHeight() || 0;
  var maxHeight     = contentHeight - (headerHeight + footerHeight);

  this.$content.css({
      'overflow': 'hidden'
  });
  
  this.$element
    .find('.modal-body').css({
      'max-height': maxHeight,
      'overflow-y': 'auto'
  });
}

$('.modal').on('show.bs.modal', function() {
  $(this).show();
  setModalMaxHeight(this);
});

$(window).resize(function() {
  if ($('.modal.in').length != 0) {
    setModalMaxHeight($('.modal.in'));
  }
});

});