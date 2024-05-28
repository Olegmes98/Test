$(document).ready (function () {
    $('#intro').hide();
    $("#done").click (function () {
        $('#message_error').hide ();
        var name = $("#name").val ();
        var surname = $("#surname").val ();
        var email = $("#email").val ();
        var password = $("#password").val ();
        var confirm_password = $("#confirm_password").val ();
        var fail = "";

        if (name.length ==false) fail = "*Введите имя";                 //Проверка данных на клиенте
        else if (surname ==false)
            fail = "*Введите фамилию";
        else if (surname.length<3)
            fail = "*Введите почту";
        else if (password==false)
            fail = "*Введите пароль";
        else if (confirm_password==false)
            fail = "*Повторите пароль";
        if (fail != "") {
            $('#message_error').html (fail + "<div class='clear'><br></div>");
            $('#message_error').show ();
            return false;
        }


        $.ajax ({                                                       //ajax запрос
            url: '/send.php',
            type: 'POST',
            cache: false,
            data: {'name': name, 'surname': surname, 'email': email, 'password': password, 'confirm_password': confirm_password},
            dataType: 'html',
            success: function(response) {
                if(response == "error_email") {
                    fail = "*Вы ввели некорректный адрес эл. почты";
                    $('#message_error').html (fail + "<div class='clear'><br></div>");
                    $('#message_error').show ();

                } else if(response == "error_password") {
                    fail = "*Пароли не совпадают";
                    $('#message_error').html (fail + "<div class='clear'><br></div>");
                    $('#message_error').show ();
                    }
                else if(response == "repeated_email") {
                    fail = "*Данный Email уже зарегистрирован";
                    $('#message_error').html (fail + "<div class='clear'><br></div>");
                    $('#message_error').show ();
                }
                else{
                    $('#formRegiseter').hide();
                    $('#intro').show();
                }
            }
        });
    });
});



