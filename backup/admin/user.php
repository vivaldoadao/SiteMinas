

<?php

include('../app/controllers/users.php');

?>
<?php
  session();
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
                            <h1 class="m-0 text-dark">USUÁRIO</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active">Lista Usuário</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <div class="col-md-12" style="margin-left: 10px;">
                <a href="user_create.php"  style="margin-bottom: 10px;" type="button" class="btn btn-success">
                    Novo Usuário
                </a>

            </div>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">




                    <!-- /.card -->

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Lista de Usuários</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nome</th>
                                        <th>Email</th>
                                        
                                        <th>Data da Criação</th>

                                        <th>Acções</th>

                                    </tr>
                                </thead>
                                <tbody>

                                  
                                <?php foreach ($users as $key => $user):?>
                                        <tr>
                                            <td><?php  echo $key +1;   ?></td>
                                            <td><?php  echo $user['username'];   ?></td>
                                            <td><?php  echo $user['email'];   ?></td>
                                              
                                            
                                            <td><?php  echo $user['created_at'];   ?></td>
                                           
                                            <td>
                                                <div class="btn-group btn-group-sm-md-12 center">
                                                    <a href="user_edit.php?id=<?php echo $user['id'];  ?>"  class="btn btn-info" title="Editar Registro"><i class="fas fa-edit"></i></a>

                                                    <a href="user.php?delete_id=<?php echo $user['id'];  ?>"  class="btn btn-danger" title="Excluir Registro"><i class="fas fa-trash"></i></a>

                                                    
                                                </div>
                                                
                                            </td>
                                        </tr>

                                        <?php endforeach; ?>

                                  


                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nome</th>
                                        <th>Email</th>
                                        
                                        <th>Data da Criação</th>
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
                <h4 class="modal-title"><span id="tituloModal">Inserir Usuário</span></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form class="form-horizontal" id="form-inserir-usuario" method="POST">
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
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Senha </label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" id="senha" name="senha" placeholder="Senha de Usuário" required>
                            </div>
                        </div>

                        <div class="form-group  row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Nível </label>
                            <select class="form-control select2" name="nivel" style="width: 100%;">
                             

                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Imagem</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="form-control-file" name="imagem" id="imagem" onChange="carregarImg();">

                                </div>

                                <div id="divImg" class="input-group-append">
                                    <img src="../img/sem-imagem.jpg" width="300px" id="target">
                                </div>

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
                <h4 class="modal-title"><span id="tituloModal">Editar Dados do Usuário</span></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form class="form-horizontal" id="form-usuario-editar" method="POST">
                <div class="modal-body">
                <div class="card-body">

                <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Nome </label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="nome-editar" name="nome-editar" placeholder="Nome de Usuário" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Email </label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="email-editar" name="email-editar" placeholder="Email de Usuário" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Senha </label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" id="senha-editar" name="senha-editar" placeholder="Senha de Usuário" required>
                            </div>
                        </div>

                        <div class="form-group  row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Nível </label>
                            <select class="form-control select2" id="nivel-editar" name="nivel-editar" style="width: 100%;">
                             

                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Imagem</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="form-control-file" name="imagem-editar" id="imagem-editar" onChange="carregarImg();">

                                </div>

                                <div id="divImg" class="input-group-append">
                                    <img src="../img/sem-imagem.jpg" width="300px" id="target">
                                </div>

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
            <form class="form-horizontal" id="form-usuario-excluir" method="POST">
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



<script src="js/ajax.js"></script>

<!--SCRIPT PARA CARREGAR IMAGEM -->
