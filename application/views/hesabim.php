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
                    <li class="menu-item">
                        <a href="<?=base_url()?>home/login">Login</a>
                    </li>

                
        </div>
    </div>
    <div class="section-headline-wrap">
        <div class="section-headline">
            <h2>Hesabım</h2>
            <p>Login<span class="separator">/</span><span class="current-section">Hesabım</span></p>
        </div>
    </div>

    <!-- SECTION -->
    <div class="section-wrap">
        <div class="section">
            <!-- CONTENT -->
            <div class="sidebar left">
                <!-- DROPDOWN -->
                <ul class="dropdown hover-effect">

                    <ul class="dropdown hover-effect">


                    <li class="dropdown-item">
                        <a href="#">Design Inspires<span class="item-count">12</span></a>
                    </li>
                    <li class="dropdown-item">
                        <a href="#">Software<span class="item-count">27</span></a>
                    </li>
                    <li class="dropdown-item">
                        <a href="#">Interviews<span class="item-count">8</span></a>
                    </li>
                    <li class="dropdown-item">
                        <a href="#">Resources / Freebies<span class="item-count">15</span></a>
                    </li>
                    <li class="dropdown-item">
                        <a href="#">Technology<span class="item-count">19</span></a>
                    </li>
            

                    </ul>
                </div>
                <!-- POST -->
                <article class="post blog-post">
                  
                        <div class="post-paragraph">
                           
                            <div class="form-popup">

                <!-- FORM POPUP HEADLINE -->
                <div class="form-popup-headline secondary">
                    <h2>Üye Hesap Bilgileri</h2>
                    
                </div>
               <div class="form-popup-content">
                    <form method="post" action="<?=base_url()?>uye/uye_guncelle/<?=$this->session->uye_session["id"]?>">
                    
                        <?php if($this->session->flashdata("mesaj")) { ?>

                         <p>  <?=$this->session->flashdata("mesaj")?> </p>

                         <?php } ?>
                        <label class="rl-label">Adı</label>
                        <input type="text" name="name">
                        <label class="rl-label">Telefon</label>
                        <input type="text" name="tel">
                        <label class="rl-label">Şehir</label>
                        <input type="text" name="sehir">
                        <label class="rl-label">Email</label>
                        <input type="email" name="email">
                        <label class="rl-label">Şifre</label>
                        <input type="password" name="sifre">
              
                       
                        <button class="button mid dark"><span class="primary">Güncelle</span></button><br>
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
                    
      