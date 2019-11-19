$(document).ready(function() {
    $("#remove").click(function() {
        console.log('ok');
        var removingIds = [];
        $('.check').each(function() {
            if ($(this).is(':checked')) {
                removingIds.push(parseInt($(this).attr("id")));
            } 
        });
        console.log(removingIds);

        $.ajax({
            url: "app/remove.php",
            type: "POST",
            contex: document.body,
            data: {removingIds, sum},
            dataType: "json",
            success: function(response) {
                console.log('ok');
                // $table = $(response).find('table');
                // $('body').html($table);
            },
            error: function(xhr, ajaxOptions, thrownError){
                console.log(xhr.status);
                console.log(thrownError);
                $.ajax({
                    url: "http://deposit.local/index.php",
                    type: "GET",
                    contex: document.body,
                    success: function(response) {
                        $table = $(response).find('table');
                        $('main').html($table);
                         
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
                    }
                })
            }
         });
    });
});