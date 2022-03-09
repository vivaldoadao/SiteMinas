
<?php
  include('../app/controllers/advertise.php');

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
                            <h1 class="m-0 text-dark">PUBLICIDADE</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active">Lista de Publicidades</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <div class="col-md-12" style="margin-left: 10px;">
                <a href="advertise_create.php"  style="margin-bottom: 10px;" type="button" class="btn btn-success">
                    Nova Publicidade
                </a>

            </div>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <!-- /.card -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Lista de Publicidades</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    
                                        <th>Nome</th>
                                        <th>Posição</th>
                                        <th>Data de Início </th>
                                        <th>Data de Fim </th>
                                        <th>Imagem</th>
                                        <th>Publicado</th>
                                        <th>Acções</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($advertises as $key => $advertise):?>
                                        <tr>
                                            
                                            <td><?php  echo $advertise['name'];   ?></td>
                                            <td><?php  echo $advertise['position'];   ?></td>
                                            <td><?php  echo date('F j, Y', strtotime($advertise['startDate']));   ?></td>
                                            <td><?php  echo date('F j, Y', strtotime($advertise['endDate']));   ?></td>
                                            
                                            
                                            <td>
                                                <?php if($advertise['published']):    ?>
                                            
                                                <td><a href="advertise_edit.php?published=0&p_id=<?php echo $advertise['id'];  ?>" type="button"  style="margin-bottom: 20px;" class="btn btn-success">Sim</a>
                                                </td>

                                                <?php    else: ?>

                                                <td><a href="advertise_edit.php?published=1&p_id=<?php echo $advertise['id'];  ?>" type="button"  style="margin-bottom: 20px;" class="btn btn-danger">Não</a>
                                                </td>
                                                <?php  endif;  ?>

        
                                           </td>

                                            <td>
                                                <div class="btn-group btn-group-sm-md-12 center">
                                                    <a href="advertise_edit.php?id=<?php echo $advertise['id'];  ?>"  class="btn btn-info" title="Editar Registro"><i class="fas fa-edit"></i></a>

                                                    <a href="advertise_edit.php?delete_id=<?php echo $advertise['id'];  ?>"  class="btn btn-danger" title="Excluir Registro"><i class="fas fa-trash"></i></a>

                                                    
                                                </div>
                                                
                                            </td>
                                        </tr>

                                        <?php endforeach; ?>

                                </tbody>
                                <tfoot>
                                <tr>

                                       
                                        <th>Nome</th>
                                        <th>Posição</th>
                                        <th>Data de Início </th>
                                        <th>Data de Fim </th>
                                        <th>Imagem</th>
                                        <th>Publicado</th>
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
