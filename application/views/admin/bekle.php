    <?php
            $this->load->view('admin/_header');
        $this->load->view('admin/_sidebar');
    ?>
                <ul class="breadcrumb">
                                     
                  
                </ul>
                <!-- END BREADCRUMB -->                
                
                <div class="page-title">                    
                    <h2><span class="fa fa-file-text-o"></span></h2>

                </div>                   
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">

                
                     <!-- START BORDERED TABLE SAMPLE -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                
                                   <?=$this->session->flashdata("mesaj") ?>
                                </div>
                                <div class="panel-body">
                                    
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                             
                                                  <th>FilmId</th>
                                                  <th>Onay</th>
                                                  <th>Yorum</th>
                                                <th>Düzenle</th>

                                               

                                            </tr>
                                        </thead>
                                        <?php
                                        $sno=0;
                                        foreach ($veri as $rs)
                                        { $sno++;
                                        ?>
                                        
                                            <tr>

                                  
                                                <td><?=$rs->adi?></td>
                                        
                                                <td><?=$rs->filmId?></td>
                                                <td><?=$rs->onay?></td>
                                                <td><?=$rs->yorum?></td>
                                                <td><a href="<?=base_url()?>admin/home/duzenle/<?=$rs->Id?>" class="btn btn-info btn-rounded" > <i class="fa fa-refresh"></i>Düzenle</td>
                                                

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