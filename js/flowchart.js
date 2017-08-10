$(document).ready(function() {

    $('#add_course').click(function(){
    });

    $('#clear_course').click(function(){
        $('#course_listings').empty();
    });

    $('#course_lists').on('hidden.bs.modal', function(e) {
        $("#course_lists .modal-body").find('input:radio, input:checkbox').prop('checked', false);
    });

    $('#modalButton').click(function(){
        $('.course-checkbox:checkbox:checked').each(function(){
            var course_val = $(this).val();
            console.log(course_val);
            $('#course_listings').append('<li>'+course_val+'</li>');
        });
    });
});
