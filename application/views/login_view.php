<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Đăng nhập</title>

	<!-- Mobile Specific Metas-->
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="telephone=no" name="format-detection">
    
    <!-- Fonts -->
        <!-- Font awesome - icon font -->
        <link href="<?php echo base_url(); ?>https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <!-- Roboto -->
        <link href='<?php echo base_url(); ?>http://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>
    
    <!-- Stylesheets -->

        <!-- Mobile menu -->
        <link href="<?php echo base_url(); ?>css/gozha-nav.css" rel="stylesheet" />
        <!-- Select -->
        <link href="<?php echo base_url(); ?>css/external/jquery.selectbox.css" rel="stylesheet" />
    
        <!-- Custom -->
        <link href="<?php echo base_url(); ?>css/style.css?v=1" rel="stylesheet" />

        <!-- Modernizr --> 
        <script src="<?php echo base_url(); ?>js/external/modernizr.custom.js"></script>
    
</head>
<body>

	<div class="wrapper">
        <!-- Banner -->
        <!-- <div class="banner-top">
            <img alt='top banner' src="images/banners/bra.jpg">
        </div> -->
        <div class="banner-top">
        <img alt='top banner' src="<?php echo base_url(); ?>images/banner.png" style="height:90px; width:1600px">
    </div>

        <!-- Header section -->
       <?php require('header_view.php') ?>


        
       
        
        <!-- Main content -->
                <form id="login-form" class="login" action="login" method='post' enctype="multidata/form-data">
                    <p class="login__title">Đăng nhập <br><span class="login-edition"></span></p>

                    
                    
                    <div class="field-wrap">
                    <input type='email' placeholder='Email' name='user-email' class="login__input">
            <input type='password' placeholder='Password' name='user-password' class="login__input">

                    <input type='checkbox' id='#informed' class='login__check styled'>
                    <label for='' class='login__check-info'></label>
                     </div>
                    
                    <div class="login__control">
                        <button type='submit' class="btn btn-md btn--warning btn--wider">sign in</button>
                       
                    </div>
                </form>
        
        <div class="clearfix"></div>
    </div>

    <footer class="footer-wrapper">
            <section class="container">
                <div class="col-xs-4 col-md-2 footer-nav">
                    <ul class="nav-link">
                   
                        <li><a href="<?php echo base_url(); ?>index.php/Index_controller" class="nav-link__item">Phim</a></li>
                        <li><a href="<?php echo base_url(); ?>index.php/trailer_controller" class="nav-link__item">Trailers</a></li>
                        <li><a href="rates-left.html" class="nav-link__item">Đánh Giá</a></li>
                    </ul>
                </div>
                <div class="col-xs-4 col-md-2 footer-nav">
                    <ul class="nav-link">
                        <li><a href="<?php echo base_url(); ?>index.php/ShowPhim/PhimDC" class="nav-link__item">Phim Đang Chiếu</a></li>
                        <li><a href="<?php echo base_url(); ?>index.php/offers.controller" class="nav-link__item">Khuyến Mãi</a></li>
                        <li><a href="news-left.html" class="nav-link__item">Tin Tức</a></li>
                    </ul>
                </div>
                <div class="col-xs-4 col-md-2 footer-nav">
                    <ul class="nav-link">
                        <li><a href="<?php echo base_url(); ?>index.php/ShowPhim/PhimSC" class="nav-link__item">Phim Sắp chiếu</a></li>
                        <li><a href="<?php echo base_url(); ?>index.php/contract_controller" class="nav-link__item">Liên Hệ</a></li>
                        <li><a href="page-elements.html" class="nav-link__item">Rạp</a></li>
                    </ul>
                </div>
                <div class="col-xs-12 col-md-6">
                    <div class="footer-info">
                        <p class="heading-special--small">YOUNET MEDIA<br><span class="title-edition">in the social media</span></p>

                        <div class="social">
                            <a href='https://www.facebook.com/vku.udn.vn' class="social__variant fa fa-facebook"></a>
                            <a href='#' class="social__variant fa fa-twitter"></a>
                            <a href='#' class="social__variant fa fa-vk"></a>
                            <a href='#' class="social__variant fa fa-instagram"></a>
                            <a href='#' class="social__variant fa fa-tumblr"></a>
                            <a href='#' class="social__variant fa fa-pinterest"></a>
                        </div>
                        
                        <div class="clearfix"></div>
                       
                    </div>
                </div>
            </section>
        </footer>
    </div>

	<!-- JavaScript-->
        <!-- jQuery 3.1.1--> 
        <script src="<?php echo base_url(); ?>https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/external/jquery-3.1.1.min.js"><\/script>')</script>
        <!-- Migrate --> 
        <script src="<?php echo base_url(); ?>js/external/jquery-migrate-1.2.1.min.js"></script>
        <!-- Bootstrap 3--> 
        <script src="<?php echo base_url(); ?>http://netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min.js"></script>

        <!-- Mobile menu -->
        <script src="<?php echo base_url(); ?>js/jquery.mobile.menu.js"></script>
         <!-- Select -->
        <script src="<?php echo base_url(); ?>js/external/jquery.selectbox-0.2.min.js"></script>
        <!-- Form element -->
        <script src="<?php echo base_url(); ?>js/external/form-element.js"></script>
        <!-- Form validation -->
        <script src="<?php echo base_url(); ?>js/form.js"></script>

        <!-- Custom -->
        <script src="<?php echo base_url(); ?>js/custom.js"></script>
	
</body>
</html>