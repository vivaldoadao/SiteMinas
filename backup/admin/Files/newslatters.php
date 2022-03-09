<?php
//@session_start();

//require_once("../conexao.php");
//require_once("../painel-adm/verificar.php");
?>
<!DOCTYPE html>
<html>
<?php
require_once("includes/head.php");
?>
<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <!-- Navbar -->
        <?php
        require_once("includes/navbar.php");
        ?>
        <!-- /.navbar -->
        <?php
        require_once("includes/sidebar.php");
        ?>
        <!-- Main Sidebar Container -->
        <!-- /.sidebar -->
        </aside>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark">Dashboard</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Dashboard v1</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <div class="col-md-12" style="margin-left: 10px;">
                <a href="#" onclick="inserir()" style="margin-bottom: 10px;" type="button" class="btn btn-success">
                    Novo Email
                </a>

            </div>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <!-- /.card -->

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Lista de Emails</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nome</th>
                                        <th>Email</th>
                                        <th>Data do Registro</th>
                                        <th>Acções</th>

                                    </tr>
                                </thead>
                                <tbody>

                                  
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>

                                            <td>
                                                <div class="btn-group btn-group-sm-md-12 center">
                                                    <a href="#" onclick="editar('<?php echo $res2[$i]['id']      ?>','<?php echo $res2[$i]['nome']      ?>' ,'<?php echo $res2[$i]['email']      ?>' , '<?php echo $res2[$i]['created_on']?>' )" class="btn btn-info" title="Editar Registro"><i class="fas fa-edit"></i></a>

                                                    <a href="#" onclick="excluir('<?php echo $res2[$i]['id']      ?>  ','<?php echo $res2[$i]['nome']    ?>' )" class="btn btn-danger" title="Excluir Registro"><i class="fas fa-trash"></i></a>
                                                </div>
                                            </td>

                        
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nome</th>
                                        <th>Email</th>
                                        <th>Data do Registro</th>
                                        <th>Acções</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->




                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->


        <!-- /.footer -->
        <?php
        require_once("includes/footer.php");

        ?>
        <!-- /.footer -->




</body>
<!-- /.modal    Inserir-->

<div class="modal fade" id="modal-lg-inserir">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"><span id="tituloModal">Novo Email</span></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form class="form-horizontal" id="form-inserir-newslatter" method="POST">
                <div class="modal-body">

                    <div class="card-body">
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Nome </label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome de Usuário" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Email </label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email de Usuário" required>
                            </div>
                        </div>
                       

                      
                        <div id="mensagem-inserir"></div>


                        <input type="hidden" class="form-control" id="id" name="id">

                    </div>
                    <!-- /.card-body -->

                    <!-- /.card-footer -->


                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-secondary" id="btn-fechar-inserir" data-dismiss="modal">Sair</button>
                    <button type="submit" class="btn btn-primary">Salvar</button>


                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->



<!-- /.modal    Inserir-->

<div class="modal fade" id="modal-lg-editar">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"><span id="tituloModal">Editar Email</span></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form class="form-horizontal" id="form-newslatter-editar" method="POST">
                <div class="modal-body">
                <div class="card-body">

                <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Nome </label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="nome-editar" name="nome-editar" placeholder="Nome " required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Email </label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="email-editar" name="email-editar" placeholder="Email" required>
                            </div>
                        </div>
                        <div id="mensagem-editar"></div>
                        <input type="hidden" class="form-control" id="id-editar" name="id-editar">
                    </div>
                    <!-- /.card-body -->

                    <!-- /.card-footer -->
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-secondary" id="btn-fechar-editar" data-dismiss="modal">Sair</button>
                    <button type="submit" class="btn btn-primary">Salvar</button>


                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->


<!-- /.modal Excluir -->

<!-- /.modal -->

<div class="modal fade" id="modal-lg-excluir">
    <div class="modal-dialog">
        <div class="modal-content bg-danger">
            <div class="modal-header">
                <h4 class="modal-title"><span id="tituloModal">Deletar Registro</span></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form class="form-horizontal" id="form-newslatter-excluir" method="POST">
                <div class="modal-body">

                    <div class="card-body">

                        <p> Deseja Realmente Deletar este Registro ?</p>
                        <div id="mensagem-excluir"></div>
                        <input type="hidden" class="form-control" id="id-excluir" name="id-excluir">

                    </div>

                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-outline-light" id="btn-fechar-excluir" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-outline-light">Delete</button>


                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
</html>

<script>

function limparCampo() {

$('#id').val('');
$('#nome').val('');
$('#email').val('');
$('#mensagem-inserir').text('');


}
    function editar(id, nome, email) {
        $('#mensagem-excluir').text('');
        $('#id-editar').val(id);
        $('#nome-editar').val(nome);
        $('#email-editar').val(email);
        $('#tituloModal').text('Editar Email');
        var myModal = new bootstrap.Modal(document.getElementById('modal-lg-editar'), {

        });
        myModal.show();

    }
    function inserir() {
        $('#mensagem-excluir').text('');

        $('#tituloModal').text('Email');
        var myModal = new bootstrap.Modal(document.getElementById('modal-lg-inserir'), {

        });
        myModal.show();
        limparCampo();
    }
    function excluir(id) {
        $('#id-excluir').val(id);

        $('#tituloModal').text('Excluir  Usuário');
        var myModal = new bootstrap.Modal(document.getElementById('modal-lg-excluir'), {

        });
        myModal.show();

    }
</script>

<script src="js/ajax.js"></script>