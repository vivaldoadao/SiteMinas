

<?php

include('../app/controllers/category.php');

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
                            <h1 class="m-0 text-dark">CATEGORIA</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active">Editar Categoria</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <div class="col-md-12" style="margin-left: 10px;">
                <a href="category.php" style="margin-bottom: 10px;" type="button" class="btn btn-success">
                    Gestã de Categorias
                </a>

            </div>

            <!-- Main content -->
           
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Editar <small>Categoria</small></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="category_edit.php" method="post" >
                <div class="card-body">
                  <div class="form-group">
                  <?php   

include('../app/helpers/formErrors.php');


?>

                  <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                    <label for="exampleInputEmail1">Nome</label>
                    <input type="text" name="name" value="<?php  echo $name;  ?>" class="form-control" id="exampleInputEmail1" placeholder="Inserir Nome">
                  </div>
                    </div>
                   
                  </div>
                </div>
                <input type="hidden" name="id" value="<?php  echo $id;  ?>">
                 
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" name="update-category" class="btn btn-primary">Criar</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
            </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">

          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
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




<!-- /.modal    Inserir-->


<!-- /.modal Excluir -->




<!-- /.modal -->

<!-- /.modal -->






</html>



<script src="assets/js/ajax.js"></script>
<script type="text/javascript">
$(document).ready(function () {
  $.validator.setDefaults({
    submitHandler: function () {
      alert( "Form successful submitted!" );
    }
  });
  $('#quickForm').validate({
    rules: {
      email: {
        required: true,
        email: true,
      },
      password: {
        required: true,
        minlength: 5
      },
      terms: {
        required: true
      },
      name: {
        required: true
      },
     
    },
    messages: {
      email: {
        required: "O campo E-mail é obrigatório",
        email: "Por favor insira um endereço de E-mail válido"
      },
      password: {
        required: "Please provide a password",
        minlength: "A sua senha deve conter no mínimo 5 letras"
      },
      name: {
        required: "O campo nome é obrigatório",
        minlength: "O seu nome deve conter no mínimo 5 letras"
      },
      terms: "Please accept our terms"
    },
   
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.form-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    }
  });
});
</script>


<!--SCRIPT PARA CARREGAR IMAGEM -->
