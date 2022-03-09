

<?php

include('../app/controllers/posts.php');

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
                            <h1 class="m-0 text-dark">NOTÍCIA</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active">Editar Notícia</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <div class="col-md-12" style="margin-left: 10px;">
                <a href="posts.php" onclick="inserir()" style="margin-bottom: 10px;" type="button" class="btn btn-success">
                    Gestã de Notícias
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
                <h3 class="card-title">Editar  <small>Notícia</small></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="post_edit.php" method="post"  enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                  <?php  include('../app/helpers/formErrors.php');?>
                 

                  <div class="row">

                  <div class="col-sm-6">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Titulo</label>
                                    <input type="text" id="title" value="<?php echo $title; ?>"  name="title" class="form-control" placeholder="Enter ...">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Categoria</label>
                                    <select class="form-control select2" name="category_id" id="category_id" style="width: 100%;">
                                      <option value=""></option>

                                      <?php foreach ($categories as $key => $category):?>

                                        <?php  if(!empty($category_id) && $category_id == $category['id']): ?>

                                          <option selected value="<?php  echo $category['id'];   ?>"><?php  echo $category['name'];   ?></option>


                                        <?php  else: ?>

                                          <option value="<?php  echo $category['id'];   ?>"><?php  echo $category['name'];   ?></option>


                                        <?php endif; ?>

            
                                      <?php endforeach; ?>
                                  
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            
                            <div class="col-sm-12">
                            <textarea  type="text" class="form-control" id="editor"  name="body" placeholder="descrição" ><?php echo $body; ?></textarea>
                            </div>
                        </div>

                        <div class="form-group mb-0">
                    <div class="custom-control custom-checkbox">

                    <?php  if(empty($published) && $published == 0): ?>

                      <input type="checkbox" name="published"  class="custom-control-input" id="exampleCheck1">
                      <label class="custom-control-label" for="exampleCheck1">Publicar</label>


                      <?php  else: ?>

                      <input type="checkbox" name="published"  class="custom-control-input" id="exampleCheck1" checked>
                      <label class="custom-control-label" for="exampleCheck1">Publicar</label>

                      <?php endif; ?>

                     
                    </div>
                  </div>
                  
                  <div class="form-group mb-0">
                        <div class="form-check">
                        
                        <?php  if(empty($emphasis)): ?>



                        <input type="checkbox" name="emphasis" class="form-check-input" id="exampleCheck1">
                       <label class="form-check-label"for="exampleCheck1">Em Destaque</label>
                       <?php  else: ?>

                        <input type="checkbox" name="emphasis" class="form-check-input" id="exampleCheck1" checked>
                       <label class="form-check-label"for="exampleCheck1">Em Destaque</label>

                        <?php endif; ?>
                      
                       </div>
                      
                      </div>
  
                  </div>
                  <div class="form-group">
                            
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="form-control-file" name="image" id="image" onChange="carregarImg();">

                                </div>

                                <div id="divImg" class="input-group-append">
                                    <img src="../img/sem-imagem.jpg" width="300px" id="target">
                                </div>

                            </div>
                        </div>

                </div>

                <div id="mensagem-inserir"></div>
                        <input type="hidden"  value="<?php echo $id; ?>"  id="id" name="id">
                    </div>
                
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" name="update-post" class="btn btn-primary">Criar</button>
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

<!--SCRIPT PARA CARREGAR IMAGEM -->
<script type="text/javascript">
    function carregarImg() {

        var target = document.getElementById('target');
        var file = document.querySelector("input[type=file]").files[0];
        var arquivo = file['name'];
        resultado = arquivo.split(".", 2);
        //console.log(resultado[1]);
        if (resultado[1] === 'pdf') {
            $('#target').attr('src', "../img/pdf.png");
            return;
        }
        var reader = new FileReader();
        reader.onloadend = function() {
            target.src = reader.result;
        };
        if (file) {
            reader.readAsDataURL(file);
        } else {
            target.src = "";
        }
    }
</script>
