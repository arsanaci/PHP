<div class="section-wrap">
        <div class="section">
            <!-- FORM BOX ITEM -->
            <div class="form-box-item">
                <h4>Favorile </h4>
                <hr class="line-separator">
                <!-- ALERT BOXES PREVIEW -->
                <div class="alert-boxes-preview">

                    <?php foreach($veriler as $rs){ ?>

                    <div class="alert-boxes-preview-links">
                        <a href="<?=base_url()?>home/film_detay/<?=$rs->filmId?>" class="button mid dark alert-user">
                             <span class="primary"><?=$rs->filmadi?></span>
                        </a>
                     
                      
                    </div>
                    <?php } ?>
                </div>
                <!-- /ALERT BOXES PREVIEW -->
            </div>
  
        </div>
    </div>