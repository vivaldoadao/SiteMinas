
<?php
  include('../app/controllers/posts.php');
  include('../comments.php');

?>
<?php
  session();
?>

<?php

if (isset($_GET['id'])) {
		$p = selectOne('post',['id' => $_GET['id']]);
		
	}

?>

<?php
$comments = new Comment($db);

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
                                <li class="breadcrumb-item active">Detalhe da Notícia</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <div class="col-md-12" style="margin-left: 10px;">
                <a href="posts.php"  style="margin-bottom: 10px;" type="button" class="btn btn-success">
                    Gestão de Notícias
                </a>

            </div>

            <!-- Main content -->
            <section class="content">

<!-- Default box -->
<div class="card card-solid">
  <div class="card-body">
    <div class="row">
      <div class="col-12 col-sm-6">
        <h3 class="d-inline-block d-sm-none"><?php  echo $p['title'];  ?></h3>
        <div class="col-12">
          <img src="../admin/assets/img/post/<?php echo $p['image']?>" class="product-image" alt="Product Image">
        </div>

      </div>
      <div class="col-12 col-sm-6">
        <h3 class="my-3"><?php  echo $p['title'];  ?>w</h3>
        <p><?php  echo html_entity_decode($p['body']);   ?></p>

        <hr>
        <h5>Data da Criação  <small><?php  echo date('F j, Y', strtotime($post['created_on']));   ?></small></h5>
        <div class="btn-group btn-group-toggle" data-toggle="buttons">
        
        
       <span class="post-hits"></i>Número de Vizualizações : <span><?php  echo $comments->countPostsViews($_GET['id']); ?></span>
          
        
      

      </div>
    </div>

  </div>
  <!-- /.card-body -->
</div>
<!-- /.card -->

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
