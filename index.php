
<?php
	

	include('comments.php');


	?>

<?php  
$comments = new Comment($db);
?>
<?php
	
include('app/controllers/site.php');
	

$posts = getPublishedPosts();
$destaquePosts = getEmphasisPosts();
$getMorePosts = getMorePosts();
$destaquePosts1 = getEmphasisPosts1();
$destaquePosts2 = getEmphasisPosts2();
$catPostsInternacionl = getPostsByCategory_INTERNACIONAL();
$catPostsInternacionl2 = getPostsByCategory_INTERNACIONAL2();
$catPostsSectorDiamantifero = getPostsByCategorySECTOR_DIAMANTIFERO();
$catPostsSectorDiamantifero2 = getPostsByCategorySECTOR_DIAMANTIFERO2();
$getPostsByCategoryENTREVISTAS = getPostsByCategoryENTREVISTAS();
$getPostsByCategoryVÍDEOS_EVENTOS = getPostsByCategoryVÍDEOS_EVENTOS();

$dt = new DateTime("now" , new DateTimeZone('WAT'));

$topadvertises = topadvertise();

$sideBarAdvertises = sideBarAdvertise();
$centroAdvertises = centroAdvertise();
$downAdvertises = downAdvertise();

//dd($topadvertise);


$table = 'newslatters';
$errors = array();
$id = '';
$email = '';
if (isset($_POST['add-newslatterSite'])) {
  // dd($_POST);
   $errors = validateNewslatterSite($_POST);

    if (count($errors) === 0) {
        unset($_POST['add-newslatterSite']);
        //dd($_POST);
        $newslatter_id = create($table, $_POST);
        $_SESSION['status']= "Muito obrigado o seu Email acaba de ser registrado na nossa base de dados!";
        $_SESSION['status_code']= "success";
        echo "<script> window.location = 'index.php' </script>";
        exit();
    }else {
        $email = $_POST['email'];
    }
  
}
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
	<?php  include('app/includes/trending.php'); ?>
<!--/ Trending end -->


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

	<section class="featured-post-area no-padding">
		<div class="container">
			<div class="row">
				<div class="col-md-7 col-xs-12 pad-r">
					<div id="featured-slider" class="owl-carousel owl-theme featured-slider">
					<?php   foreach ($destaquePosts as $destaquePost): ?>
						<div class="item" style="background-image:url(admin/assets/img/post/<?php echo $destaquePost['image']?>)">
							<div class="featured-post">
						 		<div class="post-content">
						 			<a class="post-cat" href="#"><?php  echo $destaquePost['name'];   ?></a>
						 			<h2 class="post-title title-extra-large">
						 				<a href="single.php?id=<?php  echo $destaquePost['id'];   ?>"><?php  echo $destaquePost['title'];   ?></a>
						 			</h2>
						 			<span class="post-date"><?php  echo date('F j, Y', strtotime($destaquePost['created_on']));   ?></span>
						 		</div>
						 	</div><!--/ Featured post end -->
							
						</div><!-- Item 1 end -->

						<?php   endforeach;?>

					</div><!-- Featured owl carousel end-->
				</div><!-- Col 7 end -->

				<div class="col-md-5 col-xs-12 pad-l">
					<div class="row">
					<?php   foreach ($destaquePosts1 as $destaquePost): ?>
						<div class="col-sm-12">
							<div class="post-overaly-style contentTop hot-post-top clearfix">
								<div class="post-thumb">
									<a href="single.php?id=<?php  echo $destaquePost['id'];   ?>"><img class="img-responsive" src="admin/assets/img/post/<?php echo $destaquePost['image']?>" alt="" /></a>
								</div>
								<div class="post-content">
						 			<a class="post-cat" href="#"><?php  echo $destaquePost['name'];   ?></a>
						 			<h2 class="post-title title-large">
						 				<a href="single.php?id=<?php  echo $destaquePost['id'];   ?>"><?php  echo $destaquePost['title'];   ?></a>
						 			</h2>
						 			<span class="post-date"><?php  echo date('F j, Y', strtotime($destaquePost['created_on']));   ?></span>
					 			</div><!-- Post content end -->
							</div><!-- Post Overaly end -->
						</div><!-- Col end -->
						<?php   endforeach;?>
						<?php   foreach ($destaquePosts2 as $destaquePost): ?>
						<div class="col-sm-6 pad-r-small">
					
							<div class="post-overaly-style contentTop hot-post-bottom clearfix">
							
								<div class="post-thumb">
									<a href="single.php?id=<?php  echo $destaquePost['id'];   ?>"><img class="img-responsive" src="admin/assets/img/post/<?php echo $destaquePost['image']?>" alt="" /></a>
								</div>
								<div class="post-content">
						 			<a class="post-cat" href="single.php?id=<?php  echo $post['id'];   ?>"><?php  echo $destaquePost['name'];   ?></a>
						 			<h2 class="post-title title-medium">
						 				<a href="single.php?id=<?php  echo $destaquePost['id'];   ?>"><?php  echo $destaquePost['title'];   ?></a>
						 			</h2>
					 			</div><!-- Post content end -->
							</div><!-- Post Overaly end -->
							
						</div><!-- Col end -->
						<?php   endforeach;?>
					</div>
				</div><!-- Col 5 end -->

			</div><!-- Row end -->
		</div><!-- Container end -->
	</section><!-- Trending post end -->

	<section class="block-wrapper">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">

					<div class="latest-news block color-red">
						<h3 class="block-title"><span>Últimas Ntícias</span></h3>

						<div id="latest-news-slide" class="owl-carousel owl-theme latest-news-slide">
							
						<?php   foreach ($posts as $post): ?>
						<div class="item">
								<ul class="list-post">
									<li class="clearfix">
										<div class="post-block-style clearfix">
											<div class="post-thumb">
												<a href="single.php?id=<?php  echo $post['id'];   ?>"><img class="img-responsive" src="admin/assets/img/post/<?php echo $post['image']?>" alt="" /></a>
											</div>
											<a class="post-cat" href="single.php?id=<?php  echo $post['id'];   ?>"><?php  echo $post['name'];   ?></a>
											<div class="post-content">
									 			<h2 class="post-title title-medium">
									 				<a href="single.php?id=<?php  echo $post['id'];   ?>"><?php  echo $post['title'];   ?></a>
									 			</h2>
									 			<div class="post-meta">
									 				<span class="post-author"><a href="#"></a></span>
									 				<span class="post-date"><?php  echo date('F j, Y', strtotime($post['created_on']));   ?></span>
									 			</div>
								 			</div><!-- Post content end -->
										</div><!-- Post Block style end -->
									</li><!-- Li end -->

								</ul><!-- List post 1 end -->

							</div><!-- Item 1 end -->
							<?php   endforeach;?>

						</div><!-- Latest News owl carousel end-->
					</div><!--- Latest news end -->

					<div class="gap-50"></div>

					<!--- Featured Tab startet -->
					<div class="featured-tab color-blue">
						<h3 class="block-title"><span>INTERNACIONAL</span></h3>
						

						<div class="tab-content">
					      <div class="tab-pane active animated fadeInRight" id="tab_a">
					      	<div class="row">
							  <?php   foreach ($catPostsInternacionl as $cat_post): ?>
						      	<div class="col-md-6 col-sm-6">
						      		<div class="post-block-style clearfix">
											<div class="post-thumb">
												<a href="single.php?id=<?php  echo $cat_post['id'];   ?>">
													<img class="img-responsive" src="admin/assets/img/post/<?php echo $cat_post['image']?>" alt="" />
												</a>
											</div>
											<a class="post-cat" href="single.php?id=<?php  echo $cat_post['id'];   ?>"><?php  echo $cat_post['name'];   ?></a>
											<div class="post-content">
									 			<h2 class="post-title">
									 				<a href="single.php?id=<?php  echo $cat_post['id'];   ?>"><?php  echo $cat_post['title'];   ?></a>
									 			</h2>
									 			<div class="post-meta">
									 				
									 				<span class="post-date"><?php  echo date('F j, Y', strtotime($cat_post['created_on']));   ?></span>
									 			</div>
									 			<p><?php  echo html_entity_decode(substr($cat_post['body'],0, 200). '...');   ?></p>
								 			</div><!-- Post content end -->
										</div><!-- Post Block style end -->
						      	</div><!-- Col end -->

								  <?php   endforeach;?>

						      	<div class="col-md-6 col-sm-6">
						      		<div class="list-post-block">
											<ul class="list-post">
											<?php   foreach ($catPostsInternacionl2 as $post): ?>
												<li class="clearfix">
													<div class="post-block-style post-float clearfix">
														<div class="post-thumb">
															<a href="single.php?id=<?php  echo $post['id'];   ?>">
																<img class="img-responsive" src="admin/assets/img/post/<?php echo $post['image']?>" alt="" />
															</a>
														</div><!-- Post thumb end -->

														<div class="post-content">
												 			<h2 class="post-title title-small">
												 				<a href="single.php?id=<?php  echo $post['id'];   ?>"><?php  echo $post['title'];   ?></a>
												 			</h2>
												 			<div class="post-meta">
												 				<span class="post-date"><?php  echo date('F j, Y', strtotime($post['created_on']));   ?></span>
												 			</div>
											 			</div><!-- Post content end -->
													</div><!-- Post block style end -->
												</li><!-- Li 1 end -->
											<?php   endforeach;?>

				
											
											</ul><!-- List post end -->
										</div><!-- List post block end -->
						      	</div><!-- List post Col end -->
					      	</div><!-- Tab pane Row 1 end -->
					      </div><!-- Tab pane 1 end -->

				        	<div class="tab-pane animated fadeInRight" id="tab_b">
					        	<div class="row">
						      	<div class="col-md-6 col-sm-6">
						      		<div class="post-block-style clearfix">
											<div class="post-thumb">
												<a href="#">
													<img class="img-responsive" src="assets/images/news/tech/game1.jpg" alt="" />
												</a>
											</div>
											<a class="post-cat" href="#">Games</a>
											<div class="post-content">
									 			<h2 class="post-title">
									 				<a href="#">Historical heroes and robot dinosaurs: New games on our... </a>
									 			</h2>
									 			<div class="post-meta">
									 				<span class="post-author"><a href="#">John Doe</a></span>
									 				<span class="post-date">Feb 24, 2017</span>
									 			</div>
									 			<p>Lumbersexual meh sustainable Thundercats meditation kogi. Tilde Pitchfork vegan, gentrify minim elit semiotics non messenger bag Austin which roasted ...</p>
								 			</div><!-- Post content end -->
										</div><!-- Post Block style end -->
						      	</div><!-- Col end -->

						      	<div class="col-md-6 col-sm-6">
						      		<div class="list-post-block">
											<ul class="list-post">
												<li class="clearfix">
													<div class="post-block-style post-float clearfix">
														<div class="post-thumb">
															<a href="#">
																<img class="img-responsive" src="assets/images/news/tech/game2.jpg" alt="" />
															</a>
														</div><!-- Post thumb end -->

														<div class="post-content">
												 			<h2 class="post-title title-small">
												 				<a href="#">Lindie game plonks players in front of huge starship command cent…</a>
												 			</h2>
												 			<div class="post-meta">
												 				<span class="post-date">Feb 13, 2017</span>
												 			</div>
											 			</div><!-- Post content end -->
													</div><!-- Post block style end -->
												</li><!-- Li 1 end -->

												<li class="clearfix">
													<div class="post-block-style post-float clearfix">
														<div class="post-thumb">
															<a href="#">
																<img class="img-responsive" src="assets/images/news/tech/game3.jpg" alt="" />
															</a>
														</div><!-- Post thumb end -->

														<div class="post-content">
												 			<h2 class="post-title title-small">
												 				<a href="#">Meet Twitch: Mintendo’s new console mixes handheld and console…</a>
												 			</h2>
												 			<div class="post-meta">
												 				<span class="post-date">Jan 11, 2017</span>
												 			</div>
											 			</div><!-- Post content end -->
													</div><!-- Post block style end -->
												</li><!-- Li 2 end -->

												<li class="clearfix">
													<div class="post-block-style post-float clearfix">
														<div class="post-thumb">
															<a href="#">
																<img class="img-responsive" src="assets/images/news/tech/game4.jpg" alt="" />
															</a>
														</div><!-- Post thumb end -->

														<div class="post-content">
												 			<h2 class="post-title title-small">
												 				<a href="#">Super Tario Run isn’t groundbreaking, but it has Mintendo charm</a>
												 			</h2>
												 			<div class="post-meta">
												 				<span class="post-date">Feb 19, 2017</span>
												 			</div>
											 			</div><!-- Post content end -->
													</div><!-- Post block style end -->
												</li><!-- Li 3 end -->

												<li class="clearfix">
													<div class="post-block-style post-float clearfix">
														<div class="post-thumb">
															<a href="#">
																<img class="img-responsive" src="assets/images/news/tech/game5.jpg" alt="" />
															</a>
														</div><!-- Post thumb end -->

														<div class="post-content">
												 			<h2 class="post-title title-small">
												 				<a href="#">Oazer and Lacon bring eSport expertise to new PS4 controller…</a>
												 			</h2>
												 			<div class="post-meta">
												 				<span class="post-date">Feb 27, 2017</span>
												 			</div>
											 			</div><!-- Post content end -->
													</div><!-- Post block style end -->
												</li><!-- Li 4 end -->
											</ul><!-- List post end -->
										</div><!-- List post block end -->
						      	</div><!-- List post Col end -->
					      	</div><!-- Tab pane Row 2 end -->
				       	</div><!-- Tab pane 2 end -->

				        	<div class="tab-pane animated fadeInLeft" id="tab_c">

								<div class="row">
						      	<div class="col-md-6 col-sm-6">
						      		<div class="post-block-style clearfix">
											<div class="post-thumb">
												<a href="#">
													<img class="img-responsive" src="assets/images/news/tech/robot1.jpg" alt="" />
												</a>
											</div>
											<a class="post-cat" href="#">Robotics</a>
											<div class="post-content">
									 			<h2 class="post-title">
									 				<a href="#">There's no escaping Watsone Dynamics' wheeled jumping robot</a>
									 			</h2>
									 			<div class="post-meta">
									 				<span class="post-author"><a href="#">John Doe</a></span>
									 				<span class="post-date">Feb 24, 2017</span>
									 			</div>
									 			<p>Lumbersexual meh sustainable Thundercats meditation kogi. Tilde Pitchfork vegan, gentrify minim elit semiotics non messenger bag Austin which roasted ...</p>
								 			</div><!-- Post content end -->
										</div><!-- Post Block style end -->
						      	</div><!-- Col end -->

						      	<div class="col-md-6 col-sm-6">
						      		<div class="list-post-block">
											<ul class="list-post">
												<li class="clearfix">
													<div class="post-block-style post-float clearfix">
														<div class="post-thumb">
															<a href="#">
																<img class="img-responsive" src="assets/images/news/tech/robot2.jpg" alt="" />
															</a>
														</div><!-- Post thumb end -->

														<div class="post-content">
												 			<h2 class="post-title title-small">
												 				<a href="#">Robot Life on Mars! Meet the Machines Exploring the Red Planet To…</a>
												 			</h2>
												 			<div class="post-meta">
												 				<span class="post-date">Feb 13, 2017</span>
												 			</div>
											 			</div><!-- Post content end -->
													</div><!-- Post block style end -->
												</li><!-- Li 1 end -->

												<li class="clearfix">
													<div class="post-block-style post-float clearfix">
														<div class="post-thumb">
															<a href="#">
																<img class="img-responsive" src="assets/images/news/tech/robot3.jpg" alt="" />
															</a>
														</div><!-- Post thumb end -->

														<div class="post-content">
												 			<h2 class="post-title title-small">
												 				<a href="#">Amaging China mech suit aims to assist with Lukushima cleanup</a>
												 			</h2>
												 			<div class="post-meta">
												 				<span class="post-date">Jan 11, 2017</span>
												 			</div>
											 			</div><!-- Post content end -->
													</div><!-- Post block style end -->
												</li><!-- Li 2 end -->

												<li class="clearfix">
													<div class="post-block-style post-float clearfix">
														<div class="post-thumb">
															<a href="#">
																<img class="img-responsive" src="assets/images/news/tech/robot4.jpg" alt="" />
															</a>
														</div><!-- Post thumb end -->

														<div class="post-content">
												 			<h2 class="post-title title-small">
												 				<a href="#">Taddler robot provides insights into early childhood learning</a>
												 			</h2>
												 			<div class="post-meta">
												 				<span class="post-date">Feb 19, 2017</span>
												 			</div>
											 			</div><!-- Post content end -->
													</div><!-- Post block style end -->
												</li><!-- Li 3 end -->

												<li class="clearfix">
													<div class="post-block-style post-float clearfix">
														<div class="post-thumb">
															<a href="#">
																<img class="img-responsive" src="assets/images/news/tech/robot5.jpg" alt="" />
															</a>
														</div><!-- Post thumb end -->

														<div class="post-content">
												 			<h2 class="post-title title-small">
												 				<a href="#">Robots in hospitals can be quite handy to navigate around the ho…</a>
												 			</h2>
												 			<div class="post-meta">
												 				<span class="post-date">Feb 27, 2017</span>
												 			</div>
											 			</div><!-- Post content end -->
													</div><!-- Post block style end -->
												</li><!-- Li 4 end -->
											</ul><!-- List post end -->

										</div><!-- List post block end -->
						      	</div><!-- List post Col end -->
					      	</div><!-- Tab pane Row 3 end -->
				        	</div><!-- Tab pane 3 end -->	
						</div><!-- tab content -->
					</div><!-- Technology Tab end -->


					<div class="block color-orange">
						<h3 class="block-title"><span>SECTOR DIAMANTIFERO</span></h3>
						

						<div class="tab-content">
					      <div class="tab-pane active animated fadeInRight" id="tab_a">
					      	<div class="row">
							  <?php   foreach ($catPostsSectorDiamantifero as $post): ?>
						      	<div class="col-md-6 col-sm-6">
						      		<div class="post-block-style clearfix">
											<div class="post-thumb">
												<a href="single.php?id=<?php  echo $post['id'];   ?>">
													<img class="img-responsive" src="admin/assets/img/post/<?php echo $post['image']?>" alt="" />
												</a>
											</div>
											<a class="post-cat" href="single.php?id=<?php  echo $post['id'];   ?>"><?php  echo $post['name'];   ?></a>
											<div class="post-content">
									 			<h2 class="post-title">
									 				<a href="single.php?id=<?php  echo $post['id'];   ?>"><?php  echo $post['title'];   ?></a>
									 			</h2>
									 			<div class="post-meta">
									 				
									 				<span class="post-date"><?php  echo date('F j, Y', strtotime($post['created_on']));   ?></span>
									 			</div>
									 			<p><?php  echo html_entity_decode(substr($post['body'],0, 200). '...');   ?></p>
								 			</div><!-- Post content end -->
										</div><!-- Post Block style end -->
						      	</div><!-- Col end -->

								  <?php   endforeach;?>

						      	<div class="col-md-6 col-sm-6">
						      		<div class="list-post-block">
											<ul class="list-post">
											<?php   foreach ($catPostsSectorDiamantifero2 as $post): ?>
												<li class="clearfix">
													<div class="post-block-style post-float clearfix">
														<div class="post-thumb">
															<a href="single.php?id=<?php  echo $post['id'];   ?>">
																<img class="img-responsive" src="admin/assets/img/post/<?php echo $post['image']?>" alt="" />
															</a>
														</div><!-- Post thumb end -->

														<div class="post-content">
												 			<h2 class="post-title title-small">
												 				<a href="single.php?id=<?php  echo $post['id'];   ?>"><?php  echo $post['title'];   ?></a>
												 			</h2>
												 			<div class="post-meta">
												 				<span class="post-date"><?php  echo date('F j, Y', strtotime($post['created_on']));   ?></span>
												 			</div>
											 			</div><!-- Post content end -->
													</div><!-- Post block style end -->
												</li><!-- Li 1 end -->
											<?php   endforeach;?>

				
											
											</ul><!-- List post end -->
										</div><!-- List post block end -->
						      	</div><!-- List post Col end -->
					      	</div><!-- Tab pane Row 1 end -->
					      </div><!-- Tab pane 1 end -->

				        
				       	</div><!-- Tab pane 2 end -->

				        
					</div><!-- Technology Tab end -->

					<div class="gap-40"></div>

				


				</div><!-- Content Col end -->

				<?php  include('app/includes/sidebar.php'); ?>

			</div><!-- Row end -->
		</div><!-- Container end -->
	</section><!-- First block end -->

	<section class="ad-content-area text-center no-padding">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
				<?php   foreach ($centroAdvertises as $centroAdvertise): ?>
					<a href="\<?php echo $centroAdvertise['link']?>" target="blank"><img src="admin/assets/img/advertise/<?php echo $centroAdvertise['image']?>" class="img-responsive" alt=""></a>
				
					<?php   endforeach;?>
				
				</div><!-- Col end -->
			</div><!-- Row end -->
		</div><!-- Container end -->
	</section><!-- Ad content top end -->

	<section class="block-wrapper">
	
	</section><!-- 2nd block end -->

	<section class="block-wrapper video-block">
		<div class="container">
			<div class="row">
				<div class="video-tab clearfix">
					<h2 class="video-tab-title">Watch Now</h2>
					<div class="col-md-7 pad-r-0">
						<div class="tab-content">
							<div class="tab-pane active animated fadeIn" id="video1">
								<div class="post-overaly-style clearfix">
								   <div class="post-thumb">
										<img class="img-responsive" src="assets/images/news/video/video_endiama_diamante_3.jpg" alt="" />
										<a class="popup" href="https://www.youtube.com/embed/UxBqpcQddF4">
					                  <div class="video-icon">
					                  	<i class="fa fa-play"></i>
					               	</div>
					            	</a>
								   </div><!-- Post thumb end -->
								   <div class="post-content">
								      <a class="post-cat" href="#">Video</a>
								      <h2 class="post-title">
								         <a href="#">Mining Herkimer 'Diamonds'</a>
								      </h2>
								   </div><!-- Post content end -->
								</div><!-- Post Overaly Article end -->
							</div><!--Tab pane 1 end-->

							<div class="tab-pane animated fadeIn" id="video2">
								<div class="post-overaly-style clearfix">
								   <div class="post-thumb">
								      <img class="img-responsive" src="assets/images/news/video/video_endiama_diamante_2.jpg" alt="" />
										<a class="popup" href="https://www.youtube.com/embed/FZC1KpBY9GU">
					                  <div class="video-icon">
					                  	<i class="fa fa-play"></i>
					               	</div>
					            	</a>
								   </div><!-- Post thumb end -->
								   <div class="post-content">
								      <a class="post-cat" href="#">Video</a>
								      <h2 class="post-title title-medium">
								         <a href="#">Off Namibia, an underwater diamond harvest</a>
								      </h2>
								   </div><!-- Post content end -->
								</div><!-- Post Overaly Article 2 end -->
							</div><!--Tab pane 2 end-->

							<div class="tab-pane animated fadeIn" id="video3">
								<div class="post-overaly-style clearfix">
								   <div class="post-thumb">
								      <img class="img-responsive" src="assets/images/news/video/video_endiama_diamante.jpg" alt="" />
										<a class="popup" href="https://www.youtube.com/embed/jxcsFCCaLqA">
					                  <div class="video-icon">
					                  	<i class="fa fa-play"></i>
					               	</div>
					            	</a>
								   </div><!-- Post thumb end -->
								   <div class="post-content">
								      <a class="post-cat" href="#"></a>
								      <h2 class="post-title title-medium">
								         <a href="#">Endiama - Cerca de 1,3% de quilates de diamante produzidos no primeiro semestre de 2021</a>
								      </h2>
								   </div><!-- Post content end -->
								</div><!-- Post Overaly Article 2 end -->
							</div><!--Tab pane 2 end-->
							

						</div><!-- Tab content end -->
					</div><!--Tab col end -->

					<div class="col-md-5 pad-l-0">
						<ul class="nav nav-tabs">
						  	<li class="active">
						  		<a class="animated fadeIn" href="#video1" data-toggle="tab">
						  			<div class="post-thumb">
								        <img class="img-responsive" src="assets/images/news/video/video_endiama_diamante_3.jpg" alt="" />
								   </div><!-- Post thumb end -->
						  			<h3>Mining Herkimer 'Diamonds'</h3>
						  		</a>
						  	</li>
						  	<li>
							  	<a class="animated fadeIn" href="#video2" data-toggle="tab">
							  		<div class="post-thumb">
								      <img class="img-responsive" src="assets/images/news/video/video_endiama_diamante_2.jpg" alt="" />
								   </div><!-- Post thumb end -->
						  			<h3>Off Namibia, an underwater diamond harvest</h3>
							  	</a>
							</li>
						 	<li>
							  	<a class="animated fadeIn" href="#video3" data-toggle="tab">
							  		<div class="post-thumb">
								      <img class="img-responsive" src="assets/images/news/video/video_endiama_diamante.jpg" alt="" />
								   </div><!-- Post thumb end -->
						  			<h3>Endiama - Cerca de 1,3% de quilates de diamante produzidos no primeiro semestre de 2021</h3>
							  	</a>
							</li>
						</ul>
					</div><!--Tab nav col end -->
				</div><!-- Video tab end -->

			</div><!-- Row end -->
		</div><!-- Container end -->
	</section><!-- Video block end -->


	<section class="block-wrapper p-bottom-0">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
					<div class="more-news block color-default">
						<h3 class="block-title"><span>Mais Notícias</span></h3>

						<div id="more-news-slide" class="owl-carousel owl-theme more-news-slide">
						<?php   foreach ($getMorePosts as $getMorePost): ?>
						
							<div class="item">
							
								<div class="post-block-style post-float-half clearfix">
									<div class="post-thumb">
										<a href="#">
											<img class="img-responsive" src="admin/assets/img/post/<?php echo $getMorePost['image']?>" alt="" />
										</a>
									</div>
									<a class="post-cat" href="#"><?php  echo $destaquePost['name'];   ?></a>
									<div class="post-content">
							 			<h2 class="post-title">
							 				<a href="single.php?id=<?php  echo $getMorePost['id'];   ?>"><?php  echo $getMorePost['title'];   ?></a>
							 			</h2>
							 			<div class="post-meta">
							 				<span class="post-author"><a href="#"></a></span>
							 				<span class="post-date"><?php  echo date('F j, Y', strtotime($getMorePost['created_on']));   ?></span>
							 			</div>
							 			<p><?php  echo html_entity_decode(substr($getMorePost['body'],0, 200). '...');   ?></p>
						 			</div><!-- Post content end -->
								</div><!-- Post Block style 1 end -->
								<div class="gap-30"></div>
								
								
							</div><!-- Item 1 end -->
							<?php   endforeach;?>
							
							
						</div><!-- More news carousel end -->
					</div><!--More news block end -->
				</div><!-- Content Col end -->

				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
					<div class="sidebar sidebar-right">

						
						<?php  include('app/includes/newslatter.php'); ?>
					<!-- Newsletter widget end -->
					</div><!--Sidebar right end -->
				</div><!-- Sidebar col end -->
			</div><!-- Row end -->
		</div><!-- Container end -->
	</section><!-- 3rd block end -->


	<section class="ad-content-area text-center">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
				<?php   foreach ($downAdvertises as $downAdvertise): ?>
					<a href="\<?php echo $downAdvertise['link']?>" target="blank"><img src="admin/assets/img/advertise/<?php echo $downAdvertise['image']?>" class="img-responsive" alt=""></a>
					<?php   endforeach;?>
				</div><!-- Col end -->
			</div><!-- Row end -->
		</div><!-- Container end -->
	</section><!-- Ad content two end -->

	<?php  include('app/includes/footer.php'); ?>
</body>
</html>
