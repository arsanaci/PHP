<div class="main-menu-wrap">
        <div class="menu-bar">
            <nav>
                <ul class="main-menu">
                    <!-- MENU ITEM -->
                    <li class="menu-item">
                         <a href="<?=base_url()?>">Anasayfa</a>
                    </li>
                    <!-- /MENU ITEM -->

                    <!-- MENU ITEM -->
                    <li class="menu-item">
                        <a href="<?=base_url()?>home/hakkimizda">Hakkımızda</a>
                    </li>

                    <!-- MENU ITEM -->
                    <li class="menu-item">
                        <a href="<?=base_url()?>home/kategoriler">Kategoriler</a>
                    </li>
                   

                    <li class="menu-item">
                        <a href="<?=base_url()?>home/bize_yazin">Bize Yazın</a>
                    </li>

                    <!-- MENU ITEM -->
                    <li class="menu-item">
                        <a href="<?=base_url()?>home/iletisim">İletişim</a>
                    </li>
                   
                    <!-- /MENU ITEM -->

                
        </div>
    </div>


<div class="section-headline-wrap">
        <div class="section-headline">
            <h2>Bize Yazın</h2>
            <p>Anasayfa<span class="separator">/</span><span class="current-section">Bize Yazın</span></p>
        </div>
    </div>
    <!-- /SECTION HEADLINE -->

    <!-- SECTION -->
    <div class="section-wrap" >
        <div class="section">
            <!-- CONTENT -->
            <div class="content left">
                <!-- POST -->
                <article class="post blog-post">
                   
                        <div class="post-paragraph">
                           
                            <!--/Form Bilgileri -->
                            <div class="form-popup">
               

                <!-- FORM POPUP HEADLINE -->
                <div class="form-popup-headline primary">
                    <form method="post" action="<?=base_url()?>home/mesaj_kaydet">
                    <h2>
                    <p>Kişi Bilgileri</p></h2>

                </div>
                <?php if ($this->session->flashdata("mesaj")) { ?>
                        <a href="#" class="button mid dark alert-info">
                            <span class="primary">
                        
                               
                            <?=$this->session->flashdata("mesaj")?></span></a>
                            
                            <?php } ?>
                
                <div class="form-popup-content">
                    <form id="register-form4" >
                        <label for="username6" class="rl-label">Adınız</label>
                        <input type="text" name="adsoy" >
                        <label for="email_address6" class="rl-label">Mail Adresiniz</label>
                        <input type="email" name="email" > 
                        <label for="username6" class="rl-label">Telefon Numaranız</label>
                        <input type="text"  name="tel" >
                        <label for="username6" class="rl-label">Mesajınız</label>
                        <textarea name="mesaj" rows="10" cols="70" > </textarea>                       
                        
                        <button class="button mid dark"><span class="primary">GÖNDER</span></button>
                    </form>
                    </form
                </div>
                <!-- /FORM POPUP CONTENT -->
            </div>
            <!--/Form Bilgileri Bitiş-->
                        </div>
                        <!-- /POST PARAGRAPH -->
                    </div>
                    <!-- /POST CONTENT -->

                    <hr class="line-separator">

                    <!-- SHARE -->
                    
                        <!-- /SHARE LINKS -->
                    </div>
                    <!-- /SHARE -->
                </article>
                <!-- /POST -->
  
                            <!-- /COMMENT REPLY FORM -->
                        </div>
                        <!-- /COMMENT REPLY -->
                    </div>
                    <!-- /COMMENTS -->
                </div>
                <!-- /BLOG COMMENTS -->
            </div>
            <!-- CONTENT -->
