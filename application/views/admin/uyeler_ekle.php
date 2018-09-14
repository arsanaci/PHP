    <?php
            $this->load->view('admin/_header');
        $this->load->view('admin/_sidebar');

    ?>
                <ul class="breadcrumb">                  
                    <h2>Üye Ekleme</h2>
                                       
                    <li class="active" method="post" action="<?=base_url()?> admin/uyeler/ekle_kaydet"</li>
                </ul>

                <!-- END BREADCRUMB -->                
                
                <div class="page-title">                    
                    <h3><span class="fa fa-pencil"></span> Üye Bilgilerini Giriniz</h3>
                </div>                   
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">

                
                     <div class="block">
                               <form class="" method="post" action="<?=base_url()?>admin/uyeler/ekle_kaydet"
                                <form role="form">
                                    <div class="form-group">
                                        <label>Ad Soyad</label>
                                        <input style="height:30px; width:400px" type="text" name="name" class="form-control"/>
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input style="height:30px; width:400px" type="email" name="email" class="form-control"/>
                                    </div>
                                    <div class="form-group">
                                        <label>Şifre</label>
                                        <input style="height:30px; width:400px" type="password" name="sifre" class="form-control"/>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label>Telefon</label>
                                        <input style="height:30px; width:400px" type="text" name="tel" class="form-control"/>
                                    </div>
                                    <div class="form-group">
                                        <label>Şehir</label>
                                        <input style="height:30px; width:400px" type="text" name="sehir" class="form-control"/>
                                    </div>
                                    <div class="form-group">
                                        <label>Yetki</label>                
                                      <select style="height:30px; width:400px" name="yetki" class="form-control">
                                            <option>Üye</option>
                                            <option>Admin</option>
                                            <option>Yazar</option>
                                        </select>
                                        </div>

                                        <div class="form-group">
                                        <label>Durum</label>                
                                      <select style="height:30px; width:400px" name="durum" class="form-control">
                                            <option>Aktif</option>
                                            <option>Pasif</option>
                                            
                                        </select>
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