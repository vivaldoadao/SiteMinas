

<?php
  include('../app/controllers/newslatter.php');
 
?>
<?php
  session();
?>

<!DOCTYPE html>
<html>

<?php

    include('includes/head.php');

  
?>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Navbar -->
   <?php
      include('includes/navbar.php');

      

        ?>
        <!-- /.navbar -->
        <?php
       include('includes/sidebar.php');
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
                            <h1 class="m-0 text-dark">NEWSLATTER</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active">Novo Email</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <div class="col-md-12" style="margin-left: 10px;">
                <a href="newslatter_create.php"  style="margin-bottom: 10px;" type="button" class="btn btn-success">
                    Novo E-mail
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
                                        <th>E-mail</th>
                                       
                                      
                                        <th>Acções</th>

                                    </tr>
                                </thead>
                                <tbody>

                                    <?php foreach ($newslatters as $key => $newslatter):?>

                                        <tr>
                                            <td><?php  echo $key + 1;   ?></td>
                                            <td><?php  echo $newslatter['email'];   ?></td>
                                        
                                           

                                            <td>
                                                <div class="btn-group btn-group-sm-md-12 center">
                                                <a href="newslatter_edit.php?id=<?php  echo $newslatter['id'];   ?>"  class="btn btn-info" title="Editar Registro"><i class="fas fa-edit"></i></a>

                                                    <a href="newslatter.php?del_id=<?php  echo $newslatter['id'];   ?>"  class="btn btn-danger" title="Excluir Registro"><i class="fas fa-trash"></i></a>
                                                </div>
                                            </td>
                                        </tr>

                                    <?php endforeach; ?>

                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>ID</th>
                                        <th>Email</th>
                                      
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

<!-- /.modal -->
<!-- /.modal    Inserir-->
<!-- /.modal -->
<!-- /.modal Excluir -->
<!-- /.modal -->

</html>



<script src="assets/js/ajax.js"></script>

<!--SCRIPT PARA CARREGAR IMAGEM -->
