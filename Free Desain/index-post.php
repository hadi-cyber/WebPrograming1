<?php 	
include('load_data.php');
$db = new database_index();
$index_log = $db->tampil_index();
$index_post = $db->tampil();
?>
<!DOCTYPE php>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>Free Desain</title>

		<!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Lato:700%7CMontserrat:400,600" rel="stylesheet">

		<!-- Bootstrap -->
		<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>

		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="css/font-awesome.min.css">

		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="css/style.css"/>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/php5shiv/3.7.3/php5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

    </head>
	<body>

		<!-- Header -->
		<header id="header">
			<div class="container">

				<div class="navbar-header">
					<!-- Logo -->
					<div class="navbar-brand">
						<a href="index.php">
							<img src="./img/logo1.png" width="45" height="45">
						</a>
					</div>
					<!-- /Logo -->

					<!-- Mobile toggle -->
					<button class="navbar-toggle">
						<span></span>
					</button>
					<!-- /Mobile toggle -->
				</div>

				<!-- Navigation -->
				<nav id="nav">
					<ul class="main-menu nav navbar-nav navbar-right">
						<li><a href="index.php">Home</a></li>
						<li><a href="contact.php">Contact</a></li>
					</ul>
				</nav>
				<!-- /Navigation -->

			</div>
		</header>
		<!-- /Header -->

		<!-- Hero-area -->
		<div class="hero-area section">

			<!-- Backgound Image -->
			<div class="bg-image bg-parallax overlay" style="background-image:url(./img/home-background.jpg)"></div>
			<!-- /Backgound Image -->

			<div class="container">
				<?php 
						foreach($index_log as $row){
							?>
				<div class="row">
					<div class="col-md-10 col-md-offset-1 text-center">
						<ul class="hero-area-tree">
							<li><a href="blog.php">Home</a></li>
							<li><?php echo $row['nama_desain']?></li>
						</ul>
						<h1 class="white-text"><?php echo $row['nama_desain']?></h1>
						<ul class="blog-post-meta">
							<li class="blog-meta-author">By : <a href="#"><?php echo $row['editor']?></a></li>
							<li><?php echo $row['cdate']; ?></li>
						</ul>
					</div>
				</div>
			</div>
			<?php 
				}
			?>

		</div>
		<!-- /Hero-area -->

		<!-- Blog -->
		<div id="blog" class="section">

			<!-- container -->
			<div class="container">

				<!-- row -->
				<div class="row">

					<!-- main blog -->
					<div id="main" class="col-md-9">

						<!-- blog post -->
						<div class="blog-post">
							<blockquote><p><?php echo $row['deskripsi']; ?></p><blockquote>
							</br></br>
								<button class="main-button icon-button"><a href="<?php echo $row['link_download']; ?>">Download</button></a>
						</div>
						<!-- /blog post -->

						<!-- blog share -->
						<div class="blog-share">
							
						</div>
						<!-- /blog share -->

						<!-- blog comments -->
						<div class="blog-comments">
							<h3>0 Komentar</h3>

							<!-- blog reply form -->
							<div class="blog-reply-form">
								<h3>Tinggalkan Komentar</h3>
								<form>
									<input class="input name-input" type="text" name="name" placeholder="Nama">
									<input class="input email-input" type="email" name="email" placeholder="Email">
									<textarea class="input" name="message" placeholder="Tulis Komentar"></textarea>
									<button class="main-button icon-button">Submit</button>
								</form>
							</div>
							<!-- /blog reply form -->

						</div>
						<!-- /blog comments -->
					</div>
					<!-- /main blog -->

					<!-- aside blog -->
					<div id="aside" class="col-md-3">

						<!-- search widget -->
						<div class="widget search-widget">
							<form>
								<input class="input" type="text" name="search">
								<button><i class="fa fa-search"></i></button>
							</form>
						</div>
						<!-- /search widget -->

						<!-- category widget -->
						<div class="widget category-widget">
							<h3>Categories</h3>
							<a class="category" href="#">Desain Poster <span>4</span></a>
							<a class="category" href="#">lorem ipsum <span>0</span></a>
							<a class="category" href="#">lorem ipsum <span>0</span></a>
							<a class="category" href="#">lorem ipsum <span>0</span></a>
							<a class="category" href="#">lorem ipsum <span>0</span></a>
						</div>
						<!-- /category widget -->

						<!-- posts widget -->
						<div class="widget posts-widget">
							<h3>Recents Posts</h3>

							<!-- single posts -->
							<div class="single-post">
								<?php 
								foreach($index_post as $row){
									?>
								<a class="single-post-img" href="index-post.php">
									<img src="./adm/image/<?php echo $row['foto'] ?>">
								</a>
								<a href="index-post.php"><?php echo $row['nama_desain']?></a>
								<p><small>By :<?php echo $row['editor']?> .<?php echo $row['cdate'];?></small></p>
								<br></br>
								<?php 
									}
								?>
							</div>
							<!-- /single posts -->

						</div>
						<!-- /posts widget -->

						<!-- tags widget -->
						<div class="widget tags-widget">
							<h3>Tags</h3>
							<a class="tag" href="#">Web</a>
							<a class="tag" href="#">Photography</a>
							<a class="tag" href="#">Mockup</a>
							<a class="tag" href="#">Responsive</a>
							<a class="tag" href="#">Website</a>
							<a class="tag" href="#">Business</a>
						</div>
						<!-- /tags widget -->

					</div>
					<!-- /aside blog -->

				</div>
				<!-- row -->

			</div>
			<!-- container -->

		</div>
		<!-- /Blog -->

		<!-- Footer -->
		<footer id="footer" class="section">

			<!-- container -->
			<div class="container">

				<!-- row -->
				<div class="row">

					<!-- footer nav -->
					<div class="col-md-6">
						<ul class="footer-nav">
							<li><a href="index.php">Home</a></li>
							<li><a href="contact.php">Contact</a></li>
						</ul>
					</div>
					<!-- /footer nav -->

				</div>
				<!-- /row -->

				<!-- row -->
				<div id="bottom-footer" class="row">

					<!-- social -->
					<div class="col-md-4 col-md-push-8">
						<ul class="footer-social">
							<li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
						</ul>
					</div>
					<!-- /social -->

					<!-- copyright -->
					<div class="col-md-8 col-md-pull-4">
						<div class="footer-copyright">
							<span>&copy; Copyright Free Desain 2020. All Rights Reserved.</span>
						</div>
					</div>
					<!-- /copyright -->

				</div>
				<!-- row -->


			</div>
			<!-- /container -->

		</footer>
		<!-- /Footer -->

		<!-- preloader -->
		<div id='preloader'><div class='preloader'></div></div>
		<!-- /preloader -->


		<!-- jQuery Plugins -->
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/main.js"></script>

	</body>
</html>
