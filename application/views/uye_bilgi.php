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
            <h2>Hesabım</h2>
            <p>Anasayfa<span class="separator">/</span><span class="current-section">Hesabım</span></p>
        </div>
    </div>

    <!-- SECTION -->
    <div class="section-wrap">
        <div class="section">


            <div class="sidebar right post-paragraph" style="width:70%">
                           
             <!--/Form Bilgileri -->
                <div class="form-popup">
               
  <form method="post" action="<?=base_url()?>home/uye_guncelle/<?=$veri->Id?>">
                <!-- FORM POPUP HEADLINE -->
                <div class="form-popup-headline primary">
                  
                    <h2>
                    <p>Kişi Bilgileri</p></h2>

                </div>
                                
                <div class="form-popup-content">
            
                        <label for="username6" class="rl-label">Adınız</label>
                        <input type="text" name="name" value="<?=$veri->Name?>">
                        <label for="email_address6" class="rl-label">Mail Adresiniz</label>
                        <input type="email" name="email" value="<?=$veri->email?>"> 
                        <label for="username6" class="rl-label">Telefon Numaranız</label>
                        <input type="text" name="tel" value="<?=$veri->tel?>">
                        <label for="username6" class="rl-label">Şehir</label>
                        <input type="text" name="sehir" value="<?=$veri->sehir?>">
                        <label for="username6" class="rl-label">Şifre</label>
                        <input type="text" name="sifre" value="<?=$veri->sifre?>">
                                              
                        
                        <button type="submit" class="button mid dark"><span class="primary">Güncelle</span></button>
                    
                    
                <!-- /FORM POPUP CONTENT -->
            </div>
            </form>
            <!--/Form Bilgileri Bitiş-->
                        </div>
                        <!-- /POST PARAGRAPH -->
                    </div>
               
               


                        <?php if($this->session->flashdata("mesaj")) { ?>

                         <p>  <?=$this->session->flashdata("mesaj")?> </p>

                         <?php } ?>

                        <div class="sidebar left">
                <!-- DROPDOWN -->
                <ul class="dropdown hover-effect">
                    <li class="dropdown-item">
                        <a href="<?=base_url()?>home/uye_bilgi"><h4>Hesap Bilgilerim</h4></a>
                    </li>
                    <li class="dropdown-item">
                        <a href="<?=base_url()?>uye/favoriler"><h4>Favorilerim</h4></a>
                    </li>
                    <li class="dropdown-item">
                        <a href="<?=base_url()?>Uye/yorumlar"><h4>Yorumlarım</h4></a>
                    </li>
                    <li class="dropdown-item">
                       <a href="<?=base_url()?>Uye/bekleyen_yorumlar"><h4>Bekleyenler</h4></a>
                    </li>
                 
                </ul>
                <!-- /DROPDOWN -->

                
            </div>
                     
                       
                       

                        
                    </form>
                    <!-- LINE SEPARATOR -->
                    
                    <!-- /LINE SEPARATOR -->  
                  
                <!-- /FORM POPUP CONTENT -->
           
            </div>
                        <!-- /POST PARAGRAPH -->
                    </div>
                  </div>
                    
      