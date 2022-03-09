

<?php  include('../app/controllers/comments.php');  
?>



<?php 

$comments = new Comment($db);

?>


<?php   


if (isset($_POST['aprovar'])) {
    # code...
    $result = $comments->upDate($_POST['aprovedID']);
    if ($result == true) {
        # code...
        echo "Comentário Aprovado";
    }
}

if (isset($_POST['deletar'])) {
    # code...
    $result = $comments->Delete($_POST['deleteID']);
    if ($result == true) {
        # code...
        echo "Comentário Deletado";
    }
}

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
                            <h1 class="m-0 text-dark">COMENTÁRIO</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active">Lista de Comentários</li>
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
                            <h3 class="card-title">Lista de Comentários</h3>
                            <a href="posts.php" type="button"  style="margin-left: 900px;" class="btn btn-outline-success btn-sm">Ver Notícias</a>
                        
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                <th>Nome</th>
                <th>assunto</th>
                <th>Descrição</th>
                <th>Criado em</th>
                <th>actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($comments->getPendingComments() as $comment) {?>
                                        <tr>
                                        <td><?php echo $comment['name']; ?></td>
                                        <td><?php echo $comment['subject']; ?></td>
                                        <td><?php echo $comment['description']; ?></td>
                                            
                                            
                                            <td><?php  echo date('F j, Y', strtotime($comment['created_at']));   ?></td>
                                        
                                            <td>
                                            <form action="#" method="post">
                <input name="aprovedID" type="hidden" value="<?php echo $comment['id']; ?>">
                <button name="aprovar" type="submit" class="btn btn-outline-success btn-sm" >AP</button>
                
                </form>

                <form action="#" method="post">
                <input name="deleteID" type="hidden" value="<?php echo $comment['id']; ?>">

                
                <button name="deletar" type="submit" class="btn btn-outline-danger btn-sm">DL</button>
                </form>
                                                
                                            </td>
                                        </tr>

                                        <?php  }?>

                                </tbody>
                                <tfoot>
                                <tr>

                                <th>Nome</th>
                <th>assunto</th>
                <th>Descrição</th>
                <th>Criado em</th>
                <th>actions</th>
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
