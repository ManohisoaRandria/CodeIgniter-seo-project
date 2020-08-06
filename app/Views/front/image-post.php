<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="<?php echo base_url(); ?>/public/front/img/logoico.ico">
	<!-- Author Meta -->
	<meta name="author" content="ngam">
	<meta name="robots" content="index, follow, noarchive">
	<!-- Meta Description -->
	<meta name="description" content="<?= $one[0]->getDescription() ?>">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title><?= ucfirst($one[0]->getTitre()) ?></title>
	<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
	<!--
		CSS
		============================================= -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>/public/front/css/linearicons.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>/public/front/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>/public/front/css/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>/public/front/css/magnific-popup.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>/public/front/css/nice-select.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>/public/front/css/animate.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>/public/front/css/owl.carousel.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>/public/front/css/jquery-ui.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>/public/front/css/main.css">
</head>

<body>
	<header>
		<div class="logo-wrap">
			<div class="container">
				<div class="row justify-content-between align-items-center">
					<div class="col-lg-4 col-md-4 col-sm-12 logo-left no-padding">
						<a href="index.html">
							<img class="img-fluid" src="<?php echo base_url(); ?>/public/front/img/logo.png" alt="Magazine -logo">
						</a>
					</div>
					<div class="col-lg-8 col-md-8 col-sm-12 logo-right no-padding ads-banner">

					</div>
				</div>
			</div>
		</div>
		<div class="container main-menu" id="main-menu">
			<div class="row align-items-center justify-content-between">
				<nav id="nav-menu-container">
					<ul class="nav-menu">
						<li class="menu-active"><a href="<?php echo base_url(); ?>">Home</a></li>
						<li><a href="<?php echo base_url(); ?>/apropos">A propos</a></li>
					</ul>
				</nav><!-- #nav-menu-container -->
				<!-- <div class="navbar-right">
					<form class="Search">
						<input type="text" class="form-control Search-box" name="Search-box" id="Search-box" placeholder="Search">
						<label for="Search-box" class="Search-box-label">
							<span class="lnr lnr-magnifier"></span>
						</label>
						<span class="Search-close">
							<span class="lnr lnr-cross"></span>
						</span>
					</form>
				</div> -->
			</div>
		</div>
	</header>

	<div class="site-main-container">
		<!-- Start top-post Area -->
		<section class="top-post-area pt-10">
			<div class="container no-padding">
				<div class="row">
					<div class="col-lg-12">
						<div class="news-tracker-wrap">
							<h6 class="text-white link-nav"><a href="<?php echo base_url(); ?>">Home </a> <span class="lnr lnr-arrow-right"></span><a href="<?php echo base_url(); ?>/article/<?= $one[0]->getTitreUrl() ?>-<?= $one[0]->getId() ?>.html"><?= $one[0]->getTitre() ?> </a></h6>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End top-post Area -->
		<!-- Start latest-post Area -->
		<section class="latest-post-area pb-120 ">
			<div class="container no-padding">
				<div class="row">
					<div class="col-lg-12 post-list">
						<!-- Start single-post Area -->
						<div class="single-post-wrap">
							<div class="feature-img-thumb relative">
								<div class="overlay overlay-bg"></div>
								<img class="img-fluid" src="<?php echo base_url(); ?>/<?= $one[0]->getPhoto() ?>" alt="<?= $one[0]->getTitre() ?>">
							</div>
							<div class="content-wrap">
								<ul class="tags mt-10">

									<li><?= $one[0]->getCategorie() ?></li>
								</ul>
								<h1><?= $one[0]->getTitre() ?></h1>
								<ul class="meta pb-20">
									<li><span class="lnr lnr-user"></span><?= $one[0]->getVue() ?></li>
									<li><span class="lnr lnr-calendar-full"></span><?= $one[0]->getDatePublication()->format("d-m-Y H:i") ?></li>
									<li><span class="lnr lnr-bubble"></span><?= $one[0]->getNbComments() ?></li>
								</ul>
								<h2>
									<?= $one[0]->getDescription() ?>
								</h2>
								<p>
									<?= $one[0]->getContenu() ?>
								</p>
								<div class="comment-sec-area">
									<div class="container">
										<div class="row flex-column">
											<h6><?= count($comments) ?> Comments</h6>
											<div class="comment-list">
												<?php for ($i = 0; $i < count($comments); $i++) {  ?>
													<div class="single-comment justify-content-between d-flex">
														<div class="user justify-content-between d-flex">
															<div class="thumb">
																<img src="<?php echo base_url(); ?>/public/front/img/blog/c1.jpg" alt="comments">
															</div>
															<div class="desc">
																<h5><?= $comments[$i]->getPseudo() ?></h5>
																<p class="date"><?= $comments[$i]->getDatepublication()->format("d-m-Y H:i") ?></p>
																<p class="comment">
																	<?= $comments[$i]->getContenu() ?>
																</p>
															</div>
														</div>
													</div>
												<?php } ?>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="comment-form">
								<h4>Post Comment</h4>
								<form action="<?= base_Url() ?>/article/comment/<?= $one[0]->getTitreUrl() ?>-<?= $one[0]->getId() ?>.htm" method="post">
									<div class="form-group">
										<input type="text" class="form-control" id="subject" name="pseudo" placeholder="Subject" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Subject'" required>
									</div>
									<div class="form-group">
										<textarea class="form-control mb-10" rows="5" name="contenu" placeholder="Messege" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'" required></textarea>
									</div>
									<input type="hidden" name="url" value="/article/<?= $one[0]->getTitreUrl() ?>-<?= $one[0]->getId() ?>.html">
									<button type="submit" class="primary-btn text-uppercase">Post Comment</a>
								</form>
							</div>
						</div>
						<!-- End single-post Area -->
					</div>
				</div>
			</div>
		</section>
		<!-- End latest-post Area -->
	</div>

	<!-- start footer Area -->
	<footer class="footer-area section-gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6 single-footer-widget">
					<h4>Top Links</h4>
					<ul>
						<li><a href="<?php echo base_url(); ?>">Home</a></li>
						<li><a href="<?php echo base_url(); ?>/apropos">A propos</a></li>
					</ul>
				</div>
				<div class="col-lg-3 col-md-6 single-footer-widget">
					<h4>Links</h4>
					<ul>
						<li><a href="<?php echo base_url(); ?>">Home</a></li>
						<li><a href="<?php echo base_url(); ?>/apropos">A propos</a></li>
					</ul>
				</div>
				<div class="col-lg-3 col-md-6 single-footer-widget">
					<h4>Liens</h4>
					<ul>
						<li><a href="<?php echo base_url(); ?>">Home</a></li>
						<li><a href="<?php echo base_url(); ?>/apropos">A propos</a></li>
					</ul>
				</div>
				<div class="col-lg-3 col-md-6 single-footer-widget">
					<h4>Instragram Feed</h4>
					<ul class="instafeed d-flex flex-wrap">
						<li><img src="<?php echo base_url(); ?>/public/front/img/i1.jpg" alt="insta1"></li>
						<li><img src="<?php echo base_url(); ?>/public/front/img/i2.jpg" alt="insta2"></li>
						<li><img src="<?php echo base_url(); ?>/public/front/img/i3.jpg" alt="insta3"></li>
						<li><img src="<?php echo base_url(); ?>/public/front/img/i4.jpg" alt="insta4"></li>
						<li><img src="<?php echo base_url(); ?>/public/front/img/i5.jpg" alt="insta5"></li>
						<li><img src="<?php echo base_url(); ?>/public/front/img/i6.jpg" alt="insta6"></li>
						<li><img src="<?php echo base_url(); ?>/public/front/img/i7.jpg" alt="insta7"></li>
						<li><img src="<?php echo base_url(); ?>/public/front/img/i8.jpg" alt="insta8"></li>
					</ul>
				</div>
			</div>
			<div class="footer-bottom row align-items-center">
				<p class="footer-text m-0 col-lg-8 col-md-12">
					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					Copyright &copy;<script>
						document.write(new Date().getFullYear());
					</script> All rights reserved | Magazine
					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
				</p>
				<div class="col-lg-4 col-md-12 footer-social">
					<a href="https://web.facebook.com/"><i class="fa fa-facebook"></i></a>
					<a href="https://twitter.com/"><i class="fa fa-twitter"></i></a>
				</div>
			</div>
		</div>
	</footer>
	<!-- End footer Area -->
	<script src="<?php echo base_url(); ?>/public/front/js/vendor/jquery-2.2.4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="<?php echo base_url(); ?>/public/front/js/vendor/bootstrap.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
	<script src="<?php echo base_url(); ?>/public/front/js/easing.min.js"></script>
	<script src="<?php echo base_url(); ?>/public/front/js/hoverIntent.js"></script>
	<script src="<?php echo base_url(); ?>/public/front/js/superfish.min.js"></script>
	<script src="<?php echo base_url(); ?>/public/front/js/jquery.ajaxchimp.min.js"></script>
	<script src="<?php echo base_url(); ?>/public/front/js/jquery.magnific-popup.min.js"></script>
	<script src="<?php echo base_url(); ?>/public/front/js/mn-accordion.js"></script>
	<script src="<?php echo base_url(); ?>/public/front/js/jquery-ui.js"></script>
	<script src="<?php echo base_url(); ?>/public/front/js/jquery.nice-select.min.js"></script>
	<script src="<?php echo base_url(); ?>/public/front/js/owl.carousel.min.js"></script>
	<script src="<?php echo base_url(); ?>/public/front/js/mail-script.js"></script>
	<script src="<?php echo base_url(); ?>/public/front/js/main.js"></script>
</body>

</html>