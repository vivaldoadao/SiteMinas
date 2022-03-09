<?php
	

	include('comments.php');


	?>


<?php  
$comments = new Comment($db);
?>

<?php
	
	include('app/controllers/site.php');
	
	if (isset($_GET['id'])) {
		$post = selectOne('post',['id' => $_GET['id']]);
		
	}


	

$contactos = selectAll('contacts');
	
$topadvertises = topadvertise();
$posts = getPublishedPosts();
$centroAdvertises = centroAdvertise();
$downAdvertises = downAdvertise();
$sideBarAdvertises = sideBarAdvertise();
$getPostsByCategoryENTREVISTAS = getPostsByCategoryENTREVISTAS();
$getPostsByCategoryVÍDEOS_EVENTOS = getPostsByCategoryVÍDEOS_EVENTOS();
$dt = new DateTime("now" , new DateTimeZone('WAT'));
	
	?>


<!DOCTYPE html>
<html lang="en">
<head>

	<!-- Basic Page Needs
	================================================== -->
	<meta charset="utf-8">
	<title>Minas de Angola</title>

	<!-- Mobile Specific Metas
	================================================== -->

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

	<!--Favicon-->
	<link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon">
	<link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
	
	<!-- CSS
	================================================== -->
	
	<!-- Bootstrap -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<!-- Template styles-->
	<link rel="stylesheet" href="assets/css/style.css">
	<!-- Responsive styles-->
	<link rel="stylesheet" href="assets/css/responsive.css">
	<!-- FontAwesome -->
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
	<!-- Animation -->
	<link rel="stylesheet" href="assets/css/animate.css">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="assets/css/owl.carousel.min.css">
	<link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
	<!-- Colorbox -->
	<link rel="stylesheet" href="assets/css/colorbox.css">

	<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->

</head>
	
<body>

	<div class="body-inner">
	<?php  include('app/includes/trending.php'); ?><!--/ Trending end -->


	<!--/ start Top bar -->
	<?php  include('app/includes/topbar.php'); ?>
	
	<!--/ End top bar -->

	<!--/ Trending end -->

	<!-- Header start -->
	<?php  include('app/includes/header.php'); ?>
<!--/ Header end -->

	<!-- Menu wrapper star -->
	<?php  include('app/includes/navbar.php'); ?>
	<!-- Menu wrapper end -->

	<div class="gap-40"></div>

	<div class="page-title">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<ol class="breadcrumb">
     					<li><a href="index.php">Início</a></li>
     					<li><a href="#">Contacto</a></li>
     					
     				</ol>
				</div><!-- Col end -->
			</div><!-- Row end -->
		</div><!-- Container end -->
	</div><!-- Page title end -->

	<section class="block-wrapper">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">

				<h3>Contacta-nos</h3>
			

				<div class="widget contact-info">
				<?php   foreach ($contactos as $contacto): ?>

					<div class="contact-info-box">
						<div class="contact-info-box-content">
							<h4>Nosso Endereço</h4>
							<p><?php  echo $contacto['address'];   ?></p>
						</div>
					</div>

					<div class="contact-info-box">
						<div class="contact-info-box-content">
							<h4>Envia-nos um E-mail</h4>
							<p><?php  echo $contacto['email'];   ?></p>
						</div>
					</div>

					<div class="contact-info-box">
						<div class="contact-info-box-content">
							<h4>Liga-nos</h4>
							<p><?php  echo $contacto['phone'];   ?></p>
						</div>
					</div>

					<?php   endforeach;?>

				</div><!-- Widget end -->

				<h3>Formulário de Contacto</h3>
	    			<form id="contact-form" action="contact-form.php" method="post" role="form">
	    				<div class="error-container"></div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label>Name</label>
								<input class="form-control form-control-name" name="name" id="name" placeholder="Seu Nome" type="text" required>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label>Email</label>
									<input class="form-control form-control-email" name="email" id="email" 
									placeholder="Seu Email" type="email" required>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label>Assunto</label>
									<input class="form-control form-control-subject" name="subject" id="subject" 
									placeholder="Assunto" required>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label>Mensagem</label>
							<textarea class="form-control form-control-message" name="message" id="message" placeholder="Escreva a sua mensagem" rows="10" required></textarea>
						</div>
						<div class="text-right"><br>
							<button class="btn btn-primary solid blank"  type="submit">Enviar Mensagem</button> 
						</div>
					</form>



				</div><!-- Content Col end -->

				<<?php  include('app/includes/sidebar.php'); ?><!-- Sidebar Col end -->

			</div><!-- Row end -->
		</div><!-- Container end -->
	</section><!-- First block end -->

	<?php  include('app/includes/footer.php'); ?>
	<!-- Body inner end -->
</body>
</html>