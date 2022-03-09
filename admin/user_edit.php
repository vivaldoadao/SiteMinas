

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
                                <li class="breadcrumb-item active">Editar Usuário</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <div class="col-md-12" style="margin-left: 10px;">
                <a href="user.php" onclick="inserir()" style="margin-bottom: 10px;" type="button" class="btn btn-success">
                    Gestã de Usuários
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
                <h3 class="card-title">Editar  <small>Usuário</small></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form  action="user_edit.php" method="post" id="quickForm2" enctype="multipart/form-data">
                <div class="card-body">
                <?php   

include('../app/helpers/formErrors.php');


?>
                  <div class="form-group">

                  <div class="row">
                    
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                    <label for="exampleInputEmail1">Nome</label>
                    <input type="text" name="username" value="<?php  echo $username   ?>" class="form-control" id="exampleInputEmail1" placeholder="Inserir Nome">
                  </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                      <label for="exampleInputEmail1">Email address</label>
                    <input type="email" name="email" value="<?php  echo $email   ?>" class="form-control" id="exampleInputEmail1" placeholder="Inserir E-mail">
                  
                      </div>
                    </div>
                  </div>


                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="password" value="<?php  echo $password   ?>" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>
                 
                    </div>
                    <div class="col-sm-6">
                    <div class="form-group">
                    <label for="exampleInputEmail1">Confirmar Password</label>
                    <input type="password" name="passwordConf" value="<?php  echo $passwordConf   ?>" class="form-control" id="exampleInputEmail1" placeholder="Cnfirmar a Password">
                  </div>
                      </div>
                    </div>
                  </div>
                  

                  <div class="row">
                
                 
                  <div class="form-group mb-0">
                    <div class="custom-control custom-checkbox">

                  

                    <?php  if(isset($admin) && $admin == 1): ?>

                      <input type="checkbox" name="admin"  class="custom-control-input" id="exampleCheck1" checked>
                      <label class="custom-control-label" for="exampleCheck1">Administrador</label>


                      <?php  else: ?>

                      <input type="checkbox" name="admin"  class="custom-control-input" id="exampleCheck1" >
                      <label class="custom-control-label" for="exampleCheck1">Administrador</label>

                      <?php endif; ?>


    
                     
                    </div>
                 
                    
                  </div>


                  
  
                        
                  
                      </div>
                   
                      


                      <div class="row">
                        <div class="col-md-1">
                          <div class="card-footer">
                            <button type="submit" name="update-user" class="btn btn-primary">Editar</button>
                          </div>
                        </div>
                        <div class="col-md-11">
                          <div class="card-footer">
                          <a href="user.php"   type="button" class="btn btn-danger">Cancelar</button></a>
                            
                          </div>
                        </div>
                    </div>









                    
              
                  </div>
                  
                      
                 
                 
                  <div id="mensagem-inserir"></div>
                        <input type="hidden"  value="<?php echo $id; ?>"  id="id" name="id">
                    </div>
                      
                    </div>
                
                <!-- /.card-body -->
               
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



<script src="js/ajax.js"></script>
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
