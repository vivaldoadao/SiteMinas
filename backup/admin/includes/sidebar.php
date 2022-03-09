

<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="index.php" class="brand-link">
    <img src="assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">ZNAT CMS</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="assets/dist/img/avatar.png" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">
          <?php
          echo @$_SESSION['username'];
          ?>
        </a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <li class="nav-item has-treeview menu-open">
          <a href="index.php" class="nav-link active">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>

        </li>
        <li class="nav-header">GESTÃO DE USUÁRIOS</li>


        <li class="nav-item has-treeview">
          <a href="user.php" class="nav-link">
            <i class="fas fa-users"></i>
            <p>
              Usuários

              <span class="badge badge-info right"></span>
            </p>
          </a>

        </li>
         <!-- 
        <li class="nav-item has-treeview">
          <a href="roles.php" class="nav-link">
            <i class="fas fa-lock"></i>
            <p>
              Níveis de Usuários

              <span class="badge badge-info right"></span>
            </p>
          </a>

           -->

        </li>
        <li class="nav-header">GESTÃO DE NOTÍCIAS</li>
        <li class="nav-item has-treeview">
           <!-- /.sidebar-menu
          <a href="category.php" class="nav-link">
            <i class="fas fa-newspaper"></i>
            <p>

              Categorias
              <span class="badge badge-info right"></span>
            </p>
          </a>
           -->

        </li>

        <li class="nav-item has-treeview">
          <a href="posts.php" class="nav-link">
            <i class="fas fa-tv"></i>
            <p>

              Notícias
              <span class="badge badge-info right"></span>
            </p>
          </a>

        </li>

        <li class="nav-header">OUTRAS FUNCIONALIDADES</li>

        <li class="nav-item has-treeview">
          <a href="advertise.php" class="nav-link">
            <i class="fas fa-file-powerpoint"></i>
            <p>

              Publicidades
              <span class="badge badge-info right"></span>
            </p>
          </a>

        </li>
         <!-- /.sidebar-menu
        <li class="nav-item has-treeview">
          <a href="slides.php" class="nav-link">
            <i class="fas fa-file-powerpoint"></i>
            <p>

              Slides
              <span class="badge badge-info right"></span>
            </p>
          </a>

        </li>

       
        <li class="nav-item has-treeview">
          <a href="services.php" class="nav-link">
            <i class="fas fa-blog"></i>
            <p>

              Serviços
              <span class="badge badge-info right"></span>
            </p>
          </a>

        </li>

       
   
        <li class="nav-item has-treeview">
          <a href="partners.php" class="nav-link">
            <i class="fas fa-handshake"></i>
            <p>

              Parceiros
              <span class="badge badge-info right"></span>
            </p>
          </a>

        </li>
         -->

         <li class="nav-item has-treeview">
          <a href="video.php" class="nav-link">
            <i class="fas fa-tv"></i>
            <p>

              Vídeos
              <span class="badge badge-info right"></span>
            </p>
          </a>
        
        <li class="nav-item has-treeview">
          <a href="contacto.php" class="nav-link">
            <i class="fas fa-phone"></i>
            <p>

              Contacto
              <span class="badge badge-info right"></span>
            </p>
          </a>

        </li>

        <li class="nav-item has-treeview">
          <a href="newslatter.php" class="nav-link">
            <i class="fas fa-envelope"></i>
            <p>

              Newslatter
              <span class="badge badge-info right"></span>
            </p>
          </a>

        </li>


        <li class="nav-item has-treeview">
          <a href="logout.php" class="nav-link">
            <i class="fas fa-power-off"></i>
            <p>

              Sair
              <span class="badge badge-info right"></span>
            </p>
          </a>

        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>