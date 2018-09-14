<!DOCTYPE html>
<html lang="en">
    <head>        

        <!-- META SECTION -->
        <title>TITLE</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <link rel="icon" href="<?=base_url()?>assest/favicon.ico" type="image/x-icon" />

        <!-- END META SECTION -->
        
        <!-- CSS INCLUDE -->        
        <link rel="stylesheet" type="text/css" id="theme" href="<?=base_url()?>assest/admin/css/theme-default.css"/>
        <!-- EOF CSS INCLUDE -->
    </head>
    <body>

        <!-- START PAGE CONTAINER -->
        <div class="page-container">

            <!-- START PAGE SIDEBAR -->
            <div class="page-sidebar">

                <!-- START X-NAVIGATION -->
                <ul class="x-navigation">


                    <li class="xn-logo">
                        
                        <a href="index.html"><?php if ($this->session->userdata("admin_session"))
                    { ?>
                     <?php echo $this->session->userdata("admin_session")->name; ?>
                     <?php } ?></a>
                        <a href="#" class="x-navigation-control"></a>
                    </li>



            
                                                                                            
                    