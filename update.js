$(document).ready(function() {
    
    $('#update_one').click(function(event) {
        var id =parseInt($("#id").text());
        var name = $("#name").text();
        var deposit = parseInt($('#deposit').text());

        $.post("app/update_one.php", {id: id, name: name, deposit: deposit}, function() {
            console.log('success');
            var url = 'http://deposit.local/index.php';
            $(location).attr('href', url);
        });

    });
});