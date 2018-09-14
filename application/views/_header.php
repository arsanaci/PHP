<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
 
 
    <link rel="stylesheet" href="<?=base_url()?>assest/css/vendor/simple-line-icons.css">
    <link rel="stylesheet" href="<?=base_url()?>assest/css/vendor/tooltipster.css">
    <link rel="stylesheet" href="<?=base_url()?>assest/css/style.css">
    <!-- favicon -->
    <link rel="icon" href="favicon.ico">
    <title><?=$sayfa?></title>
    
</head>
<body>

    <!-- HEADER -->
    <div class="header-wrap">
        <header>
            <!-- LOGO -->
            <a href="<?=base_url()?>">
                <figure class="logo">
                    <img src="<?=base_url()?>assest/images/logo.png" alt="logo">
                </figure>
            </a>
            <!-- /LOGO -->

            <!-- MOBILE MENU HANDLER -->
            <div class="mobile-menu-handler left primary">
                <img src="<?=base_url()?>assest/images/pull-icon.png" alt="pull-icon">
            </div>
            <!-- /MOBILE MENU HANDLER -->

            <!-- LOGO MOBILE -->
            <a href="<?=base_url()?>">
                <figure class="logo-mobile">
                    <img src="<?=base_url()?>assest/images/logo_mobile.png" alt="logo-mobile">
                </figure>
            </a>
            <!-- /LOGO MOBILE -->

            <!-- MOBILE ACCOUNT OPTIONS HANDLER -->
            <div class="mobile-account-options-handler right secondary">
                <span class="icon-user"></span>
            </div>
            <!-- /MOBILE ACCOUNT OPTIONS HANDLER -->

            <!-- USER BOARD -->
            <div class="user-board">
                <!-- USER QUICKVIEW -->
                <div class="user-quickview">
                    <!-- USER AVATAR -->
                    <a href="<?=base_url()?><?php  if ($this->session->uye_session==NULL ) {
                                 echo "home/login_ol";
                                }
                                 else {
                                      echo "uye/hesabim";
                                      
                                    } ?> "><i class="fa fa-lock"></i>
                                <?php if ($this->session->uye_session==NULL ) {
                                 
                                }
                                 else {
                                     
                                      echo $this->session->uye_session["Name"];
                                      
                                    }
                                
                                ?>
                    <div class="outer-ring">
                        <div class="inner-ring"></div>
                        <figure class="user-avatar">
                            <img src="<?=base_url()?>uploads/film.jpg" height="40" >
                        </figure>
                    </div>
                    </a>

                    <!-- USER INFORMATION -->
                    <p class="user-name"></p>
                    <!-- SVG ARROW -->
                    <svg class="svg-arrow">
                        <use xlink:href="#svg-arrow"></use>
                    </svg>
      

                    <ul class="dropdown small hover-effect closed">

                    <div class="form-popup-content">
                   <?php if($this->session->uye_session["id"]==NULL){ ?>
                    <form id="login-form2" method="post" action="<?=base_url()?>home/login_ol">
                        <button class="button mid dark"><span class="primary">Giriş Yap</span></button>
                   
                    </form>
                    <?php }else{ ?>
                    <form id="login-form2" method="post" action="<?=base_url()?>home/uye_bilgi">
                        <button class="button mid dark"><span class="primary">Hesabım</span></button>
                    </form>
                    <?php } ?>
                </div>
                    </ul>
                    <!-- /DROPDOWN -->
                </div>
               
                <div class="account-information">
                
                    <div class="account-settings-quickview">
                        <a href="<?=base_url()?>uye/favoriler">
                        <div class="account-wishlist-quickview">    
                            <span class="icon-heart"></span>
                        </div>
                    </a>
                      
                    </div>
                </div>
   
                <div class="account-actions">
                
                    <a <?php  if ($this->session->uye_session==NULL ) { ?>
                        style="visibility:hidden" <?php } ?> href="<?=base_url()?>Uye/login_cik" class="button secondary">Çıkış</a>
                </div>
                <!-- /ACCOUNT ACTIONS -->
            </div>
            <!-- /USER BOARD -->
        </header>
    </div>
    <!-- /HEADER -->