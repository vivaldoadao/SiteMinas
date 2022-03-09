<?php
$categories = selectAll('category');
/*
$posts = array();
if (isset($_POST['search-term'])) {
	$posts = searchPosts($_POST['search-term']);
}else {
	$posts = getPublishedPosts();
}

*/

//$searchPosts = searchPosts($term);
//dd($posts);

?>

<div class="main-nav clearfix">
		<div class="container">
			<div class="row">
				<nav class="site-navigation navigation">
					<div class="site-nav-inner pull-left">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						  <span class="sr-only">Toggle navigation</span>
						  <span class="icon-bar"></span>
						  <span class="icon-bar"></span>
						  <span class="icon-bar"></span>
						</button>

						<div class="collapse navbar-collapse navbar-responsive-collapse">
							<ul class="nav navbar-nav">
								<li class="dropdown active">
									<a href="index.php" >Página Inicial</a>
								
								</li>

								<li class="dropdown">
									<a href="sector_diamantifero.php?page=1" >Sector Diamantífero</a>
								
								</li>

								<li class="dropdown ">
									<a href="internacional.php?page=1" >Internacional</a>
								
								</li>

								<li class="dropdown ">
									<a href="videos_eventos.php?page=1" >Vídeo Eventos</a>
								
								</li>
								<li class="dropdown ">
									<a href="generalidade.php?page=1" >Generalidade</a>
								
								</li>
								<li class="dropdown ">
									<a href="contacto.php" >Contactos</a>
								
								</li>

								

							

							</ul><!--/ Nav ul end -->
						</div><!--/ Collapse end -->

					</div><!-- Site Navbar inner end -->
				</nav><!--/ Navigation end -->

				<div class="nav-search">
					<span id="search"><i class="fa fa-search"></i></span>
				</div><!-- Search end -->
				
				<div class="search-block" style="display: none;">
					<form action="posts.php?" method="GET">
					<input type="text" name="keyword" class="form-control" placeholder="Type what you want and enter">
					<span class="search-close">&times;</span>
					</form>
				</div><!-- Site search end -->

			</div><!--/ Row end -->
		</div><!--/ Container end -->

	</div><!-- Menu wrapper end -->