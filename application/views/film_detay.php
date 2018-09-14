
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
            <h2>Film Detay</h2>
            <p>Anasayfa<span class="separator">/</span><span class="current-section">Film Detay</span></p>
        </div>
    </div>
   

   <div class="section-wrap">
        <div class="section">
            <!-- CONTENT -->
            <div class="content left">
                <!-- POST -->

                <article class="post">
                    <?php foreach ($resimler as $veri) { ?>
                        
                  

                   <div class="post-image">
                       

                        
                        <!-- SLIDE CONTROLS -->
                        <div class="slide-control-wrap">
                            <div class="slide-control rounded left">
                                <!-- SVG ARROW -->
                                <svg class="svg-arrow">
                                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-arrow"></use>
                                </svg>
                                <!-- /SVG ARROW -->
                            </div>

                            <div class="slide-control rounded right">
                                <!-- SVG ARROW -->
                                <svg class="svg-arrow">
                                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-arrow"></use>
                                </svg>
                                <!-- /SVG ARROW -->
                            </div>
                        </div>

                    </div>
                    <div class="post-image-slides">
                        <!-- IMAGE SLIDES WRAP -->
                        <div class="image-slides-wrap full">
                            <!-- IMAGE SLIDES -->
                            <div class="image-slides" data-slide-visible-full="8" data-slide-visible-small="2" data-slide-count="9" style="left: 0px;">
                                <!-- IMAGE SLIDE -->
                                <div class="image-slide" data-index="0" style="left: 0px;">
                                    <div class="overlay"></div>
                                    <figure class="product-preview-image thumbnail liquid imgLiquid_bgSize imgLiquid_ready" style="background-image: url(&quot;<?=base_url()?>uploads/<?=$veri[0]->resim?>&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat;">
                                        <img src="<?=base_url()?>uploads/<?=$veri[0]->Resim?>" alt="" style="display: none;">
                                    </figure>
                                </div>

                            </div>  

                             <div class="image-slides" data-slide-visible-full="8" data-slide-visible-small="2" data-slide-count="9" style="left: 0px;">
                                <!-- IMAGE SLIDE -->
                                <div class="image-slide" data-index="0" style="left: 0px;">
                                    <div class="overlay"></div>
                                    <figure class="product-preview-image thumbnail liquid imgLiquid_bgSize imgLiquid_ready" style="background-image: url(&quot;<?=base_url()?>uploads/<?=$veri[0]->resim?>&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat;">
                                        <img src="<?=base_url()?>uploads/<?=$veri[0]->Resim?>" alt="" style="display: none;">
                                    </figure>
                                </div>

                            </div>
                            <!-- IMAGE SLIDES -->
                        </div> <?php } ?>

                    
                        <!-- IMAGE SLIDES WRAP -->
                    </div>
                    <!-- /POST IMAGE SLIDES -->

                    <!-- POST CONTENT -->
                    <div class="post-content with-title">
                        <p class="text-header big"><?=$veri[0]->Ad?></p>
                        <div class="meta-line">
        
                            <div class="metadata">
                                <!-- META ITEM -->
                                <div class="meta-item">
                                    <span class="icon-bubble"></span>
                                    <p>05</p>
                                </div>
                                <!-- /META ITEM -->

                                <!-- META ITEM -->
                                <div class="meta-item">
                                    <span class="icon-eye"></span>
                                    <p>68</p>
                                </div>
                                <!-- /META ITEM -->
                            </div>
                            
                        </div>
                        <!-- POST PARAGRAPH -->
                        <div class="post-paragraph">
                           <h3>Yapım:<?=$veri[0]->Yapim?></h3>
                            <p>Oyuncular:<?=$veri[0]->Oyuncular?></p>
                        </div>

                         <div class="post-paragraph">
                           <h3>Puan:<?=$veri[0]->Puan?></h3>
                            <p> <?=$veri[0]->Konu?></p>
                        </div>
                        <!-- /POST PARAGRAPH -->

                    </div>
                    <!-- /POST CONTENT -->

                    <hr class="line-separator">

                </article>
             
               
                <div class="blog-comments">
                    
                    <!-- LINE SEPARATOR -->
                    <hr class="line-separator">
                    <!-- /LINE SEPARATOR -->
                    
                    <!-- COMMENTS -->
                    <div class="comment-list">
                        <!-- COMMENT -->
                        <?php foreach ($yorumlar as $y) { ?>
                        <div class="comment-wrap">
                            <!-- USER AVATAR -->
                            <a href="user-profile.html">
                                <figure class="user-avatar medium">
                                    <img src="<?=base_url()?>assest/images/avatars/avatar_09.jpg" alt="">
                                </figure>
                            </a>
                            <!-- /USER AVATAR -->
                            




                            <div class="comment">
                                <p class="text-header"><?=$y->adi?></p>
                                
                                
                                <p><?=$y->yorum?></p>
                            </div>
                            
                        </div>
                        <?php }?>
                        <!-- /COMMENT -->

                        <!-- LINE SEPARATOR -->
                        <hr class="line-separator">
                        <!-- /LINE SEPARATOR -->

                        <!-- COMMENT -->
                        
                        <!-- /COMMENT -->

                        <!-- LINE SEPARATOR -->
                        <hr class="line-separator">
                        <!-- /LINE SEPARATOR -->

                        <!-- COMMENT -->
                       
                        <!-- /COMMENT -->

                        <!-- LINE SEPARATOR -->
                        <hr class="line-separator">
                        

                        <div class="clearfix"></div>

                        <!-- LINE SEPARATOR -->
                        <hr class="line-separator">
                        <!-- /LINE SEPARATOR -->

                        <h3>Yorum</h3>

                        <!-- COMMENT REPLY -->
                        <div class="comment-wrap comment-reply">
                            <!-- USER AVATAR -->
                            <a href="user-profile.html">
                                <figure class="user-avatar medium">
                                    <img src="<?=base_url()?>assest/images/avatars/avatar_09.jpg" alt="">
                                </figure>
                            </a>
                            <!-- /USER AVATAR -->

                            <!-- COMMENT REPLY FORM -->
                            <form method="post" action="<?=base_url()?>home/yorum_ekle/<?php echo $id?>" class="comment-reply-form">
                                <textarea name="treply1" placeholder="Yorumu ekleyiniz"></textarea>
                                <?php if ($this->session->flashdata("mesaj")) { ?>
                                
                                 <?=$this->session->flashdata("mesaj")?></span></a>
                            
                            <?php } ?>
                            <button class="button primary">Ekle</button>

                            </form>
                            <!-- /COMMENT REPLY FORM -->
                        </div>
                        <!-- /COMMENT REPLY -->
                    </div>
                    <!-- /COMMENTS -->
                </div>
                <!-- /BLOG COMMENTS ..........................................................................-->
            </div>

            <!-- CONTENT -->

           
                            <!-- /META ITEM -->

                            <!-- META ITEM -->
                            
                            <!-- /META ITEM -->
                        </div>
                        <!-- /METADATA -->
                    </div>
                    <!-- /ITEM PREVIEW -->

                  
                    
                    <!-- /ITEM PREVIEW -->
                </div>
              
             
            </div>
            <!-- /SIDEBAR -->
        </div>
    </div>