

<?php
	

	include('comments.php');


	?>

<?php
include('app/controllers/site.php');
//$posts = getPublishedPosts();
$topadvertises = topadvertise();
$posts = getPublishedPosts();
$centroAdvertises = centroAdvertise();
$downAdvertises = downAdvertise();
$sideBarAdvertises = sideBarAdvertise();
$getPostsByCategoryENTREVISTAS = getPostsByCategoryENTREVISTAS();
$getPostsByCategoryVÍDEOS_EVENTOS = getPostsByCategoryVÍDEOS_EVENTOS();
$dt = new DateTime("now" , new DateTimeZone('WAT'));
 if (isset($_GET['keyword'])) {
	 $posts = searchPosts($_GET['keyword']);
 }
?>
<?php  
$comments = new Comment($db);
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

	<div class="page-title">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<ol class="breadcrumb">
     					<li><a href="index.php">Home</a></li>
     					<li></li>
     				</ol>
				</div><!-- Col end -->
			</div><!-- Row end -->
		</div><!-- Container end -->
	</div><!-- Page title end -->

	<section class="block-wrapper">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">

					<div class="block category-listing category-style2">
						<h3 class="block-title"><span></span></h3>

					
						<?php   foreach ($posts as $post): ?>
						<div class="post-block-style post-list clearfix">
							<div class="row">
								<div class="col-md-5 col-sm-6">
									<div class="post-thumb thumb-float-style">
										<a href="single.php?id=<?php  echo $post['id'];   ?>">
											<img class="img-responsive" src="admin/assets/img/post/<?php echo $post['image']?>" alt="" />
										</a>
										<a class="post-cat" href="single.php?id=<?php  echo $post['id'];   ?>"><?php  echo $post['name'];   ?></a>
									</div>
								</div><!-- Img thumb col end -->

								<div class="col-md-7 col-sm-6">
									<div class="post-content">
							 			<h2 class="post-title title-large">
							 				<a href="single.php?id=<?php  echo $post['id'];   ?>"><?php  echo $post['title'];   ?></a>
							 			</h2>
							 			<div class="post-meta">
							 				<span class="post-author"><a href="#"></a></span>
							 				<span class="post-date"><?php  echo date('F j, Y', strtotime($post['created_on']));   ?></span>
							 				<span class="post-comment pull-right"><i class="fa fa-comments-o"></i>
											<a href="#" class="comments-link"><span>03</span></a></span>
							 			</div>
							 			<p><?php  echo html_entity_decode(substr($post['body'],0, 200). '...');   ?></p>
						 			</div><!-- Post content end -->
								</div><!-- Post col end -->
							</div><!-- 1st row end -->
						</div><!-- 1st Post list end -->
						<?php   endforeach;?>
					</div><!-- Block Technology end -->


												
					<?php  

$sql = "SELECT count(id) from post";
$result = mysqli_query($db,$sql);
$row = mysqli_fetch_row($result);
$totalRecords = $row[0];
$totalPages = ceil($totalRecords/10);
$pageLink = "<ul class='pagination'>";


for ($i=1; $i <=$totalPages ; $i++) { 
	# code...

	



	$pageLink.="<li ><a class='page-link'href='posts.php?page=".$i."'>".$i."</a></li>";
}








echo $pageLink."</ul>"



?>
<!-- Content Col end 
					<div class="paging">
		            <ul class="pagination">
		              <li class="active"><a href="#">1</a></li>
		              <li><a href="#">2</a></li>
		              <li><a href="#">3</a></li>
		              <li><a href="#">4</a></li>
		              <li><a href="#">»</a></li>
		              <li>
		              	<span class="page-numbers">Page 1 of 2</span>
		              </li>
		            </ul>
	          	</div>
				  -->


				</div><!-- Content Col end -->

				<?php  include('app/includes/sidebar.php'); ?><!-- Sidebar Col end -->

			</div><!-- Row end -->
		</div><!-- Container end -->
	</section><!-- First block end -->

    <?php  include('app/includes/footer.php'); ?>
	<!-- Body inner end -->
</body>
</html>