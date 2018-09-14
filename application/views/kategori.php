<div class="section-wrap">
        <div class="section">
            <!-- FORM BOX ITEM -->
            <div class="form-box-item">
                <h4>Kategori</h4>
                <hr class="line-separator">
                <!-- ALERT BOXES PREVIEW -->
                <div class="alert-boxes-preview">

                    <?php foreach($filmler as $rs){ ?>

                    <div class="alert-boxes-preview-links">
                        <a href="<?=base_url()?>home/kategori_detay/<?=$rs->Id?>" class="button mid dark alert-user">
                             <span class="primary"><?=$rs->Ad?></span>
                        </a>
                     
                      
                    </div>
                    <?php } ?>
                </div>
                <!-- /ALERT BOXES PREVIEW -->
            </div>
  
        </div>
    </div>