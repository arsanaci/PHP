    <?php
            $this->load->view('admin/_header');
        $this->load->view('admin/_sidebar');
    ?>
                <ul class="breadcrumb">
                                     
                  
                </ul>
                <!-- END BREADCRUMB -->                
                
                <div class="page-title">                    
                    <h2><span class="fa fa-file-text-o"></span> Uye Listesi</h2>

                </div>                   
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">

                
                     <!-- START BORDERED TABLE SAMPLE -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                   <a href="<?=base_url()?>admin/uyeler/ekle" class="btn btn-success" <i class="fa fa-plus"></i>Üye Ekle </a>
                                   <?=$this->session->flashdata("mesaj") ?>
                                </div>
                                <div class="panel-body">
                                    
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>S.No</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Tel</th>
                                                <th>Sehir</th>
                                                <th>Yetki</th>
                                                <th>Durum</th>
                                                <th>Düzenle</th>
                                                <th>Sil</th>

                                            </tr>
                                        </thead>
                                        <?php
                                        $sno=0;
                                        foreach ($veriler as $rs)
                                        { $sno++;
                                        ?>
                                        
                                            <tr>

                                                <td><?=$sno?></td>
                                                <td><?=$rs->Name?></td>
                                                <td><?=$rs->email?></td>
                                                <td><?=$rs->tel?></td>
                                                <td><?=$rs->sehir?></td>
                                                <td><?=$rs->yetki?></td>
                                                <td><?=$rs->durum?></td>
                                                <td><a href="<?=base_url()?>admin/uyeler/duzenle/<?=$rs->Id?>" class="btn btn-info btn-rounded" > <i class="fa fa-refresh"></i>Düzenle</td>
                                                <td><a href="<?=base_url()?>admin/uyeler/sil/<?=$rs->Id?>" class="btn btn-danger btn-rounded" onclick="return confirm('Silmek İstediğinizden Emin Misiniz?')"> <i class="fa fa-trash-o"></i>Sil</td>
                                                

                                            </tr>

                                       
                                        <?php } ?>
                                    </table>                                
                                </div>
                            </div>
                            <!-- END BORDERED TABLE SAMPLE -->
                </div>
                <!-- END PAGE CONTENT WRAPPER -->                
            </div>            
            <!-- END PAGE CONTENT -->
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