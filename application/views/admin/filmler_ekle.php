﻿    <?php
            $this->load->view('admin/_header');
        $this->load->view('admin/_sidebar');

    ?>
                <ul class="breadcrumb">                  
                    <h2>Film Ekleme</h2>
                                       
                    
                </ul>

                <!-- END BREADCRUMB -->                
                
                <div class="page-title">                    
                    <h3><span class="fa fa-pencil"></span> Film Bilgilerini Giriniz</h3>
                </div>                   
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">

                
                     <div class="block">
                               <form class="" method="post" action="<?=base_url()?>admin/filmler/ekle_kaydet"
                                <form role="form">
                                    <div class="form-group">
                                    <label>Ad</label>
                                        <input style="height:30px; width:400px" type="text" name="Ad" class="form-control"/>
                                    </div>
                                    <div class="form-group">
                                        <label>Kategori</label>                
                                      <select style="height:30px; width:400px" name="Kategori" class="form-control">
                                            <option>Komedi</option>
                                            <option>Gerilim</option>
                                            <option>Dram</option>
                                             <option>Biyografi</option>
                                            <option>Aksiyon</option>
                                            <option>Bilim Kurgu</option>
                                        </select>
                                        </div>
                                    <div class="form-group">
                                        <label>Puan</label>
                                        <input style="height:30px; width:400px" type="text" name="Puan" class="form-control"/>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label>Fotoğraf</label>
                                        <input style="height:30px; width:400px" type="file" name="tel" class="form-control"/>
                                    </div>
                                    <div class="form-group">
                                        <label>Tarih</label>
                                        <input style="height:30px; width:400px" type="text" name="Tarih" class="form-control"/>
                                    </div>
                                   
                                   
                                    <div class="form-group">
                                        <label>Yönetmen</label>
                                        <input style="height:30px; width:400px" type="text" name="Yonetmen" class="form-control"/>
                                    </div>
                                    <div class="form-group">
                                        <label>Yapim</label>
                                        <input style="height:30px; width:400px" type="text" name="Yapim" class="form-control"/>
                                    </div>                                    
                                    </div>                
                                    </div>

                                    <div class="checkbox pull-left">
                                        
                                         <div class="panel-footer">
                                    <button class="btn btn-default" >Temizle</button>                                    
                                    <button class="btn btn-primary pull-right">Kaydet</button>
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