




<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
					<div class="sidebar sidebar-right">
						<div class="widget">
							<h3 class="block-title"><span>Siga-nos</span></h3>

							<ul class="social-icon">
							<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#" ><i class="fa fa-facebook"></i></a></li>
								<li><a href="#" ><i class="fa fa-instagram"></i></a></li>
								
							
							
								<li><a href="#"><i class="fa fa-youtube"></i></a></li>
							</ul>
						</div><!-- Widget Social end -->

						<div class="widget color-default">
						


							<div class="list-post-block">
							<h3 class="block-title"><span>Notícias Populares</span></h3>
								<ul class="list-post">
								<?php foreach($comments->getPopularPostsByViews() as $post ) {?>
									<li class="clearfix">
										<div class="post-block-style post-float clearfix">
											<div class="post-thumb">
												<a href="single.php?id=<?php  echo $post['post_id'];   ?>">
													<img class="img-fluid" src="admin/assets/img/post/<?php echo $post['image']?>" alt="" />
												</a>
												<a class="post-cat" href="#"></a>
											</div><!-- Post thumb end -->

											<div class="post-content">
									 			<h2 class="post-title title-small">
									 				<a href="single.php?id=<?php  echo $post['post_id'];   ?>"><?php echo $post['title']  ?></a></a>
									 			</h2>
									 			<div class="post-meta">
									 				<span class="post-date"><?php  echo date('F j, Y', strtotime($post['created_on']));   ?></span>
									 			</div>
								 			</div><!-- Post content end -->
										</div><!-- Post block style end -->
									</li><!-- Li 1 end -->
									<?php }?>
								</ul><!-- List post end -->
							</div><!-- List post block end -->

						</div><!-- Popular news widget end -->

						<div class="widget text-center">
						<?php   foreach ($sideBarAdvertises as $sideBarAdvertise): ?>
							<img class="banner img-responsive" src="admin/assets/img/advertise/<?php echo $sideBarAdvertise['image']?>" alt="" />
							<?php   endforeach;?>
						</div><!-- Sidebar Ad end -->

						<div class="widget color-default m-bottom-0">
							<h3 class="block-title"><span>Últimos Vídeos e Events</span></h3>

							<div id="post-slide" class="owl-carousel owl-theme post-slide">
							

								<div class="item">
								<?php   foreach ($getPostsByCategoryVÍDEOS_EVENTOS as $post): ?>
									<div class="post-overaly-style text-center clearfix">
									   <div class="post-thumb">
									      <a href="single.php?id=<?php  echo $post['id'];   ?>">
									         <img class="img-responsive" src="admin/assets/img/post/<?php echo $post['image']?>" alt="" />
									      </a>
									   </div><!-- Post thumb end -->

									   <div class="post-content">
									     
									      <h2 class="post-title">
									         <a href="single.php?id=<?php  echo $post['id'];   ?>"><?php  echo $post['title'];   ?></a>
									      </h2>
									      <div class="post-meta">
									         <span class="post-date"><?php  echo date('F j, Y', strtotime($post['created_on']));   ?></span>
									      </div>
									   </div><!-- Post content end -->
									</div><!-- Post Overaly Article 3 end -->

									<?php   endforeach;?>

								</div><!-- Item 2 end -->

							</div><!-- Post slide carousel end -->

						</div><!-- Trending news end -->

					</div><!-- Sidebar right end -->
				</div><!-- Sidebar Col end -->