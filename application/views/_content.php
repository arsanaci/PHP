            <div class="content right">
                <!-- HEADLINE -->
                <div class="headline buttons primary">
                    <h4>Yeni Ekleneler</h4>
                </div>
                <!-- /HEADLINE -->

                <!-- PRODUCT LIST -->
                <div class="product-list grid column3-4-wrap">
                  <?php foreach ($yeni as $rs) { ?>
                    <div class="product-item column">

                        <div class="product-preview-actions"> 
                            <!-- PRODUCT PREVIEW IMAGE -->
                            <figure class="product-preview-image">
                                <img src="<?=base_url()?>uploads/<?=$rs->Resim?>" height="250">
                            </figure>
                 
                            <div class="preview-actions">
                                <!-- PREVIEW ACTION -->
                                <div class="preview-action">
                                    <a href="<?=base_url()?>home/film_detay/<?=$rs->Id?>">
                                        <div class="circle tiny primary">
                                            <span class="icon-tag"></span>
                                        </div>
                                    </a>
                                    <?=$rs->Ad?>

                                </div>
                        
                                <div class="preview-action">
                                    <a href="<?=base_url()?>uye/favori_ekle/<?php echo $rs->Id ?>">
                                        <div class="circle tiny secondary">
                                            <span class="icon-heart"></span>
                                        </div>
                                    </a>
                                    <a href="#">
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                    <?php } ?>

                            </div>
                        </div>

                         <div class="content right">
                <!-- HEADLINE -->
                <div class="headline buttons primary">
                    <h4>Bizim Seçtiklerimiz</h4>
                </div>

                <div class="product-list grid column3-4-wrap">
                  <?php foreach ($random as $rs) { ?>
                    <div class="product-item column">

                        <div class="product-preview-actions"> 
                            <!-- PRODUCT PREVIEW IMAGE -->
                            <figure class="product-preview-image">
                                <img src="<?=base_url()?>uploads/<?=$rs->Resim?>" height="250">
                            </figure>
                 
                            <div class="preview-actions">
                                <!-- PREVIEW ACTION -->
                                <div class="preview-action">
                                     <a href="<?=base_url()?>home/film_detay/<?=$rs->Id?>">
                                        <div class="circle tiny primary">
                                            <span class="icon-tag"></span>
                                        </div>
                                    </a>
                                  
                                    <?=$rs->Ad?>

                                </div>
                        
                                <div class="preview-action">
                                    <a href="#">
                                        <div class="circle tiny secondary">
                                            <span class="icon-heart"></span>
                                        </div>
                                    </a>
                                    <a href="#">
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div><?php } ?>

                            </div>
                        </div>
              
