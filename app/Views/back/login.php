<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Login Register | Notika - Notika Admin Template</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- favicon
		============================================ -->
  <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
  <!-- Google Fonts
		============================================ -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
  <!-- Bootstrap CSS
		============================================ -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/public/back/css/bootstrap.min.css">
  <!-- font awesome CSS
		============================================ -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/public/back/css/font-awesome.min.css">
  <!-- owl.carousel CSS
		============================================ -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/public/back/css/owl.carousel.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/public/back/css/owl.theme.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/public/back/css/owl.transitions.css">
  <!-- animate CSS
		============================================ -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/public/back/css/animate.css">
  <!-- normalize CSS
		============================================ -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/public/back/css/normalize.css">
  <!-- mCustomScrollbar CSS
		============================================ -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/public/back/css/scrollbar/jquery.mCustomScrollbar.min.css">
  <!-- wave CSS
		============================================ -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/public/back/css/wave/waves.min.css">
  <!-- Notika icon CSS
		============================================ -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/public/back/css/notika-custom-icon.css">
  <!-- main CSS
		============================================ -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/public/back/css/main.css">
  <!-- style CSS
		============================================ -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/public/back/css/style.css">
  <!-- responsive CSS
		============================================ -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/public/back/css/responsive.css">
  <!-- modernizr JS
		============================================ -->
  <script src="<?php echo base_url(); ?>/public/back/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
  <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
  <!-- Login Register area Start-->
  <div class="login-content">
    <!-- Login -->
    <div class="nk-block toggled" id="l-login">
      <form action="<?php echo base_url(); ?>/back/login" method="post">
        <div class="nk-form">
          <?php if (isset($error) && $error != '') { ?>
            <p style="color: red;"><?= $error?></p>
          <?php } ?>
          <div class="input-group">
            <span class="input-group-addon nk-ic-st-pro"><i class="notika-icon notika-support"></i></span>
            <div class="nk-int-st">
              <input type="text" class="form-control" placeholder="Username" name="pseudo">
            </div>
          </div>
          <div class="input-group mg-t-15">
            <span class="input-group-addon nk-ic-st-pro"><i class="notika-icon notika-edit"></i></span>
            <div class="nk-int-st">
              <input type="password" class="form-control" placeholder="Password" name="mdp">
            </div>
          </div>
          <div class="fm-checkbox" style="text-align: right;">
            <button type="submit" class="button btn">
              valider
              <i class="notika-icon notika-right-arrow"></i>
            </button>
          </div>
        </div>
      </form>
    </div>
  </div>
  <!-- Login Register area End-->
  <!-- jquery
		============================================ -->
  <script src="<?php echo base_url(); ?>/public/back/js/vendor/jquery-1.12.4.min.js"></script>
  <!-- bootstrap JS
		============================================ -->
  <script src="<?php echo base_url(); ?>/public/back/js/bootstrap.min.js"></script>
  <!-- wow JS
		============================================ -->
  <script src="<?php echo base_url(); ?>/public/back/js/wow.min.js"></script>
  <!-- price-slider JS
		============================================ -->
  <script src="<?php echo base_url(); ?>/public/back/js/jquery-price-slider.js"></script>
  <!-- owl.carousel JS
		============================================ -->
  <script src="<?php echo base_url(); ?>/public/back/js/owl.carousel.min.js"></script>
  <!-- scrollUp JS
		============================================ -->
  <script src="<?php echo base_url(); ?>/public/back/js/jquery.scrollUp.min.js"></script>
  <!-- meanmenu JS
		============================================ -->
  <script src="<?php echo base_url(); ?>/public/back/js/meanmenu/jquery.meanmenu.js"></script>
  <!-- counterup JS
		============================================ -->
  <script src="<?php echo base_url(); ?>/public/back/js/counterup/jquery.counterup.min.js"></script>
  <script src="<?php echo base_url(); ?>/public/back/js/counterup/waypoints.min.js"></script>
  <script src="<?php echo base_url(); ?>/public/back/js/counterup/counterup-active.js"></script>
  <!-- mCustomScrollbar JS
		============================================ -->
  <script src="<?php echo base_url(); ?>/public/back/js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
  <!-- sparkline JS
		============================================ -->
  <script src="<?php echo base_url(); ?>/public/back/js/sparkline/jquery.sparkline.min.js"></script>
  <script src="<?php echo base_url(); ?>/public/back/js/sparkline/sparkline-active.js"></script>
  <!-- flot JS
		============================================ -->
  <script src="<?php echo base_url(); ?>/public/back/js/flot/jquery.flot.js"></script>
  <script src="<?php echo base_url(); ?>/public/back/js/flot/jquery.flot.resize.js"></script>
  <script src="<?php echo base_url(); ?>/public/back/js/flot/flot-active.js"></script>
  <!-- knob JS
		============================================ -->
  <script src="<?php echo base_url(); ?>/public/back/js/knob/jquery.knob.js"></script>
  <script src="<?php echo base_url(); ?>/public/back/js/knob/jquery.appear.js"></script>
  <script src="<?php echo base_url(); ?>/public/back/js/knob/knob-active.js"></script>
  <!--  Chat JS
		============================================ -->
  <script src="<?php echo base_url(); ?>/public/back/js/chat/jquery.chat.js"></script>
  <!--  wave JS
		============================================ -->
  <script src="<?php echo base_url(); ?>/public/back/js/wave/waves.min.js"></script>
  <script src="<?php echo base_url(); ?>/public/back/js/wave/wave-active.js"></script>
  <!-- icheck JS
		============================================ -->
  <script src="<?php echo base_url(); ?>/public/back/js/icheck/icheck.min.js"></script>
  <script src="<?php echo base_url(); ?>/public/back/js/icheck/icheck-active.js"></script>
  <!--  todo JS
		============================================ -->
  <script src="<?php echo base_url(); ?>/public/back/js/todo/jquery.todo.js"></script>
  <!-- Login JS
		============================================ -->
  <script src="<?php echo base_url(); ?>/public/back/js/login/login-action.js"></script>
  <!-- plugins JS
		============================================ -->
  <script src="<?php echo base_url(); ?>/public/back/js/plugins.js"></script>
  <!-- main JS
		============================================ -->
  <script src="<?php echo base_url(); ?>/public/back/js/main.js"></script>
</body>

</html>