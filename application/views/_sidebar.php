<!-- SECTIONa --> 


    <div class="section-wrap">
        <div class="section overflowable">
            <!-- SIDEBAR -->
            <div class="sidebar left author-profile">
                <!-- SIDEBAR ITEM -->
                <div class="sidebar-item author-bio">
                    <!-- USER AVATAR -->
                    <a href="user-profile.html" class="user-avatar-wrap medium">
                        <figure class="user-avatar medium">
                            <img src="<?=base_url()?>assest/images/avatars/avatar_09.jpg" alt="">
                        </figure>
                    </a>
                    <!-- /USER AVATAR -->
                    <p class="text-header">Film_Forum</p>
                    <p class="text-oneline">Yeni Yüklenen Filmler<br>En Çok Beğeni Alan Filmler</p>
                    <!-- SHARE LINKS -->
                    <ul class="share-links">
                        <li><a href="#" class="fb"></a></li>
                        <li><a href="#" class="twt"></a></li>
                        <li><a href="#" class="db"></a></li>
                    </ul>
                    <!-- /SHARE LINKS -->
                 
                    <a href="<?=base_url()?>home/bize_yazin" class="button mid dark spaced">Mesaj</a>
                </div>
                <!-- /SIDEBAR ITEM -->

                
        

                <!-- DROPDOWN -->
                <ul class="dropdown hover-effect">

                    <?php foreach ($kategoriler as $rs) { ?>
                    
                    <li class="dropdown-item active">
                        <a href="<?=base_url()?>home/kategori_detay/<?=$rs->Id?>"><?=$rs->adi?></a>
                    </li>

                    <?php } ?>
                  
                </ul>


                <!-- /DROPDOWN -->

                <!-- SIDEBAR ITEM -->
                
                <!-- /SIDEBAR ITEM -->
            </div>
            <!-- /SIDEBAR -->
        
