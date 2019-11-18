$(document).ready(function() {
    
    $('.deposit').each(function() {
        if (parseInt($(this).text()) <= 200 ) {
            $(this).addClass('warning');
        }
    });

    $('#check_all').click(function() {
        var checked_status = this.checked;
        $("input[type=checkbox").each(function() {
            this.checked = checked_status;
        });
    });

});