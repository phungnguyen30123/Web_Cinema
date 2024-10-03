<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Đăng ký</title>

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
         <div class="banner-top">
        <img alt='top banner' src="<?php echo base_url(); ?>images/banner.png" style="height:90px; width:1600px">
    </div>
        <!-- Header section -->
        <?php require('header_view.php') ?>
        
       
        
        <!-- Main content -->
                <form id="login-form" class="login" action="register" method='post' enctype="multidata/form-data">
                    <p class="login__title">ĐĂNG KÝ <br><span class="login-edition"></span></p>

                   
                    <div class="field-wrap">Email
                    <input type='fullname' placeholder='Email' name='user-email' class="login__input" required>
                    Mật Khẩu
                    <input type='text' placeholder='Password' name='user-password' class="login__input" required>
                    Nhập lại mật khẩu
                    <input type='text' placeholder='Password' name='user-password-re' class="login__input" required>
                    Họ tên
                    <input type='fullname' placeholder='Nhập họ tên tại đây' name='user-name' class="login__input" required>
                    Ngày Sinh
                    <input type='datebirth' placeholder='Ngày sinh của bạn' name='user-datebirth' class="login__input" required>
                    Số Điện Thoại
                    <input type='sdt' placeholder='Số điện thoại' name='user-sdt' class="login__input" required>
                    Địa chỉ
                    <input type='address' placeholder='Địa chỉ' name='user-address' class="login__input" required>

                   
                     </div>
                    
                    <div class="login__control">
                        <button type='submit' class="btn btn-md btn--warning btn--wider">GỬI</button>
                        
                    </div>
                </form>
        
        <div class="clearfix"></div>
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