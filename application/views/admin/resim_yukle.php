﻿    <?php
            $this->load->view('admin/_header');
        $this->load->view('admin/_sidebar');

    ?>
                <ul class="breadcrumb">                  
                    <h2>Ürün Fotoğraf Ekleme</h2>
                </ul>

                <!-- END BREADCRUMB -->                
                
                <div class="page-title">                    
                    <h3><span class="fa fa-pencil"></span> Eklenecek Fotoğrafı Seçiniz</h3>
                </div>                   
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">

                
                     <div class="block">
                        Yüklenecek fotoğraf dosyası türleri (gif|jpg|png) max boyutlar: 1024x1024, 1000Kb
                        <?php if ($this->session->flashdata("mesaj")) { ?>
                        <div class="alert alert-info" role="alert">
                               
                                <strong>Hata!</strong><?=$this->session->flashdata("mesaj")?>
                            </div>
                            <?php } ?>
                               <form class="" method="post" enctype="multipart/form-data" action="<?=base_url()?>admin/filmler/resim_kaydet/<?=$Id?>">
                                <form role="form">
                                   
                                        <input type="file" name="Resim" class="form-control" placeholder="Yükleme için gözat"/>
                                    </div>
                                    
                                    <div class="checkbox pull-left">
                                        
                                         <div class="panel-footer">                                   
                                    <button class="btn btn-primary pull-right">Fotoğraf Yükle</button>
                                </div>            
                                   
                                    </div>                                    
                                </form>  
                                <img src="<?=base_url()?>uploads/<?=$veri[0]->Resim?>" height="75">

                            </div>   

        <!-- END PAGE CONTAINER -->

        <!-- MESSAGE BOX-->
        <div class="message-box animated fadeIn" data-sound="alert" id="mb-signout">
            <div class="mb-container">
                <div class="mb-middle">
                    <div class="mb-title"><span class="fa fa-sign-out"></span> Log <strong>Out</strong> ?</div>
                    <div class="mb-content">
                        <p>Are you sure you want to log out?</p>                    
                        <p>Press No if youwant to continue work. Press Yes to logout current user.</p>
                    </div>

                    <?php
                    $this->load->view('admin/_footer');

                    ?>