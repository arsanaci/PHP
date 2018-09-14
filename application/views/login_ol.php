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

                  
                  
                    <li class="menu-item">
                        <a href="<?=base_url()?>home/bize_yazin">Bize Yazın</a>
                    </li>

                    <!-- MENU ITEM -->
                    <li class="menu-item">
                        <a href="<?=base_url()?>home/iletisim">İletişim</a>
                    </li>
                    

                
        </div>
    </div>
    <div class="section-headline-wrap">
        <div class="section-headline">
            <h2>Login</h2>
            <p>Anasayfa<span class="separator">/</span><span class="current-section">Login</span></p>
        </div>
    </div>

    <!-- SECTION -->
    <div class="section-wrap">
        <div class="section">
            <!-- CONTENT -->
       
                <!-- POST -->
                <article class="post blog-post">
                  
                        <div class="post-paragraph">
                           
                            <div class="form-popup">

                <!-- FORM POPUP HEADLINE -->
                <div class="form-popup-headline secondary">
                    <h2>Giriş Yapınız</h2>
                    
                </div>
               <div class="form-popup-content">
                    <form id="login-form2" method="post" action="<?=base_url()?>home/login">


                        <?php if($this->session->flashdata("mesaj")) { ?>

                         <p>  <?=$this->session->flashdata("mesaj")?> </p>

                         <?php } ?>

                        <label class="rl-label">Email</label>
                        <input type="email" name="email">
                        <label class="rl-label">Şifre</label>
                        <input type="password" name="sifre">
                        <!-- CHECKBOX -->
                        <input type="checkbox" id="remember2" name="remember2" checked="">
                        <label for="remember2" class="label-check">
                            <span class="checkbox primary primary"><span></span></span>
                            Beni Hatırla
                        </label>
                        <!-- /CHECKBOX -->
                       
                        <button class="button mid dark"><span class="primary">Giriş Yap</span></button><br>

                        <a href="<?=base_url()?>uye/ekle"<button class="button mid dark"><span class="primary">Üye Ol</span></button></a>
                    </form>
                    <!-- LINE SEPARATOR -->
                    
                    <!-- /LINE SEPARATOR -->  
                   </div>
                <!-- /FORM POPUP CONTENT -->
            </div>
                    
                </article>    
            </div>
                        <!-- /POST PARAGRAPH -->
                    </div>
                  </div>
                    
      