//Retorno do root
function getRoot() {
    var root = "http://" + document.location.hostname + "/catalogomz/";
    return root;
}

//Ajax do fomiçario de login
$("#formLogin").on("submit", function (event) {

    event.preventDefault();
    var dados = $(this).serialize();

    $.ajax({
        url: getRoot() + 'controllers/ControllerLogin',
        type: 'post',
        dataType: 'json',
        data: dados,
        success: function (response) {
            if (response.retorno == 'success') {
                window.location.href = response.page;
            } else {
                if (response.tentativas == true) {
                    $('loginFormulario').hide();
                }
                $('.resultadoForm').empty();
                $.each(response.erros, function (key, value) {
                    $('.resultadoForm').append(value + '<br>');
                });
            }
        }

    });
});

//CapsLock
$("#password").keypress(function (e) {
    kc = e.keyCode ? e.keyCode : e.which;
    sk = e.shiftKey ? e.shiftKey : ((kc == 16) ? true : false);
    if (((kc >= 65 && kc <= 90) && !sk) || (kc >= 97 && kc <= 122) && sk) {
        $(".resultadoForm").html("Caps Lock Ligado");
    } else {
        $(".resultadoForm").empty();
    }
});

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

function limpar() {
    $('#formCadastro').each(function () {
        this.reset();
    });
}

$(document).ready(function () {
    $("#codigo").keyup(function () {
        $("#codigo").val(this.value.match(/[0-9]*/));
    });
});

$("#formUpload").on("submit", function (event) {
    //event.preventDefault();

    let form_data = new FormData();
    let img = $("#imagem")[0].files;

    //Verificar se seleciou imagem
    if (img.length > 0) {
        var dados = $(this).serialize();
        $.ajax({
            url: getRoot() + 'controllers/ControllerUpload',
            type: 'post',
            data: dados,
            contentType: false,
            processData: false,
            success: function (response) {
                
            }
        });
    } else {
        $("#alertImg").text("Selecione uma imagem");
    }
});