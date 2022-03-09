
	<div class="trending-bar hidden-xs">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h3 class="trending-title">Destaques</h3>
					<div id="trending-slide" class="owl-carousel owl-theme trending-slide">
						
					<?php   foreach ($posts as $post): ?>
						<div class="item">
						   <div class="post-content">
						      <h2 class="post-title title-small">
						         <a href="single.php?id=<?php  echo $post['id'];   ?>"><?php  echo $post['title'];   ?>s</a>
						      </h2>
						   </div><!-- Post content end -->
						</div><!-- Item 1 end -->
						<?php   endforeach;?>
					
					</div><!-- Carousel end -->
				</div><!-- Col end -->
			</div><!--/ Row end -->
		</div><!--/ Container end -->
	</div>