$(document).ready(function() {
    $("#confirm").click(function(){
        var removingIds = [];
        $.confirm({
            title: 'Подтверждение действий',
            content: 'Изменить выбраные значения?',
            buttons: {
                confirm: function () {         
                        $('.check').each(function() {
                        if ($(this).is(':checked')) {
                            removingIds.push(parseInt($(this).attr("id")));
                        } 
                        });
                        var sum = parseInt($('#sum').val());
                        console.log(removingIds, sum);
                        $.ajax({
                            url: "app/updateDeposit.php",
                            type: "POST",
                            contex: document.body,
                            data: {removingIds, sum},
                            dataType: "json",
                            success: function(response) {
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
                            });          
                        },
                        
                    });
                    $.confirm({
                        title: "Готово",
                        content: "Изменено записей: " + removingIds.length,
                        buttons: function(){
                            console.log('ok')
                        }
                    });
                },
                cancel: function () {
                    $.alert('Canceled!');
                },
            }
        });
    });

    
    $("#confirm2").click(function() {
        var removingIds = [];
        $.confirm({
            title: "Внести изменения?",
            content: "Подтверждение действия",
            buttons: {
                Okey: function() {
                    var removingIds = [];
        $('.check').each(function() {
            if ($(this).is(':checked')) {
                removingIds.push(parseInt($(this).attr("id")));
            } 
        });
        var sum = -(parseInt($('#sum').val()));
        console.log(removingIds, sum);
        $.ajax({
            url: "app/updateDeposit.php",
            type: "POST",
            contex: document.body,
            data: {removingIds, sum},
            dataType: "json",
            success: function(response) {
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
                });  
                $.confirm({
                    title: "Готово",
                        content: "Изменено записей: " + removingIds.length,
                        buttons: function(){
                            console.log('ok')
                        }
                })        
            },
        });       
                }
            }
        })
    }) 
});