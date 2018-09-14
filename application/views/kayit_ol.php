z<div class="main-menu-wrap">
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
            <h2>Uye Ol</h2>
            <p>Login<span class="separator">/</span><span class="current-section">Uye Ol</span></p>
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
                    <form id="login-form2" method="post" action="<?=base_url()?>uye/ekle_kaydet">


                        <?php if($this->session->flashdata("mesaj")) { ?>

                         <p>  <?=$this->session->flashdata("mesaj")?> </p>

                         <?php } ?>

                        <label for="username6" class="rl-label">Adınız Soyadınız</label>
                        <input type="text" name="name" >
                        <label for="email_address6" class="rl-label">Mail Adresiniz</label>
                        <input type="email" name="email" > 
                        <label for="username6" class="rl-label">Telefon Numaranız</label>
                        <input type="text"  name="tel" >
                        <label for="username6" class="rl-label">Yaşadığınız Şehir</label>
                        <input type="text"  name="sehir" >

                        <label class="rl-label">Şifreniz</label>
                        <input type="password" name="sifre">

                        <input type="submit" value="Kayıt Ol" class="button mid dark">
                       
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
                    
      