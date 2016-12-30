Site = {
    enviarEmailDeContato : function () {
        $.ajax({
            method: "POST",
            url: 'Email/sendMail',
            data: $('#formulario-contato').serialize(),
            success: function (response) {
                alert(response);
            },
            error: function (jqXHR, exception) {
                alert('Algum erro aconteceu!');
            }
        });
    }
}