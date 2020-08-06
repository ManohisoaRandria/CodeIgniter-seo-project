<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="<?php echo base_url(); ?>/public/front/img/fav.png">
	<!-- Author Meta -->
	<meta name="author" content="colorlib">
	<!-- Meta Description -->
	<meta name="description" content="Magazine - le 1ér site d'information -Suivez les actualités du jour  sur Le Monde, retrouvez tous les articles du journal: International, Science, Economie, Faits Divers, Santé, Sport, Madagascar...">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>Magazine - Actualité divers du jour partout dans le monde</title>
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
						<a href="home">
							<img class="img-fluid" src="<?php echo base_url(); ?>/public/front/img/logo.png" alt="">
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
						<li class="menu-has-children"><a href="#">Categorie de poste</a>
							<ul>
								<?php for ($i = 0; $i < count($categs); $i++) { ?>
									<li><a href="<?php echo base_url(); ?>/home?ref=<?= $categs[$i]->getNom() ?>"><?= $categs[$i]->getNom() ?></a></li>
								<?php } ?>
							</ul>
						</li>
						<li><a href="apropos">A propos</a></li>
					</ul>
				</nav><!-- #nav-menu-container -->
				<div class="navbar-right">

					<form class="Search" method="post" action="<?php echo base_url(); ?>/home/test">
						<input type="text" class="form-control Search-box" value="" name="pseudo" id="Search-box" placeholder="Search">
						<label for="Search-box" class="Search-box-label">
							<span class="lnr lnr-magnifier"></span>
						</label>
						<span class="Search-close">
							<span class="lnr lnr-cross"></span>
						</span>
					</form>
				</div>
			</div>
		</div>
	</header>

	<div class="site-main-container">
		<!-- Start top-post Area -->
		<section class="top-post-area pt-10">
			<div class="container no-padding">
				<div class="row small-gutters">
					<div class="col-lg-8 top-post-left">
						<div class="feature-image-thumb relative">
							<div class="overlay overlay-bg"></div>
							<img class="img-fluid" src="<?php echo base_url(); ?>/public/front/img/top-post2.jpg" alt="">
						</div>
						<div class="top-post-details">
							<ul class="tags">
								<li>Bienvenue</li>
							</ul>

							<h1 style="color:white;">Le Magazine le plus à jour et le plus complet du monde</h1>

							<ul class="meta">
								<li>
									<h5 style="color: white;">Avec plus d'actualité dans divers domaine que les autres</h5>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-lg-4 top-post-right">
						<div class="single-top-post">
							<div class="feature-image-thumb relative">
								<div class="overlay overlay-bg"></div>
								<img class="img-fluid" src="<?php echo base_url(); ?>/<?= $recent[0]->getPhoto() ?>" alt="">
							</div>
							<div class="top-post-details">
								<ul class="tags">
									<li><?= $recent[0]->getCategorie() ?></li>
								</ul>
								<a href="article/<?= $recent[0]->getTitreUrl() ?>-<?= $recent[0]->getId() ?>.html">
									<h4><?= $recent[0]->getTitre() ?></h4>
								</a>
								<ul class="meta">
									<li><a href="#"><span class="lnr lnr-user"></span><?= $recent[0]->getVue() ?></a></li>
									<li><a href="#"><span class="lnr lnr-calendar-full"></span><?= $recent[0]->getDatePublication()->format("d-m-Y H:i") ?></a></li>
									<li><a href="#"><span class="lnr lnr-bubble"></span><?= $recent[0]->getNbComments() ?></a></li>
								</ul>
							</div>
						</div>
						<div class="single-top-post mt-10">
							<div class="feature-image-thumb relative">
								<div class="overlay overlay-bg"></div>
								<img class="img-fluid" src="<?php echo base_url(); ?>/<?= $recent[1]->getPhoto() ?>" alt="">
							</div>
							<div class="top-post-details">
								<ul class="tags">
									<li><a href="#"><?= $recent[1]->getCategorie() ?></a></li>
								</ul>
								<a href="article/<?= $recent[1]->getTitreUrl() ?>-<?= $recent[1]->getId() ?>.html">
									<h4><?= $recent[1]->getTitre() ?></h4>
								</a>
								<ul class="meta">
									<li><a href="#"><span class="lnr lnr-user"></span><?= $recent[1]->getVue() ?></a></li>
									<li><a href="#"><span class="lnr lnr-calendar-full"></span><?= $recent[1]->getDatePublication()->format("d-m-Y H:i") ?></a></li>
									<li><a href="#"><span class="lnr lnr-bubble"></span><?= $recent[1]->getNbComments() ?></a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-lg-12">
						<div class="news-tracker-wrap">
							<h6><span><strong>Magazine:</strong></span> regoupe les <strong>actualités </strong> récents dans tout les domaine pour vous <strong> mettre à jours</strong></h6>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End top-post Area -->
		<!-- Start latest-post Area -->
		<section class="latest-post-area pb-120">
			<div class="container no-padding">
				<div class="row">
					<div class="col-lg-8 post-list">
						<!-- Start latest-post Area -->
						<div class="latest-post-wrap">
							<h4 class="cat-title">Actualités</h4>
							<?php for ($i = 0; $i < count($recent); $i++) { ?>

								<div class="single-latest-post row align-items-center">
									<div class="col-lg-5 post-left">
										<div class="feature-img relative">
											<div class="overlay overlay-bg"></div>
											<img class="img-fluid" src="<?php echo base_url(); ?>/<?= $recent[$i]->getPhoto() ?>" alt="">
										</div>
										<ul class="tags">
											<li><?= $recent[$i]->getCategorie() ?></li>
										</ul>
									</div>
									<div class="col-lg-7 post-right">
										<a href="article/<?= $recent[$i]->getTitreUrl() ?>-<?= $recent[$i]->getId() ?>.html">
											<h4><?= $recent[$i]->getTitre() ?></h4>
										</a>
										<ul class="meta">
											<li><a href="#"><span class="lnr lnr-user"></span><?= $recent[$i]->getVue() ?></a></li>
											<li><a href="#"><span class="lnr lnr-calendar-full"></span><?= $recent[$i]->getDatePublication()->format("d-m-Y H:i") ?></a></li>
											<li><a href="#"><span class="lnr lnr-bubble"></span><?= $recent[$i]->getNbComments() ?></a></li>
										</ul>
										<p class="excert">
											<?= $recent[$i]->getDescription() ?>
										</p>
									</div>
								</div>
							<?php } ?>
						</div>
						<!-- End latest-post Area -->

						<!-- Start banner-ads Area -->
						<!-- <div class="col-lg-12 ad-widget-wrap mt-30 mb-30">
								<img class="img-fluid" src="public/front/img/banner-ad.jpg" alt="">
							</div> -->
						<!-- End banner-ads Area -->
						<!-- Start popular-post Area -->
						<?php if (isset($popular) && count($popular) != 0) { ?>
							<div class="popular-post-wrap">
								<h4 class="title">Popular Posts</h4>
								<div class="feature-post relative">
									<div class="feature-img relative">
										<div class="overlay overlay-bg"></div>
										<img class="img-fluid" src="<?php echo base_url(); ?>/<?= $popular[0]->getPhoto() ?>" alt="">
									</div>
									<div class="details">
										<ul class="tags">
											<li><a href="#"><?= $popular[0]->getCategorie() ?></a></li>
										</ul>
										<a href="article/<?= $popular[0]->getTitreUrl() ?>-<?=$popular[0]->getId() ?>.html">
											<h3><?= $popular[0]->getTitre() ?></h3>
										</a>
										<ul class="meta">
											<li><a href="#"><span class="lnr lnr-user"></span><?= $popular[0]->getVue() ?></a></li>
											<li><a href="#"><span class="lnr lnr-calendar-full"></span><?= $popular[0]->getDatePublication()->format("d-m-Y H:i") ?></a></li>
											<li><a href="#"><span class="lnr lnr-bubble"></span><?= $popular[0]->getNbComments() ?></a></li>
										</ul>
									</div>
								</div>

								<div class="row mt-20 medium-gutters">
									<?php for ($i = 1; $i < count($popular); $i++) { ?>
										<div class="col-lg-6 single-popular-post">
											<div class="feature-img-wrap relative">
												<div class="feature-img relative">
													<div class="overlay overlay-bg"></div>
													<img class="img-fluid" src="<?php echo base_url(); ?>/<?= $popular[$i]->getPhoto() ?>" alt="">
												</div>
												<ul class="tags">
													<li><a href="#"><?= $popular[$i]->getCategorie() ?></a></li>
												</ul>
											</div>
											<div class="details">
												<a href="article/<?= $popular[$i]->getTitreUrl() ?>-<?= $popular[$i]->getId() ?>.html">
													<h4><?= $popular[$i]->getTitre() ?></h4>
												</a>
												<ul class="meta">
													<li><a href="#"><span class="lnr lnr-user"></span><?= $popular[$i]->getVue() ?></a></li>
													<li><a href="#"><span class="lnr lnr-calendar-full"></span><?= $popular[$i]->getDatePublication()->format("d-m-Y H:i") ?></a></li>
													<li><a href="#"><span class="lnr lnr-bubble"></span><?= $popular[$i]->getNbComments() ?></a></li>
												</ul>
												<p class="excert">
													<?= $popular[$i]->getDescription() ?>
												</p>
											</div>
										</div>
									<?php } ?>
								</div>
							</div>
						<?php } ?>
						<!-- End popular-post Area -->
						<!-- Start relavent-story-post Area -->
						<?php if (isset($reportage) && count($reportage) != 0) { ?>
							<div class="relavent-story-post-wrap mt-30">
								<h4 class="title">Reportage</h4>
								<div class="relavent-story-list-wrap">
									<?php for ($i = 0; $i < count($reportage); $i++) { ?>
										<div class="single-relavent-post row align-items-center">
											<div class="col-lg-5 post-left">
												<div class="feature-img relative">
													<div class="overlay overlay-bg"></div>
													<img class="img-fluid" src="<?php echo base_url(); ?><?= $reportage[$i]->getPhoto() ?>" alt="">
												</div>
												<ul class="tags">
													<li><a href="#"><?= $reportage[$i]->getCategorie() ?></a></li>
												</ul>
											</div>
											<div class="col-lg-7 post-right">
												<a href="article/<?= $reportage[$i]->getTitreUrl() ?>-<?= $reportage[$i]->getId()?>.html">
													<h4><?= $reportage[$i]->getTitre() ?></h4>
												</a>
												<ul class="meta">
													<li><a href="#"><span class="lnr lnr-user"></span><?= $reportage[$i]->getVue() ?></a></li>
													<li><a href="#"><span class="lnr lnr-calendar-full"></span><?= $reportage[$i]->getDatePublication()->format("d-m-Y H:i") ?></a></li>
													<li><a href="#"><span class="lnr lnr-bubble"></span><?= $reportage[$i]->getNbComments() ?></a></li>
												</ul>
												<p class="excert">
													<?= $reportage[$i]->getDescription() ?>
												</p>
											</div>
										</div>
									<?php } ?>
								</div>
							</div>
						<?php } ?>
						<!-- End relavent-story-post Area -->
					</div>
					<div class="col-lg-4">
						<div class="sidebars-area">
							<?php if (isset($mostview) && count($mostview) != 0) { ?>
								<div class="single-sidebar-widget editors-pick-widget">
									<h6 class="title">Les plus lus</h6>
									<div class="editors-pick-post">

										<div class="post-lists">
											<?php for ($i = 0; $i < count($mostview); $i++) { ?>
												<div class="single-post d-flex flex-row">
													<div class="thumb">
														<img style="width: 100px;height:80px;" src="<?php echo base_url(); ?>/<?= $mostview[$i]->getPhoto() ?>" alt="">
													</div>
													<div class="detail">
														<a href="article/<?= $mostview[$i]->getTitreUrl() ?>-<?=$mostview[$i]->getId()?>.html">
															<h6><?= $mostview[$i]->getTitre() ?></h6>
														</a>
														<ul class="meta">
															<li><a href="#"><span class="lnr lnr-calendar-full"></span><?= $mostview[$i]->getDatePublication()->format("d-m-Y H:i") ?></a></li>
															<li><a href="#"><span class="lnr lnr-bubble"></span><?= $mostview[$i]->getNbComments() ?></a></li>
														</ul>
													</div>
												</div>
											<?php } ?>
										</div>
									</div>
								</div>
							<?php } ?>
							<div class="single-sidebar-widget ads-widget">
								<img class="img-fluid" src="<?php echo base_url(); ?>/public/front/img/sidebar-ads.jpg" alt="">
							</div>
							<div class="single-sidebar-widget social-network-widget">
								<h6 class="title">Retrouvez-nous sur les réseau sociaux</h6>
								<ul class="social-list">
									<li class="d-flex justify-content-between align-items-center fb">
										<div class="icons d-flex flex-row align-items-center">
											<i class="fa fa-facebook" aria-hidden="true"></i>
											<p>983 Likes</p>
										</div>
										<a href="https://web.facebook.com/">Like our page</a>
									</li>
									<li class="d-flex justify-content-between align-items-center tw">
										<div class="icons d-flex flex-row align-items-center">
											<i class="fa fa-twitter" aria-hidden="true"></i>
											<p>983 Followers</p>
										</div>
										<a href="https://twitter.com/">Follow Us</a>
									</li>
									<li class="d-flex justify-content-between align-items-center yt">
										<div class="icons d-flex flex-row align-items-center">
											<i class="fa fa-youtube-play" aria-hidden="true"></i>
											<p>983 Subscriber</p>
										</div>
										<a href="https://youtube.com/">Subscribe</a>
									</li>
								</ul>
							</div>
						</div>
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
						<li><img src="<?php echo base_url(); ?>/public/front/img/i1.jpg" alt=""></li>
						<li><img src="<?php echo base_url(); ?>/public/front/img/i2.jpg" alt=""></li>
						<li><img src="<?php echo base_url(); ?>/public/front/img/i3.jpg" alt=""></li>
						<li><img src="<?php echo base_url(); ?>/public/front/img/i4.jpg" alt=""></li>
						<li><img src="<?php echo base_url(); ?>/public/front/img/i5.jpg" alt=""></li>
						<li><img src="<?php echo base_url(); ?>/public/front/img/i6.jpg" alt=""></li>
						<li><img src="<?php echo base_url(); ?>/public/front/img/i7.jpg" alt=""></li>
						<li><img src="<?php echo base_url(); ?>/public/front/img/i8.jpg" alt=""></li>
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