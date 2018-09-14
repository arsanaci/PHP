    <?php
            $this->load->view('admin/_header');
        $this->load->view('admin/_sidebar');

    ?>
                <ul class="breadcrumb">
                    <h2>Film Düzenleme Formu</h2>
                                       
                    <li class="active" method="post" action="<?=base_url()?> admin/filmler/guncelle<?=$veri[0]->Id ?>"</li>
                </ul>

                <!-- END BREADCRUMB -->                
                
                <div class="page-title">                    
                    <h3><span class="fa fa-pencil"></span> Film Bilgilerini Düzenleyiniz</h3>
                </div>                   
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">

                
                     <div class="block">
                               <form class="" method="post" action="<?=base_url()?>admin/filmler/guncelle/<?=$veri[0]->Id?>"
                                <form role="form">
                                    <div class="form-group">
                                        <label>Ad</label>
                                        <input style="height:30px; width:400px" type="text" value="<?=$veri[0]->Ad?>" name="Ad" class="form-control"/>
                                    </div>
                                    <div class="form-group">
                                        <label>Kategori</label>                
                                      <select style="height:30px; width:400px" name="Kategori" class="form-control">
                                        <option value="<?=$veri[0]->Kategori?>"><?=$veri[0]->katadi?></option>
                                     <?php foreach($veriler as $rs) { ?>
                                     <option value="<?=$rs->Id?>"><?=$rs->adi?></option>
                                
                                     <?php } ?>
                                        </select>
                                        </div>
                                    <div class="form-group">
                                        <label>Puan</label>
                                        <input style="height:30px; width:400px" type="text" value="<?=$veri[0]->Puan?>" name="Puan" class="form-control"/>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label>Fotoğraf</label>
                                        <input style="height:30px; width:400px" type="file" value="<?=$veri[0]->Resim?>" name="Resim" class="form-control"/>
                                    </div>
                                    <div class="form-group">
                                        <label>Tarih</label>
                                        <input style="height:30px; width:400px" type="text" value="<?=$veri[0]->Tarih?>" name="Tarih" class="form-control"/>
                                    </div>
                                   
                                   
                                    <div class="form-group">
                                        <label>Yönetmen</label>
                                        <input style="height:30px; width:400px" type="text" value="<?=$veri[0]->Yonetmen?>" name="Yonetmen" class="form-control"/>
                                    </div>
                                    <div class="form-group">
                                        <label>Yapim</label>
                                        <input style="height:30px; width:400px" type="text" value="<?=$veri[0]->Yapim?>" name="Yapim" class="form-control"/>
                                    </div> 
                                    <div class="form-group">
                                        <label>Konu</label>
                                        <textarea name="Konu" rows="10" cols="58"><?=$veri[0]->Konu?></textarea>

                                    </div>                                                         
                                    </div>

                                    <div class="checkbox pull-left">
                                        
                                         <div class="panel-footer">                                 
                                    <button class="btn btn-primary pull-right">Güncelle</button>
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
                            CKEDITOR.replace('Konu')
                            $('.textarea').wysihtml5()
                        })
                    </script>

            
                   