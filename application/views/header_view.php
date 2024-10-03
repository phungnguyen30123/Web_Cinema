<!-- Header section -->
<header class="header-wrapper">
            <div class="container">
             <!-- Logo link-->
             <a href="<?php echo base_url(); ?>index.php/Index_controller" class="logo">
                <img alt='logo' src="<?php echo base_url(); ?>images/logoid.png">
            </a>

            <!-- Main website navigation-->
            <nav id="navigation-box" style="margin-left: 250px; float:left;width: 1050px;">
                <!-- Toggle for mobile menu mode -->
                <a href="#" id="navigation-toggle">
                    <span class="menu-icon">
                        <span class="icon-toggle" role="button" aria-label="Toggle Navigation">
                          <span class="lines"></span>
                      </span>
                  </span>
              </a>

              <!-- Link navigation -->
              <!-- Link navigation -->
              <ul id="navigation">
                <li>
                    <span class="sub-nav-toggle plus"></span>
                    <a href="#">Phim</a>
                    <ul>

                        <li class="menu__nav-item"><a href="<?php echo base_url(); ?>index.php/ShowPhim/PhimDC">Phim đang chiếu</a></li>

                        <li class="menu__nav-item"><a href="<?php echo base_url(); ?>index.php/ShowPhim/PhimSC">Phim sắp chiếu</a></li>

                    </ul>
                </li>
                
                
                <li>
                    <span class="sub-nav-toggle plus"></span>
                    <a href="<?php echo base_url(); ?>index.php/offers_controller">Khuyến mãi</a>

                </li>
                <li>
                    <span class="sub-nav-toggle plus"></span>
                    <a href="<?php echo base_url(); ?>index.php/contract_controller">Liên hệ</a>

                </li>
                <li>
                    <span class="sub-nav-toggle plus"></span>
                    <a href="<?php echo base_url(); ?>index.php/showuser_controller/indexshowuser">Tài khoản</a>

                </li>

                <li></li>
            <li >
                <a href="<?php echo base_url(); ?>index.php/Login_register/indexregister" >
                      Đăng ký
                  </a>
            </li>
            <li>
               <?php 
               if($this->session->has_userdata('vipmember'))
               {
                  ?>
                  <a href="<?php echo base_url(); ?>index.php/showuser_controller/logout">Đăng xuất
                </a>


              <?php } else {?>
                <a href="<?php echo base_url(); ?>index.php/Login_register/indexlogin" >Đăng nhập
                  </a>
                

            <?php }?>

        </li>


            </ul>
            <a href="<?php echo base_url(); ?>index.php/ShowPhim/PhimDC" class="btn btn-md btn--warning btn--book " style="margin-right:-630px ; float: right;">MUA VÉ</a>
        </nav>

        


            </div>
        </header>