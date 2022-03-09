$(function () {
    $("#example1").DataTable({
        "responsive": true,
        "autoWidth": false,
    });
    $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
    });
});


//  Ajax para Manipulação dos Níveis

$("#form").submit(function () {
    event.preventDefault();
    var formData = new FormData(this);
    $.ajax({
        url: "inserir-nivel.php",
        type: 'POST',
        data: formData,
        success: function (mensagem) {
            $('#mensagem-inserir').text('')
            $('#mensagem-inserir').removeClass()
            if (mensagem.trim() == "Salvo com Sucesso!") {
                //$('#nome').val('');
                //$('#cpf').val('');
                $('#btn-fechar-inserir').click();
                window.location = "niveis.php";
            } else {
                $('#mensagem-inserir').addClass('text-danger')
                $('#mensagem-inserir').text(mensagem)
            }
        },
        cache: false,
        contentType: false,
        processData: false,
    });
});


$("#form-editar").submit(function () {
    event.preventDefault();
    var formData = new FormData(this);
    $.ajax({
        url: "editar-nivel.php",
        type: 'POST',
        data: formData,
        success: function (mensagem) {
            $('#mensagem-editar').text('')
            $('#mensagem-editar').removeClass()
            if (mensagem.trim() == "Salvo com Sucesso!") {
                //$('#nome').val('');
                //$('#cpf').val('');
                $('#btn-fechar-editarr').click();
                window.location = "niveis.php";
            } else {
                $('#mensagem-editar').addClass('text-danger')
                $('#mensagem-editar').text(mensagem)
            }
        },
        cache: false,
        contentType: false,
        processData: false,
    });
});


$("#form-excluir").submit(function () {
    event.preventDefault();
    var formData = new FormData(this);
    $.ajax({
        url: "excluir-nivel.php",
        type: 'POST',
        data: formData,
        success: function (mensagem) {
            $('#mensagem-excluir').text('')
            $('#mensagem-excluir').removeClass()
            if (mensagem.trim() == "Excluido com Sucesso!") {
                //$('#nome').val('');
                //$('#cpf').val('');
                window.location = "niveis.php";
            } else {
                $('#mensagem-excluir').addClass('text-danger')
                $('#mensagem-excluir').text(mensagem)
            }
        },
        cache: false,
        contentType: false,
        processData: false,
    });
});

// Ajax para manipulação dos Usuários

$("#form-inserir-usuario").submit(function () {
    event.preventDefault();
    var formData = new FormData(this);
    $.ajax({
        url: "inserir-usuario.php",
        type: 'POST',
        data: formData,
        success: function (mensagem) {
            $('#mensagem-inserir').text('')
            $('#mensagem-inserir').removeClass()
            if (mensagem.trim() == "Salvo com Sucesso!") {
                //$('#nome').val('');
                //$('#cpf').val('');
                $('#btn-fechar-inserir').click();
                window.location = "usuarios.php";
            } else {
                $('#mensagem-inserir').addClass('text-danger')
                $('#mensagem-inserir').text(mensagem)
            }
        },
        cache: false,
        contentType: false,
        processData: false,
    });
});


$("#form-usuario-editar").submit(function () {
    event.preventDefault();
    var formData = new FormData(this);
    $.ajax({
        url: "editar-usuario.php",
        type: 'POST',
        data: formData,
        success: function (mensagem) {
            $('#mensagem-editar').text('')
            $('#mensagem-editar').removeClass()
            if (mensagem.trim() == "Salvo com Sucesso!") {
                //$('#nome').val('');
                //$('#cpf').val('');
                $('#btn-fechar-editarr').click();
                window.location = "usuarios.php";
            } else {
                $('#mensagem-editar').addClass('text-danger')
                $('#mensagem-editar').text(mensagem)
            }
        },
        cache: false,
        contentType: false,
        processData: false,
    });
});
$("#form-usuario-excluir").submit(function () {
    event.preventDefault();
    var formData = new FormData(this);
    $.ajax({
        url: "excluir-usuario.php",
        type: 'POST',
        data: formData,
        success: function (mensagem) {
            $('#mensagem-excluir').text('')
            $('#mensagem-excluir').removeClass()
            if (mensagem.trim() == "Excluido com Sucesso!") {
                //$('#nome').val('');
                //$('#cpf').val('');
                window.location = "usuarios.php";
            } else {
                $('#mensagem-excluir').addClass('text-danger')
                $('#mensagem-excluir').text(mensagem)
            }
        },
        cache: false,
        contentType: false,
        processData: false,
    });
});



// Ajax para manipulação dos das categorias

$("#form-inserir-categoria").submit(function () {
    event.preventDefault();
    var formData = new FormData(this);
    $.ajax({
        url: "inserir-categorias.php",
        type: 'POST',
        data: formData,
        success: function (mensagem) {
            $('#mensagem-inserir').text('')
            $('#mensagem-inserir').removeClass()
            if (mensagem.trim() == "Salvo com Sucesso!") {
                //$('#nome').val('');
                //$('#cpf').val('');
                $('#btn-fechar-inserir').click();
                window.location = "categorias.php";
            } else {
                $('#mensagem-inserir').addClass('text-danger')
                $('#mensagem-inserir').text(mensagem)
            }
        },
        cache: false,
        contentType: false,
        processData: false,
    });
});


$("#form-categoria-editar").submit(function () {
    event.preventDefault();
    var formData = new FormData(this);
    $.ajax({
        url: "editar-categorias.php",
        type: 'POST',
        data: formData,
        success: function (mensagem) {
            $('#mensagem-editar').text('')
            $('#mensagem-editar').removeClass()
            if (mensagem.trim() == "Salvo com Sucesso!") {
                //$('#nome').val('');
                //$('#cpf').val('');
                $('#btn-fechar-editarr').click();
                window.location = "categorias.php";
            } else {
                $('#mensagem-editar').addClass('text-danger')
                $('#mensagem-editar').text(mensagem)
            }
        },
        cache: false,
        contentType: false,
        processData: false,
    });
});


$("#form-categoria-excluir").submit(function () {
    event.preventDefault();
    var formData = new FormData(this);
    $.ajax({
        url: "excluir-categorias.php",
        type: 'POST',
        data: formData,
        success: function (mensagem) {
            $('#mensagem-excluir').text('')
            $('#mensagem-excluir').removeClass()
            if (mensagem.trim() == "Excluido com Sucesso!") {
                //$('#nome').val('');
                //$('#cpf').val('');
                window.location = "categorias.php";
            } else {
                $('#mensagem-excluir').addClass('text-danger')
                $('#mensagem-excluir').text(mensagem)
            }
        },
        cache: false,
        contentType: false,
        processData: false,
    });
});



// Ajax para manipulação dos Contactos

$("#form-inserir-contacto").submit(function () {
    event.preventDefault();
    var formData = new FormData(this);
    $.ajax({
        url: "inserir-contacto.php",
        type: 'POST',
        data: formData,
        success: function (mensagem) {
            $('#mensagem-inserir').text('')
            $('#mensagem-inserir').removeClass()
            if (mensagem.trim() == "Salvo com Sucesso!") {
                //$('#nome').val('');
                //$('#cpf').val('');
                $('#btn-fechar-inserir').click();
                window.location = "contacto.php";
            } else {
                $('#mensagem-inserir').addClass('text-danger')
                $('#mensagem-inserir').text(mensagem)
            }
        },
        cache: false,
        contentType: false,
        processData: false,
    });
});
$("#form-contacto-editar").submit(function () {
    event.preventDefault();
    var formData = new FormData(this);
    $.ajax({
        url: "editar-contacto.php",
        type: 'POST',
        data: formData,
        success: function (mensagem) {
            $('#mensagem-editar').text('')
            $('#mensagem-editar').removeClass()
            if (mensagem.trim() == "Salvo com Sucesso!") {
                //$('#nome').val('');
                //$('#cpf').val('');
                $('#btn-fechar-editarr').click();
                window.location = "contacto.php";
            } else {
                $('#mensagem-editar').addClass('text-danger')
                $('#mensagem-editar').text(mensagem)
            }
        },
        cache: false,
        contentType: false,
        processData: false,
    });
});


$("#form-contacto-excluir").submit(function () {
    event.preventDefault();
    var formData = new FormData(this);
    $.ajax({
        url: "excluir-contacto.php",
        type: 'POST',
        data: formData,
        success: function (mensagem) {
            $('#mensagem-excluir').text('')
            $('#mensagem-excluir').removeClass()
            if (mensagem.trim() == "Excluido com Sucesso!") {
                //$('#nome').val('');
                //$('#cpf').val('');
                window.location = "contacto.php";
            } else {
                $('#mensagem-excluir').addClass('text-danger')
                $('#mensagem-excluir').text(mensagem)
            }
        },
        cache: false,
        contentType: false,
        processData: false,
    });
});



// Ajax para manipulação das NEWSLATTER

$("#form-inserir-newslatter").submit(function () {
    event.preventDefault();
    var formData = new FormData(this);
    $.ajax({
        url: "inserir-newslatter.php",
        type: 'POST',
        data: formData,
        success: function (mensagem) {
            $('#mensagem-inserir').text('')
            $('#mensagem-inserir').removeClass()
            if (mensagem.trim() == "Salvo com Sucesso!") {
                //$('#nome').val('');
                //$('#cpf').val('');
                $('#btn-fechar-inserir').click();
                window.location = "newslatter.php";
            } else {
                $('#mensagem-inserir').addClass('text-danger')
                $('#mensagem-inserir').text(mensagem)
            }
        },
        cache: false,
        contentType: false,
        processData: false,
    });
});
$("#form-newslatter-editar").submit(function () {
    event.preventDefault();
    var formData = new FormData(this);
    $.ajax({
        url: "editar-newslatter.php",
        type: 'POST',
        data: formData,
        success: function (mensagem) {
            $('#mensagem-editar').text('')
            $('#mensagem-editar').removeClass()
            if (mensagem.trim() == "Salvo com Sucesso!") {
                //$('#nome').val('');
                //$('#cpf').val('');
                $('#btn-fechar-editarr').click();
                window.location = "newslatter.php";
            } else {
                $('#mensagem-editar').addClass('text-danger')
                $('#mensagem-editar').text(mensagem)
            }
        },
        cache: false,
        contentType: false,
        processData: false,
    });
});


$("#form-newslatter-excluir").submit(function () {
    event.preventDefault();
    var formData = new FormData(this);
    $.ajax({
        url: "excluir-newslatter.php",
        type: 'POST',
        data: formData,
        success: function (mensagem) {
            $('#mensagem-excluir').text('')
            $('#mensagem-excluir').removeClass()
            if (mensagem.trim() == "Excluido com Sucesso!") {
                //$('#nome').val('');
                //$('#cpf').val('');
                window.location = "newslatter.php";
            } else {
                $('#mensagem-excluir').addClass('text-danger')
                $('#mensagem-excluir').text(mensagem)
            }
        },
        cache: false,
        contentType: false,
        processData: false,
    });
});




// Ajax para manipulação dos SERVIÇOS

$("#form-inserir-servico").submit(function () {
    event.preventDefault();
    var formData = new FormData(this);
    $.ajax({
        url: "inserir-servicos.php",
        type: 'POST',
        data: formData,
        success: function (mensagem) {
            $('#mensagem-inserir').text('')
            $('#mensagem-inserir').removeClass()
            if (mensagem.trim() == "Salvo com Sucesso!") {
                //$('#nome').val('');
                //$('#cpf').val('');
                $('#btn-fechar-inserir').click();
                window.location = "servicos.php";
            } else {
                $('#mensagem-inserir').addClass('text-danger')
                $('#mensagem-inserir').text(mensagem)
            }
        },
        cache: false,
        contentType: false,
        processData: false,
    });
});


$("#form-servico-editar").submit(function () {
    event.preventDefault();
    var formData = new FormData(this);
    $.ajax({
        url: "editar-servicos.php",
        type: 'POST',
        data: formData,
        success: function (mensagem) {
            $('#mensagem-editar').text('')
            $('#mensagem-editar').removeClass()
            if (mensagem.trim() == "Salvo com Sucesso!") {
                //$('#nome').val('');
                //$('#cpf').val('');
                $('#btn-fechar-editarr').click();
                window.location = "servicos.php";
            } else {
                $('#mensagem-editar').addClass('text-danger')
                $('#mensagem-editar').text(mensagem)
            }
        },
        cache: false,
        contentType: false,
        processData: false,
    });
});


$("#form-servico-excluir").submit(function () {
    event.preventDefault();
    var formData = new FormData(this);
    $.ajax({
        url: "excluir-servicos.php",
        type: 'POST',
        data: formData,
        success: function (mensagem) {
            $('#mensagem-excluir').text('')
            $('#mensagem-excluir').removeClass()
            if (mensagem.trim() == "Excluido com Sucesso!") {
                //$('#nome').val('');
                //$('#cpf').val('');
                window.location = "servicos.php";
            } else {
                $('#mensagem-excluir').addClass('text-danger')
                $('#mensagem-excluir').text(mensagem)
            }
        },
        cache: false,
        contentType: false,
        processData: false,
    });
});




// Ajax para manipulação dos SLIDES

$("#form-inserir-slide").submit(function () {
    event.preventDefault();
    var formData = new FormData(this);
    $.ajax({
        url: "inserir-slides.php",
        type: 'POST',
        data: formData,
        success: function (mensagem) {
            $('#mensagem-inserir').text('')
            $('#mensagem-inserir').removeClass()
            if (mensagem.trim() == "Salvo com Sucesso!") {
                //$('#nome').val('');
                //$('#cpf').val('');
                $('#btn-fechar-inserir').click();
                window.location = "slides.php";
            } else {
                $('#mensagem-inserir').addClass('text-danger')
                $('#mensagem-inserir').text(mensagem)
            }
        },
        cache: false,
        contentType: false,
        processData: false,
    });
});


$("#form-slide-editar").submit(function () {
    event.preventDefault();
    var formData = new FormData(this);
    $.ajax({
        url: "editar-slides.php",
        type: 'POST',
        data: formData,
        success: function (mensagem) {
            $('#mensagem-editar').text('')
            $('#mensagem-editar').removeClass()
            if (mensagem.trim() == "Salvo com Sucesso!") {
                //$('#nome').val('');
                //$('#cpf').val('');
                $('#btn-fechar-editarr').click();
                window.location = "slides.php";
            } else {
                $('#mensagem-editar').addClass('text-danger')
                $('#mensagem-editar').text(mensagem)
            }
        },
        cache: false,
        contentType: false,
        processData: false,
    });
});


$("#form-slide-excluir").submit(function () {
    event.preventDefault();
    var formData = new FormData(this);
    $.ajax({
        url: "excluir-slides.php",
        type: 'POST',
        data: formData,
        success: function (mensagem) {
            $('#mensagem-excluir').text('')
            $('#mensagem-excluir').removeClass()
            if (mensagem.trim() == "Excluido com Sucesso!") {
                //$('#nome').val('');
                //$('#cpf').val('');
                window.location = "slides.php";
            } else {
                $('#mensagem-excluir').addClass('text-danger')
                $('#mensagem-excluir').text(mensagem)
            }
        },
        cache: false,
        contentType: false,
        processData: false,
    });
});



// Ajax para manipulação dos PARCEIROS

$("#form-inserir-parceiro").submit(function () {
    event.preventDefault();
    var formData = new FormData(this);
    $.ajax({
        url: "inserir-parceiros.php",
        type: 'POST',
        data: formData,
        success: function (mensagem) {
            $('#mensagem-inserir').text('')
            $('#mensagem-inserir').removeClass()
            if (mensagem.trim() == "Salvo com Sucesso!") {
                //$('#nome').val('');
                //$('#cpf').val('');
                $('#btn-fechar-inserir').click();
                window.location = "parceiros.php";
            } else {
                $('#mensagem-inserir').addClass('text-danger')
                $('#mensagem-inserir').text(mensagem)
            }
        },
        cache: false,
        contentType: false,
        processData: false,
    });
});


$("#form-parceiro-editar").submit(function () {
    event.preventDefault();
    var formData = new FormData(this);
    $.ajax({
        url: "editar-parceiros.php",
        type: 'POST',
        data: formData,
        success: function (mensagem) {
            $('#mensagem-editar').text('')
            $('#mensagem-editar').removeClass()
            if (mensagem.trim() == "Salvo com Sucesso!") {
                //$('#nome').val('');
                //$('#cpf').val('');
                $('#btn-fechar-editarr').click();
                window.location = "parceiros.php";
            } else {
                $('#mensagem-editar').addClass('text-danger')
                $('#mensagem-editar').text(mensagem)
            }
        },
        cache: false,
        contentType: false,
        processData: false,
    });
});


$("#form-parceiro-excluir").submit(function () {
    event.preventDefault();
    var formData = new FormData(this);
    $.ajax({
        url: "excluir-parceiros.php",
        type: 'POST',
        data: formData,
        success: function (mensagem) {
            $('#mensagem-excluir').text('')
            $('#mensagem-excluir').removeClass()
            if (mensagem.trim() == "Excluido com Sucesso!") {
                //$('#nome').val('');
                //$('#cpf').val('');
                window.location = "parceiros.php";
            } else {
                $('#mensagem-excluir').addClass('text-danger')
                $('#mensagem-excluir').text(mensagem)
            }
        },
        cache: false,
        contentType: false,
        processData: false,
    });
});



// Ajax para manipulação das Notícias

$("#form-inserir-noticia").submit(function () {
    event.preventDefault();
    var formData = new FormData(this);
    $.ajax({
        url: "../../post.php",
        type: 'POST',
        data: formData,
        success: function (mensagem) {
            $('#mensagem-inserir').text('')
            $('#mensagem-inserir').removeClass()
            if (mensagem.trim() == "Salvo com Sucesso!") {
                //$('#nome').val('');
                //$('#cpf').val('');
                $('#btn-fechar-inserir').click();
                window.location = "posts.php";
            } else {
                $('#mensagem-inserir').addClass('text-danger')
                $('#mensagem-inserir').text(mensagem)
            }
        },
        cache: false,
        contentType: false,
        processData: false,
    });
});


$("#form-noticia-editar").submit(function () {
    event.preventDefault();
    var formData = new FormData(this);
    $.ajax({
        url: "editar-noticias.php",
        type: 'POST',
        data: formData,
        success: function (mensagem) {
            $('#mensagem-editar').text('')
            $('#mensagem-editar').removeClass()
            if (mensagem.trim() == "Salvo com Sucesso!") {
                //$('#nome').val('');
                //$('#cpf').val('');
                $('#btn-fechar-editarr').click();
                window.location = "noticias.php";
            } else {
                $('#mensagem-editar').addClass('text-danger')
                $('#mensagem-editar').text(mensagem)
            }
        },
        cache: false,
        contentType: false,
        processData: false,
    });
});


$("#form-noticia-excluir").submit(function () {
    event.preventDefault();
    var formData = new FormData(this);
    $.ajax({
        url: "excluir-noticias.php",
        type: 'POST',
        data: formData,
        success: function (mensagem) {
            $('#mensagem-excluir').text('')
            $('#mensagem-excluir').removeClass()
            if (mensagem.trim() == "Excluido com Sucesso!") {
                //$('#nome').val('');
                //$('#cpf').val('');
                window.location = "noticias.php";
            } else {
                $('#mensagem-excluir').addClass('text-danger')
                $('#mensagem-excluir').text(mensagem)
            }
        },
        cache: false,
        contentType: false,
        processData: false,
    });
});










