$(document).ready(function () {
  $(".dropdown-toggle").dropdown();

  $('#apply').click(function(){
      $('#myModal').modal('toggle');
      setTimeout(function(){
        window.location.href='https://www.sis.hawaii.edu/uhdad/bwskalog.P_DispLoginNon';
      }, 1000);

    });

    $('#myModal2').on('shown.bs.modal', function(event){
      var button = $(event.relatedTarget);
      var obj = button.val();
      var modal = $(this);
      modal.find('#course_code').val(obj);
    });


});