//Retorno do root
function getRoot() {
    var root = "http://" + document.location.hostname + "/catalogomz/";
    return root;
}

//Ajax do formulário de cadastro
$("#formCadastro").on("submit", function (event) {
    event.preventDefault();
    var dados = $(this).serialize();

    $.ajax({
        url: getRoot() + 'controllers/ControllerCadastro',
        type: 'post',
        dataType: 'json',
        data: dados,
        success: function (response) {
            $('.retornoCad').empty();
            if (response.retorno == 'erro') {
                //         getCaptcha();
                $.each(response.erros, function (key, value) {
                    $('.retornoCad').append(value + '<br>');
                });
            } else {
                $('.retornoCad').append('Dados inseridos com sucesso!');
                $('#formCadastro').each(function () {
                    this.reset();
                });

            }

        }
    });
});

function limpar(){
    $('#formCadastro').each(function () {
        this.reset();
    });
}