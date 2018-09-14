<div class="section-wrap">
        <div class="section">
            <!-- FORM BOX ITEM -->
            <div class="form-box-item">
                <h4>Yorumlar </h4>
                <hr class="line-separator">
                <!-- ALERT BOXES PREVIEW -->
                <div class="alert-boxes-preview">

                    <?php foreach($veriler as $rs){ ?>

                    <div class="alert-boxes-preview-links">
                            <h4><?=$rs->filmad?></h4>
                             <span class="primary"><?=$rs->yorum?></span>
                     
                     
                      
                    </div>
                    <?php } ?>
                </div>
                <!-- /ALERT BOXES PREVIEW -->
            </div>
  
        </div>
    </div>