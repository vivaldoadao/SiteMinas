
<?php
	
	include('app/controllers/site.php');
	include('comments.php');

	if (isset($_GET['id'])) {
		$p = selectOne('post',['id' => $_GET['id']]);
		
	}
	
$topadvertises = topadvertise();
$posts = getPublishedPosts();
$centroAdvertises = centroAdvertise();
$downAdvertises = downAdvertise();
$sideBarAdvertises = sideBarAdvertise();
$getPostsByCategoryENTREVISTAS = getPostsByCategoryENTREVISTAS();
$getPostsByCategoryVÍDEOS_EVENTOS = getPostsByCategoryVÍDEOS_EVENTOS();

$dt = new DateTime("now" , new DateTimeZone('WAT'));
//$comments = new Comment($db);
	?>

<?php  
$comments = new Comment($db);

if (isset($_GET['id'])) {
	$v =  $comments->Views($_GET['id']);
	
}



?>



<!DOCTYPE html>
<html lang="en">
<head>

	<!-- Basic Page Needs
	================================================== -->
	<meta charset="utf-8">
	<title><?php  echo $p['title'];  ?> | Minas de Angola</title>

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

	<div class="page-title">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<ol class="breadcrumb">
     					<li><a href="index.php">Home</a></li>
     					<li></a></li>
     				</ol>
				</div><!-- Col end -->
			</div><!-- Row end -->
		</div><!-- Container end -->
	</div><!-- Page title end -->

	<section class="block-wrapper">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
					
					<div class="single-post">
						
						<div class="post-title-area">
							
							<h2 class="post-title">
							<?php  echo $p['title'];  ?>
				 			</h2>
				 			<div class="post-meta">
								<span class="post-author">
								
								</span>
								<span class="post-date"><i class="fa fa-clock-o"></i><?php  echo date('F j, Y', strtotime($post['created_on']));   ?></span>
								<span class="post-hits"><i class="fa fa-eye"></i><span><?php  echo $comments->countPostsViews($_GET['id']); ?></span>
								<span class="post-comment"><i class="fa fa-comments-o"></i>
								<a href="#" class="comments-link"><span><?php  echo $comments->countComments($_GET['id']); ?></span></a></span>
							</div>
						</div><!-- Post title end -->

						<div class="post-content-area">
							<div class="post-media post-featured-image">
								<a href="assets/images/news/lifestyle/health5.jpg" class="gallery-popup"><img src="admin/assets/img/post/<?php echo $p['image']?>" class="img-responsive" alt=""></a>
							</div>
							<div class="entry-content">
								<p><?php  echo html_entity_decode($p['body']);   ?></p>

								
							</div><!-- Entery content end -->

						
							<div class="share-items clearfix">
   							<ul class="post-social-icons unstyled">
   								<li class="facebook">
   									<a href="#">
   									<i class="fa fa-facebook"></i> <span class="ts-social-title">Facebook</span></a>
   								</li>
   								<li class="twitter">
   									<a href="#">
   									<i class="fa fa-twitter"></i> <span class="ts-social-title">Twitter</span></a>
   								</li>
   								<li class="gplus">
   									<a href="#">
   									<i class="fa fa-google-plus"></i> <span class="ts-social-title">Google +</span></a>
   								</li>
   								<li class="pinterest">
   									<a href="#">
   									<i class="fa fa-pinterest"></i> <span class="ts-social-title">Pinterest</span></a>
   								</li>
   							</ul>
   						</div><!-- Share items end -->

						</div><!-- post-content end -->
					</div><!-- Single post end -->

				

					<div class="author-box">
						
						<div class="author-info">
							
							<div class="authors-social">
                        <span>Follow Me: </span>
                        <a href="#"><i class="fa fa-behance"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-google-plus"></i></a>
                        <a href="#"><i class="fa fa-pinterest-p"></i></a>
                    </div>
						</div>
					</div> <!-- Author box end -->

					<div class="related-posts block">
						<h3 class="block-title"><span>Notícias Relacionadas</span></h3>

						<div id="latest-news-slide" class="owl-carousel owl-theme latest-news-slide">
						<?php   foreach ($posts as $post): ?>
						<div class="item">
							
								<div class="post-block-style clearfix">
									<div class="post-thumb">
										<a href="single.php?id=<?php  echo $post['id'];   ?>"><img class="img-responsive"  src="admin/assets/img/post/<?php echo $post['image']?>" alt="" /></a>
									</div>
									<a class="post-cat" href="single.php?id=<?php  echo $post['id'];   ?>"><?php  echo $post['name'];   ?></a>
									<div class="post-content">
							 			<h2 class="post-title title-medium">
							 				<a href="single.php?id=<?php  echo $post['id'];   ?>"><?php  echo $post['title'];   ?></a>
							 			</h2>
							 			<div class="post-meta">
							 				<span class="post-author"><a href="single.php?id=<?php  echo $post['id'];   ?>"></a></span>
							 				<span class="post-date"><?php  echo date('F j, Y', strtotime($post['created_on']));   ?></span>
							 			</div>
						 			</div><!-- Post content end -->
								</div><!-- Post Block style end -->
							</div><!-- Item 1 end -->
							<?php   endforeach;?>

						

						
						</div><!-- Carousel end -->

					</div><!-- Related posts end -->

<?php     
        
		  
        

		if (isset($_POST['btnComment'])) {

			//dd($_POST);

			$status = 0;

			if (!empty($_POST['name']) &&!empty($_POST['email'])&&!empty($_POST['description'])) {
				# code...
			   $result = $comments->comment(strip_tags($_POST['name']),strip_tags($_POST['email']),strip_tags($_POST['subject']),strip_tags($_POST['description']),strip_tags($_GET['id']),$status);

				if ($result== true) {
					# code...
					
					echo '<div class="alert alert-success alert-dismissable fade in">
					<button type = "button" class = "close" data-dismiss = "alert" aria-hidden = "true">&times;</button>
    
						<p>Muito obrigado por nos enviar o seu comentário</p></div>';
					
				}
			 
			}else {
				# code...
				echo "<div class='text-center alert alert-danger'> Os campos Nome, Email e a descrição do comentário são obrigatórios</div>";
				
			}
			
		}
	?>	

					<!-- Post comment start -->
					<div id="comments" class="comments-area block">
						<h3 class="block-title"><span><?php  echo $comments->countComments($_GET['id']); ?> Comentários</span></h3>
						<?php  foreach ($comments->getCommentsBySlug($_GET['id']) as $comment) {?>
									<div class="comment last">
										<img class="comment-avatar pull-left" alt="" src="assets/images/news/profile.jpg" width="60px" heigth="30px">
										<div class="comment-body">
											<div class="meta-data">
												<span class="comment-author"><?php  echo $comment['name']; ?></span>
												<span class="comment-date pull-right"><?php  echo date('F j, Y', strtotime($comment['created_at']));   ?></span>
											</div>
											<div class="comment-content">
											<p><?php  echo $comment['description']; ?></p></div>
											<div class="text-left">
												<a class="comment-reply" href="#"></a>
											</div>	
										</div>
									</div><!-- Comments end -->
									<?php }?>
							</li><!-- Comments-list li end -->
						</ul><!-- Comments-list ul end -->
					</div><!-- Post comment end -->

					
					<div class="comments-form">
						<h3 class="title-normal">Deixe um Comentário</h3>

						<form action="#" method="post">
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<textarea class="form-control required-field" name="description"  placeholder="Your Comment" rows="10" required></textarea>
									</div>
								</div><!-- Col end -->

								<div class="col-md-12">
									<div class="form-group">
										<input class="form-control" name="name" id="name" placeholder="Your Name" type="text" required>
									</div>
								</div><!-- Col end -->

								<div class="col-md-12">
									<div class="form-group">
										<input class="form-control" name="email" id="email" placeholder="Your Email" type="email" required>
									</div>
								</div>

								<div class="col-md-12">
									<div class="form-group">
										<input class="form-control" name="subject" placeholder="Assunto" type="text" required>
									</div>
								</div>
								<input class="form-control" type="hidden" name="post_id" value="<?php echo $p['id'] ?>" >
								
							</div><!-- Form row end -->
							<div class="clearfix">
								<button class="comments-btn btn btn-primary" name="btnComment" type="submit">Post Comment</button> 
							</div>
						</form><!-- Form end -->
					</div><!-- Comments form end -->

				</div><!-- Content Col end -->

				<?php  include('app/includes/sidebar.php'); ?><!-- Sidebar Col end -->

			</div><!-- Row end -->
		</div><!-- Container end -->
	</section><!-- First block end -->

	<?php  include('app/includes/footer.php'); ?>
	<!-- Body inner end -->
</body>
</html>
