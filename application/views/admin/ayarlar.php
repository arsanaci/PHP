    <?php
            $this->load->view('admin/_header');
        $this->load->view('admin/_sidebar');

    ?>
                <ul class="breadcrumb">
                    <h2>Film Düzenleme Formu</h2>
                                             
                </ul>

                <div class="page-title">                    
                    <h3><span class="fa fa-pencil"></span> Ayarları Düzenleyiniz</h3>
                </div>                   
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">

                
                     <div class="block">
                               <form class="" method="post" action="<?=base_url()?>admin/home/ayarlar_guncelle/<?=$veri[0]->Id?>"
                                <form role="form">
                                    <div class="form-group">
                                        <label>Adı</label>
                                        <input style="height:30px; width:400px" type="text" value="<?=$veri[0]->adi?>" name="adi" class="form-control"/>
                                    </div>
                                    <div class="form-group">
                                        <label>Keywords</label>
                                        <input style="height:30px; width:400px" type="text" value="<?=$veri[0]->keywords?>" name="keywords" class="form-control"/>
                                    </div>
                                    <div class="form-group">
                                        <label>Description</label>
                                        <input style="height:30px; width:400px" type="text" value="<?=$veri[0]->description?>" name="description" class="form-control"/>
                                    </div>
                                   
                                    <div class="form-group">
                                        <label>Hakkımızda</label>
                                        <textarea name="hakkimizda" rows="10" cols="58"><?=$veri[0]->hakkimizda?></textarea>

                                    </div>  
                                     <div class="form-group">
                                        <label>İletişim</label>
                                        <textarea name="iletisim" rows="10" cols="58"><?=$veri[0]->iletisim?></textarea>

                                    </div>
                                    <div class="form-group">
                                                <label class="control-label">Smpt Server </label>
                                                <input class="form-control" value="<?=$veri[0]->smtpserver?>" name="smtpserver"  type="text" >
                                                </div>
                                               <div class="form-group">
                                                <label class="control-label">Smtp Email</label>
                                                <input class="form-control" value="<?=$veri[0]->smtpemail?>" name="smtpemail" type="text" >
                                               </div>
                                               <div class="form-group">
                                                <label class="control-label">Port</label>
                                                <input class="form-control" value="<?=$veri[0]->port?>" name="port" type="text" >
                                               </div>                                                           
                                    </div>

                                    <div class="checkbox pull-left">
                                        
                                         <div class="panel-footer">                                 
                                    <button type="submit" class="btn btn-primary pull-right">Güncelle</button>
                                </div>            
                                   
                                    </div>                                    
                                </form>                            
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
                    <script src="<?=base_url()?>assest/admin/css/ckeditor/ckeditor.js"></script>
                    <script>
                        $(function(){
                            CKEDITOR.replace('hakkimizda')
                            CKEDITOR.replace('iletisim')
                            $('.textarea').wysihtml5()
                        })
                    </script>

            
                   