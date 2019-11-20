$(document).ready(function() {
    function updateDeposit(action){
        var removingIds = [];
        // Проверка чекбоксов и запись в массив
        $('.check').each(function(){
            if ($(this).is(':checked')) {
                removingIds.push(parseInt($(this).attr('id')));
            }
        });
        // Проверка суммы изменения и оперции 
        var sum = parseInt($('#sum').val());
        if (action == 'decrease') {
            sum = -sum;
        }
        // Запрос на отправку данных и обновление страницы
        $.ajax({
            url: "app/updateDeposit.php",
            type: "POST",
            contex: document.body,
            data: {removingIds, sum},
            dataTyp: "json",
            success: function(response) {
                // Запрос на обновление данных в случаее успешной отправки
               $.ajax({
                    url: "/index.php",
                    type: "GET",
                    success: function(response) {
                         // Обновление данных на странице
                        $table = $(response).find('table');
                        $('main').html($table);

                        // Отображение низкого депозита красным цветом
                        $('.deposit').each(function() {
                            if (parseInt($(this).text()) <= 200 ) {
                                $(this).addClass('warning');
                            }
                        });

                        // Изменение статуса чекбоксов
                        $('#check_all').click(function(){
                            var checked_status = this.checked;
                            $('input[type=checkbox]').each(function(){
                                this.checked = checked_status;
                            });
                        });
                    } 
               })
            }
        });
    }


    // Обработка действий по изменению депозита
    // Увеличение депозита
    $("#increase").click(function(){
        $.confirm({
            title: 'Вы уверены?',
            buttons: {
                confirm: function() {
                    updateDeposit('increase');
                    $.alert("Изменено");
                },
                cansel: function(){
                    $.alert("Отмена");
                }
            }
        });
    });

    // Уменьшение депозита
    $("#decrease").click(function(){
        $.confirm({
            title: 'Вы уверены?',
            buttons: {
                confirm: function(){
                    updateDeposit('decrease');
                    $.alert("Изменено");
                },
                cansel: function(){
                    $.alert("отмена");
                }
            }
        });
    })
});