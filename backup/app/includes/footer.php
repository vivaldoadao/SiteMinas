
<?php


$contactos = selectAll('contacts');

$latestTrading = getPublishedPostsLatest();
 $imageGallery = getPublishedPostsImages()


//dd($destaquePosts);

?>

<footer id="footer" class="footer">
		<div class="footer-main">
			<div class="container">
				<div class="row">
					<div class="col-md-3 col-sm-12 footer-widget">
						<h3 class="widget-title">Trending Now</h3>
						<div class="list-post-block">
							<ul class="list-post">


							<?php   foreach ($latestTrading as $post): ?>
								<li class="clearfix">
									<div class="post-block-style post-float clearfix">
										<div class="post-thumb">
											<a href="#">
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
						
					</div><!-- Col end -->

					<div class="col-md-3 col-sm-12 footer-widget widget-categories">
						<h3 class="widget-title">Hot Categories</h3>
						<ul>
						<?php   foreach ($categories as $category): ?>
							<li>
								<a href="posts.php?c_id=<?php  echo $category['id'];   ?>"><span class="catTitle"><?php  echo $category['name'];   ?></span><span class="catCounter"> </span></a>
							</li>
							<?php   endforeach;?>
					
						</ul>
						
					</div><!-- Col end -->

					<div class="col-md-3 col-sm-12 footer-widget twitter-widget">
						<h3 class="widget-title"></h3>
						<ul>
						
					</div><!-- Col end -->

					<div class="col-md-3 col-sm-12 footer-widget">
						<h3 class="widget-title">Galeria de Notícias</h3>
						<div class="gallery-widget">
						<?php   foreach ($imageGallery as $post): ?>
							<a href="posts.php?c_id=<?php  echo $category['id'];   ?>"><img class="img-responsive" src="admin/assets/img/post/<?php echo $post['image']?>" alt="" /></a>
						
						
							<?php   endforeach;?>
						</div>
					</div><!-- Col end -->

				</div><!-- Row end -->
			</div><!-- Container end -->
		</div><!-- Footer main end -->

		<div class="footer-info text-center">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="footer-info-content">
							<div class="footer-logo">
								<img class="img-responsive" src="assets/images/logos/logomina.png" alt="" />
							</div>
							<?php   foreach ($contactos as $contacto): ?>
							<p><?php  echo $contacto['address'];   ?></p>
							<p class="footer-info-phone"><i class="fa fa-phone"></i> <?php  echo $contacto['phone'];   ?></p>
							<p class="footer-info-email"><i class="fa fa-envelope-o"></i> <?php  echo $contacto['email'];   ?></p>
							<?php   endforeach;?>
							<ul class="unstyled footer-social">
								<li>
								
									<a title="Facebook" href="#">
										<span class="social-icon"><i class="fa fa-facebook"></i></span>
									</a>
									<a title="Twitter" href="#">
										<span class="social-icon"><i class="fa fa-twitter"></i></span>
									</a>
								
									<a title="Linkdin" href="#">
										<span class="social-icon"><i class="fa fa-linkedin"></i></span>
									</a>
							
									<a title="Skype" href="#">
										<span class="social-icon"><i class="fa fa-instagram"></i></span>
									</a>
								</li>
							</ul>
						</div><!-- Footer info content end -->
					</div><!-- Col end -->
				</div><!-- Row end -->
			</div><!-- Container end -->
		</div><!-- Footer info end -->

	</footer><!-- Footer end -->

	<div class="copyright">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-6">
						<div class="copyright-info">
							<span>Copyright © <?php echo $dt->format('Y'); ?> Todos os Direitos Reservados. Desenvolvido Por ZNAT TECHNOLOGY</span>
						</div>
					</div>

					<div class="col-xs-12 col-sm-6">
						<div class="footer-menu">
							<ul class="nav unstyled">
								<li><a href="#">Site Terms</a></li>
								<li><a href="#">Privacy</a></li>
							
								
								<li><a href="contacto.php">Contacta-nos</a></li>
							</ul>
						</div>
					</div>
				</div><!-- Row end -->

				<div id="back-to-top" data-spy="affix" data-offset-top="10" class="back-to-top affix">
					<button class="btn btn-primary" title="Back to Top">
						<i class="fa fa-angle-up"></i>
					</button>
				</div>

			</div><!-- Container end -->
		</div><!-- Copyright end -->


	<!-- Javascript Files
	================================================== -->


	<!-- initialize jQuery Library -->
	<script type="text/javascript" src="assets/js/jquery.js"></script>
	<!-- Bootstrap jQuery -->
	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
	<!-- Owl Carousel -->
	<script type="text/javascript" src="assets/js/owl.carousel.min.js"></script>
	<!-- Counter -->
	<script type="text/javascript" src="assets/js/jquery.counterup.min.js"></script>
	<!-- Waypoints -->
	<script type="text/javascript" src="assets/js/waypoints.min.js"></script>
	<!-- Color box -->
	<script type="text/javascript" src="assets/js/jquery.colorbox.js"></script>
	<!-- Smoothscroll -->
	<script type="text/javascript" src="assets/js/smoothscroll.js"></script>


	<!-- Template custom -->
	<script type="text/javascript" src="assets/js/custom.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/31.0.0/classic/ckeditor.js"></script>


	</div><!-- Body inner end -->
	
	
	<script >
	// Ajax para manipulação das NEWSLATTER

$("#form-inserir-newslatter").submit(function () {
    event.preventDefault();
    var formData = new FormData(this);
    $.ajax({
        url: "inserir-newslatter.php",
        type: 'POST',
        data: formData,
        success: function (mensagem) {
            $('#mensagem-inserir').text('')
            $('#mensagem-inserir').removeClass()
            if (mensagem.trim() == "Salvo com Sucesso!") {
                //$('#nome').val('');
                //$('#cpf').val('');
                $('#btn-fechar-inserir').click();
                window.location = "index.php";
            } else {
                $('#mensagem-inserir').addClass('text-danger')
                $('#mensagem-inserir').text(mensagem)
            }
        },
        cache: false,
        contentType: false,
        processData: false,
    });
});

</script>
<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
<style type="text/css">
    .card{
        margin-top:50px;
    }
</style>


