
<?php
  include('../app/controllers/posts.php');

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
                            <h1 class="m-0 text-dark">NOTÍCIA</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active">Lista de Notícias</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <div class="col-md-12" style="margin-left: 10px;">
                <a href="post_create.php"  style="margin-bottom: 10px;" type="button" class="btn btn-success">
                    Nova Notícia
                </a>

            </div>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <!-- /.card -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Lista de Notícias</h3>
                            <a href="comments.php" type="button"  style="margin-left: 900px;" class="btn btn-outline-success btn-sm">Ver Comentários</a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                        <th>Titulo</th>
                                       
                                        
                                        <th>Data da Criação</th>
                                        <th>Imagem</th>
                                        <th>Em Destaque</th>
                                        <th>Publicado</th>
                                        <th>Acções</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($posts as $key => $post):?>
                                        <tr>
                                            <td><?php  echo $key +1;   ?></td>
                                            <td><?php  echo $post['title'];   ?></td>
                                            
                                            
                                            <td><?php  echo date('F j, Y', strtotime($post['created_on']));   ?></td>
                                            <td><img src="../admin/assets/img/post/<?php echo $post['image']?>" alt="..." class="img-thumbnail" style="width: 100px;"></td>
                                            <?php if($post['emphasis']):    ?>
                                            
                                            <td><a href="post_edit.php?emphasis=0&p_id=<?php echo $post['id'];  ?>" type="button"  style="margin-bottom: 20px;" class="btn btn-outline-success btn-sm">Sim</a></td>

                                            <?php    else: ?>

                                             <td><a href="post_edit.php?emphasis=1&p_id=<?php echo $post['id'];  ?>" type="button"  style="margin-bottom: 20px;" class="btn btn-outline-danger btn-sm">Não</a></td>
                                            <?php  endif;  ?>

                                           
                                           
                                           
                                            <?php if($post['published']):    ?>
                                            
                                            <td><a href="post_edit.php?published=0&p_id=<?php echo $post['id'];  ?>" type="button"  style="margin-bottom: 20px;" class="btn btn-outline-success btn-sm">Sim</a></td>

                                            <?php    else: ?>

                                             <td><a href="post_edit.php?published=1&p_id=<?php echo $post['id'];  ?>" type="button"  style="margin-bottom: 20px;" class="btn btn-outline-danger btn-sm">Não</a></td>
                                            <?php  endif;  ?>


                                            
                                           
                                            <td>
                                                <div class="btn-group btn-group-sm-md-12 center">
                                                    <a href="post_edit.php?id=<?php echo $post['id'];  ?>"  class="btn btn-outline-info btn-sm" title="Editar Registro"><i class="fas fa-edit"></i></a>

                                                    <a href="post_ver.php?id=<?php echo $post['id'];  ?>"  class="btn btn-outline-success btn-sm"  title="Ver detalhes"><i class="fas fa-eye"></i></a>

                                                    <a href="post_edit.php?delete_id=<?php echo $post['id'];  ?>"  class="btn btn-outline-danger btn-sm" title="Excluir Registro"><i class="fas fa-trash"></i></a>

                                                </div>
                                                
                                            </td>
                                        </tr>

                                        <?php endforeach; ?>

                                </tbody>
                                <tfoot>
                                <tr>

                                    <th>ID</th>
                                        <th>Titulo</th>
                                        
                                       
                                        <th>Data da Criação</th>
                                        <th>Imagem</th>
                                        <th>Em Destaque</th>
                                        <th>Estado</th>
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

        <!-- /.modal    Inserir-->

        <!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade bd-example-modal-lg" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      <?php echo $post['id'];  ?>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        
      </div>
    </div>
  </div>
</div>

<!-- /.modal -->
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
