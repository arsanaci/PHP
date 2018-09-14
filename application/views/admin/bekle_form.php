    <?php
            $this->load->view('admin/_header');
        $this->load->view('admin/_sidebar');

    ?>
                <ul class="breadcrumb">
                    <h2>Düzenleme Formu</h2>
                                       
                   
                </ul>

                <!-- END BREADCRUMB -->                
                
                <div class="page-title">                    
                    <h3><span class="fa fa-pencil"></span> </h3>
                </div>                   
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">

                
                     <div class="block">
                               <form class="" method="post" action="<?=base_url()?>admin/home/guncelle/<?=$veri[0]->Id?>">
                                <form role="form">
                                    <div class="form-group">
                                        <label>Adı</label>
                                        <input style="height:30px; width:400px" type="text" value="<?=$veri[0]->adi?>" name="adi" class="form-control"/>
                                    </div>
                                    <div class="form-group">
                                        <label>FilmId</label>
                                        <input style="height:30px; width:400px" type="text" value="<?=$veri[0]->filmId?>" name="filmId" class="form-control"/>
                                    </div>
                            
                                    <div class="form-group">
                                        <label>Yorum</label>
                                        <input style="height:30px; width:400px" type="text" value="<?=$veri[0]->yorum?>" name="yorum" class="form-control"/>
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