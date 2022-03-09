<header id="header" class="header">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-3 col-md-3">
					<div class="logo">
						 <a href="index.php">
							<img src="assets/images/logos/logomina.png" alt="">
						 </a>
					</div>
				</div><!-- logo col end -->

				<div class="col-xs-12 col-sm-9 col-md-9 header-right">
					<div class="ad-banner pull-right">
					<?php   foreach ($topadvertises as $topadvertise): ?>
						<a href="#"><img src="admin/assets/img/advertise/<?php echo $topadvertise['image']?>" class="img-responsive" alt=""></a>
						<?php   endforeach;?>
					</div>
				</div><!-- header right end -->
			</div><!-- Row end -->
		</div><!-- Logo and banner area end -->
	</header>